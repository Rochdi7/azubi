import fs from 'node:fs/promises';
import { existsSync } from 'node:fs';
import path from 'node:path';
import os from 'node:os';
import { spawn } from 'node:child_process';

const projectRoot = process.cwd();
const outputRoot = path.join(projectRoot, 'docs', 'chunk-migration');
const screenshotRoot = path.join(outputRoot, 'screenshots');
const outputJson = path.join(outputRoot, 'runtime-audit.json');
const baseUrl = process.env.AZUBI_BASE_URL || 'http://127.0.0.1:8000';
const browserPort = Number(process.env.AZUBI_BROWSER_PORT || 9222);

const routeConfigs = [
  { path: '/', label: 'home' },
  { path: '/consultation', label: 'consultation' },
  { path: '/contact', label: 'contact' },
  { path: '/jobs', label: 'jobs' },
  { path: '/about', label: 'about' },
  { path: '/partner-with-us', label: 'partner-with-us' },
  { path: '/faq', label: 'faq' },
  { path: '/sectors', label: 'sectors' },
  { path: '/sectors/healthcare', label: 'sector-healthcare' },
  { path: '/tools', label: 'tools-index' },
  { path: '/tools/document-checklist', label: 'tool-document-checklist' },
  { path: '/tools/living-cost-calculator', label: 'tool-living-cost-calculator' },
  { path: '/tools/roi-calculator', label: 'tool-roi-calculator' },
  { path: '/tools/career-pathway-decision', label: 'tool-career-pathway-decision' },
  { path: '/tools/pre-departure-checklist', label: 'tool-pre-departure-checklist' },
  { path: '/login', label: 'auth-login', expectedStatus: 404 },
  { path: '/dashboard', label: 'dashboard-root', expectedStatus: 404 },
  { path: '/de', label: 'german-root', expectedStatus: 404 },
  { path: '/blog', label: 'blog-root', expectedStatus: 404 },
  { path: '/arbeitgeber', label: 'employer-root', expectedStatus: 404 },
];

const desktopViewport = {
  width: 1440,
  height: 2200,
  deviceScaleFactor: 1,
  mobile: false,
};

const mobileViewport = {
  width: 375,
  height: 2200,
  deviceScaleFactor: 2,
  mobile: true,
};

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

function slugForRoute(routePath) {
  const normalized = routePath.replace(/^\/+|\/+$/g, '').replace(/[^a-z0-9]+/gi, '-');
  return normalized || 'home';
}

function findBrowserPath() {
  const candidates = [
    process.env.CHROME_BIN,
    'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe',
    'C:\\Program Files (x86)\\Google\\Chrome\\Application\\chrome.exe',
    'C:\\Program Files\\Microsoft\\Edge\\Application\\msedge.exe',
    'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe',
  ].filter(Boolean);

  for (const candidate of candidates) {
    if (candidate && existsSync(candidate)) {
      return candidate;
    }
  }

  throw new Error('No supported Chrome/Edge executable found for runtime audit.');
}

async function fetchJson(url, options = {}) {
  const response = await fetch(url, options);
  if (!response.ok) {
    throw new Error(`Failed to fetch ${url}: ${response.status}`);
  }
  return response.json();
}

async function fetchText(url, options = {}) {
  const response = await fetch(url, options);
  if (!response.ok) {
    throw new Error(`Failed to fetch ${url}: ${response.status}`);
  }
  return response.text();
}

async function waitForDebugger() {
  const timeoutAt = Date.now() + 15000;
  while (Date.now() < timeoutAt) {
    try {
      return await fetchJson(`http://127.0.0.1:${browserPort}/json/version`);
    } catch {
      await sleep(250);
    }
  }
  throw new Error(`Chrome DevTools port ${browserPort} did not become ready.`);
}

async function ensureBrowser() {
  try {
    const version = await fetchJson(`http://127.0.0.1:${browserPort}/json/version`);
    return { launched: false, version };
  } catch {
    const browserPath = findBrowserPath();
    const userDataDir = path.join(os.tmpdir(), 'azubi-runtime-audit-chrome');
    const args = [
      `--remote-debugging-port=${browserPort}`,
      `--user-data-dir=${userDataDir}`,
      '--headless=new',
      '--disable-gpu',
      '--disable-background-networking',
      '--disable-background-timer-throttling',
      '--disable-extensions',
      '--disable-sync',
      '--hide-scrollbars',
      '--mute-audio',
      '--no-first-run',
      '--no-default-browser-check',
      'about:blank',
    ];
    const child = spawn(browserPath, args, {
      detached: true,
      stdio: 'ignore',
    });
    child.unref();
    const version = await waitForDebugger();
    return { launched: true, version };
  }
}

class DevToolsClient {
  constructor(wsUrl) {
    this.wsUrl = wsUrl;
    this.id = 0;
    this.pending = new Map();
    this.eventHandlers = new Map();
    this.ws = null;
  }

  async connect() {
    this.ws = new WebSocket(this.wsUrl);
    await new Promise((resolve, reject) => {
      const onOpen = () => {
        cleanup();
        resolve();
      };
      const onError = (error) => {
        cleanup();
        reject(error);
      };
      const cleanup = () => {
        this.ws.removeEventListener('open', onOpen);
        this.ws.removeEventListener('error', onError);
      };
      this.ws.addEventListener('open', onOpen);
      this.ws.addEventListener('error', onError);
    });

    this.ws.addEventListener('message', (event) => {
      const message = JSON.parse(String(event.data));
      if (message.id) {
        const entry = this.pending.get(message.id);
        if (!entry) return;
        this.pending.delete(message.id);
        if (message.error) {
          entry.reject(new Error(message.error.message || `DevTools error for ${entry.method}`));
          return;
        }
        entry.resolve(message.result);
        return;
      }

      const handlers = this.eventHandlers.get(message.method) || [];
      for (const handler of handlers) {
        handler(message.params || {});
      }
    });
  }

  async close() {
    if (!this.ws) return;
    if (this.ws.readyState === WebSocket.OPEN) {
      this.ws.close();
    }
    this.pending.clear();
  }

  on(eventName, handler) {
    const handlers = this.eventHandlers.get(eventName) || [];
    handlers.push(handler);
    this.eventHandlers.set(eventName, handlers);
  }

  async send(method, params = {}) {
    const id = ++this.id;
    const payload = JSON.stringify({ id, method, params });
    return new Promise((resolve, reject) => {
      this.pending.set(id, { resolve, reject, method });
      this.ws.send(payload);
    });
  }
}

async function createTarget(url = 'about:blank') {
  const json = await fetchJson(
    `http://127.0.0.1:${browserPort}/json/new?${encodeURIComponent(url)}`,
    { method: 'PUT' }
  );
  return json;
}

async function closeTarget(targetId) {
  try {
    await fetchText(`http://127.0.0.1:${browserPort}/json/close/${targetId}`);
  } catch {
    // Best effort cleanup.
  }
}

function summarizeRequests(requests) {
  const byKind = {
    chunks: [],
    css: [],
    media: [],
    fonts: [],
    images: [],
    api: [],
    bladeScripts: [],
    other: [],
  };

  const seen = new Set();
  for (const request of requests) {
    const url = request.url;
    if (!url || seen.has(url)) continue;
    seen.add(url);

    if (url.includes('/_next/static/chunks/')) {
      byKind.chunks.push(url);
    } else if (url.includes('/_next/static/css/')) {
      byKind.css.push(url);
    } else if (url.includes('/_next/static/media/')) {
      byKind.media.push(url);
    } else if (/\.(woff2?|ttf|otf|eot)(\?|$)/i.test(url)) {
      byKind.fonts.push(url);
    } else if (/\.(png|jpe?g|webp|gif|svg|ico)(\?|$)/i.test(url)) {
      byKind.images.push(url);
    } else if (url.includes('/api/')) {
      byKind.api.push(url);
    } else if (url.includes('/assets/js/')) {
      byKind.bladeScripts.push(url);
    } else {
      byKind.other.push(url);
    }
  }

  return byKind;
}

async function setViewport(client, viewport) {
  await client.send('Emulation.setDeviceMetricsOverride', {
    width: viewport.width,
    height: viewport.height,
    deviceScaleFactor: viewport.deviceScaleFactor,
    mobile: viewport.mobile,
  });

  if (viewport.mobile) {
    await client.send('Emulation.setUserAgentOverride', {
      userAgent:
        'Mozilla/5.0 (iPhone; CPU iPhone OS 17_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Mobile/15E148 Safari/604.1',
      platform: 'iPhone',
    });
  } else {
    await client.send('Emulation.setUserAgentOverride', {
      userAgent:
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',
      platform: 'Windows',
    });
  }
}

async function waitForLoadAndIdle(client, networkState, timeoutMs = 15000) {
  let loadFired = false;
  let idleSince = null;

  const markLoad = () => {
    loadFired = true;
    if (networkState.inflight === 0) {
      idleSince = Date.now();
    }
  };

  const onRequestFinished = () => {
    if (loadFired && networkState.inflight === 0) {
      idleSince = Date.now();
    }
  };

  client.on('Page.loadEventFired', markLoad);
  client.on('Network.loadingFinished', onRequestFinished);
  client.on('Network.loadingFailed', onRequestFinished);

  const deadline = Date.now() + timeoutMs;
  while (Date.now() < deadline) {
    if (loadFired && idleSince && Date.now() - idleSince > 1200) {
      return;
    }
    await sleep(100);
  }
}

async function runDomAction(client, expression) {
  return client.send('Runtime.evaluate', {
    expression,
    awaitPromise: true,
    returnByValue: true,
  });
}

async function captureScreenshot(client, filePath) {
  const result = await client.send('Page.captureScreenshot', {
    format: 'png',
    captureBeyondViewport: true,
    fromSurface: true,
  });
  await fs.writeFile(filePath, Buffer.from(result.data, 'base64'));
}

function detectInteractionPlan(routePath) {
  const plan = [];

  if (
    routePath === '/' ||
    routePath === '/consultation' ||
    routePath === '/contact' ||
    routePath === '/jobs' ||
    routePath === '/about'
  ) {
    plan.push({
      name: 'mobile-menu-toggle',
      script: `
        (() => {
          const toggle = document.querySelector('#mobile-menu-toggle');
          if (!toggle) return { performed: false, reason: 'toggle not found' };
          toggle.click();
          return { performed: true, selector: '#mobile-menu-toggle' };
        })()
      `,
    });
  }

  plan.push({
    name: 'accordion-open',
    script: `
      (() => {
        const button = document.querySelector('.faq-btn-tw, .faq-toggle, button[aria-expanded]');
        if (!button) return { performed: false, reason: 'accordion trigger not found' };
        button.click();
        return { performed: true, text: (button.textContent || '').trim().slice(0, 120) };
      })()
    `,
  });

  plan.push({
    name: 'form-focus',
    script: `
      (() => {
        const field = document.querySelector('main form input, main form textarea, main form select');
        if (!field) return { performed: false, reason: 'form field not found' };
        field.focus();
        if (field.tagName === 'INPUT' || field.tagName === 'TEXTAREA') {
          field.value = 'Audit';
          field.dispatchEvent(new Event('input', { bubbles: true }));
        } else if (field.tagName === 'SELECT' && field.options.length > 1) {
          field.selectedIndex = 1;
          field.dispatchEvent(new Event('change', { bubbles: true }));
        }
        return { performed: true, tag: field.tagName.toLowerCase(), name: field.getAttribute('name') || '' };
      })()
    `,
  });

  plan.push({
    name: 'range-change',
    script: `
      (() => {
        const field = document.querySelector('input[type="range"]');
        if (!field) return { performed: false, reason: 'range input not found' };
        const min = Number(field.min || 0);
        const max = Number(field.max || 100);
        field.value = String(Math.round((min + max) / 2));
        field.dispatchEvent(new Event('input', { bubbles: true }));
        field.dispatchEvent(new Event('change', { bubbles: true }));
        return { performed: true, name: field.getAttribute('name') || '', value: field.value };
      })()
    `,
  });

  return plan;
}

async function inspectRoute(routeConfig) {
  const url = `${baseUrl}${routeConfig.path}`;
  const routeSlug = routeConfig.label || slugForRoute(routeConfig.path);
  const target = await createTarget();
  const client = new DevToolsClient(target.webSocketDebuggerUrl);
  await client.connect();

  const consoleEntries = [];
  const failedRequests = [];
  const requests = [];
  const responses = new Map();
  const networkState = { inflight: 0 };
  let documentStatus = null;

  client.on('Runtime.consoleAPICalled', (params) => {
    const text = (params.args || [])
      .map((arg) => arg.value ?? arg.description ?? '')
      .filter(Boolean)
      .join(' ');
    consoleEntries.push({
      type: params.type,
      text,
    });
  });

  client.on('Log.entryAdded', (params) => {
    consoleEntries.push({
      type: params.entry.level || 'log',
      text: params.entry.text || '',
    });
  });

  client.on('Network.requestWillBeSent', (params) => {
    requests.push({
      url: params.request.url,
      type: params.type,
      method: params.request.method,
      initiator: params.initiator?.type || '',
    });
    networkState.inflight += 1;
  });

  client.on('Network.responseReceived', (params) => {
    responses.set(params.requestId, {
      url: params.response.url,
      status: params.response.status,
      type: params.type,
    });
    if (params.type === 'Document' && params.response.url === url) {
      documentStatus = params.response.status;
    }
    if (params.response.status >= 400) {
      failedRequests.push({
        url: params.response.url,
        status: params.response.status,
        type: params.type,
      });
    }
  });

  client.on('Network.loadingFinished', () => {
    networkState.inflight = Math.max(0, networkState.inflight - 1);
  });

  client.on('Network.loadingFailed', (params) => {
    networkState.inflight = Math.max(0, networkState.inflight - 1);
    const response = responses.get(params.requestId);
    failedRequests.push({
      url: response?.url || '',
      status: params.errorText,
      type: response?.type || '',
    });
  });

  try {
    await client.send('Page.enable');
    await client.send('Network.enable');
    await client.send('Runtime.enable');
    await client.send('Log.enable');
    await client.send('Network.setCacheDisabled', { cacheDisabled: true });

    await setViewport(client, desktopViewport);
    await client.send('Page.navigate', { url });
    await waitForLoadAndIdle(client, networkState);

    const desktopPath = path.join(screenshotRoot, `${routeSlug}-desktop.png`);
    await captureScreenshot(client, desktopPath);

    const interactions = [];
    for (const action of detectInteractionPlan(routeConfig.path)) {
      const result = await runDomAction(client, action.script);
      const value = (result && result.result && result.result.value) || { performed: false };
      interactions.push({
        action: action.name,
        details: value,
      });
      await sleep(400);
    }

    await setViewport(client, mobileViewport);
    await client.send('Page.reload', { ignoreCache: true });
    await waitForLoadAndIdle(client, networkState);
    const mobilePath = path.join(screenshotRoot, `${routeSlug}-mobile.png`);
    await captureScreenshot(client, mobilePath);

    const detection = await runDomAction(
      client,
      `
      (() => {
        const bladeScripts = Array.from(document.scripts)
          .map((script) => script.src)
          .filter(Boolean)
          .filter((src) => src.includes('/assets/js/'));
        const nextScripts = Array.from(document.scripts)
          .map((script) => script.src)
          .filter(Boolean)
          .filter((src) => src.includes('/_next/static/chunks/'));
        const nextCss = Array.from(document.querySelectorAll('link[rel="stylesheet"]'))
          .map((link) => link.href)
          .filter((href) => href.includes('/_next/static/css/'));
        const hasReactFiber = Array.from(document.querySelectorAll('body, body *')).slice(0, 400).some((node) => {
          return Object.keys(node).some((key) => key.startsWith('__reactFiber$') || key.startsWith('__reactProps$'));
        });
        return {
          title: document.title,
          bladeScripts,
          nextScripts,
          nextCss,
          nextRuntimeDetected: typeof window._N_E !== 'undefined' || typeof window.__NEXT_DATA__ !== 'undefined' || typeof window.__next_f !== 'undefined',
          reactHydrationDetected: hasReactFiber,
          hasMobileMenu: !!document.querySelector('#mobile-menu-toggle'),
          hasAccordionTrigger: !!document.querySelector('.faq-btn-tw, .faq-toggle, button[aria-expanded]'),
          bodyClasses: document.body.className,
        };
      })()
      `
    );

    const requestSummary = summarizeRequests(requests);
    return {
      route: routeConfig.path,
      label: routeSlug,
      url,
      expectedStatus: routeConfig.expectedStatus || 200,
      actualStatus: documentStatus,
      title: detection.result.value.title,
      nextRuntimeDetected: detection.result.value.nextRuntimeDetected,
      reactHydrationDetected: detection.result.value.reactHydrationDetected,
      bladeScriptsDetected: detection.result.value.bladeScripts,
      nextScriptsDetected: detection.result.value.nextScripts,
      nextCssDetected: detection.result.value.nextCss,
      requests: requestSummary,
      interactions,
      consoleEntries,
      failedRequests,
      screenshots: {
        desktop: path.relative(projectRoot, desktopPath).replace(/\\/g, '/'),
        mobile: path.relative(projectRoot, mobilePath).replace(/\\/g, '/'),
      },
    };
  } finally {
    await client.close();
    await closeTarget(target.id);
  }
}

async function main() {
  await fs.mkdir(screenshotRoot, { recursive: true });

  const browser = await ensureBrowser();
  const version = browser.version;
  const results = [];

  for (const route of routeConfigs) {
    results.push(await inspectRoute(route));
  }

  const payload = {
    generatedAt: new Date().toISOString(),
    baseUrl,
    browserVersion: version.Browser,
    webSocketVersion: version['WebKit-Version'] || '',
    routes: results,
  };

  await fs.writeFile(outputJson, JSON.stringify(payload, null, 2), 'utf8');
  process.stdout.write(`${outputJson}\n`);
}

main().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
