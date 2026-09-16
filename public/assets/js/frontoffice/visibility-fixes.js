/*!
 * Azubi — Visibility Fixes
 *
 * Copyright (c) 2026 Azubi. All rights reserved.
 * Proprietary and confidential. Unauthorised copying, modification or
 * distribution of this file, via any medium, is strictly prohibited.
 */

// Reveal exported animation placeholders (global)
(function() {
  function runWhenReady(fn) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', fn);
      return;
    }
    fn();
  }

  function isCollapsibleOrIntentionallyHidden(el, styleText) {
    if (el.hasAttribute('hidden')) return true;
    if (el.getAttribute('aria-hidden') === 'true') return true;
    if (el.getAttribute('role') === 'region') return true;
    if (el.getAttribute('data-state') === 'closed') return true;

    if (styleText.indexOf('display: none') !== -1) return true;
    if (styleText.indexOf('visibility: hidden') !== -1) return true;
    if (styleText.indexOf('height: 0') !== -1) return true;
    if (styleText.indexOf('max-height: 0') !== -1) return true;

    // Keep known nav/accordion panels controlled by dedicated JS.
    if (el.closest('header')) return true;
    if (el.closest('[data-orientation="vertical"]')) return true;

    return false;
  }

  function parseStyleText(el) {
    return (el.getAttribute('style') || '').toLowerCase();
  }

  function hasInitialHiddenOpacity(styleText) {
    return /(^|[;\s])opacity:\s*0(?:[;\s]|$)/.test(styleText);
  }

  function hasInlineTransform(styleText) {
    return styleText.indexOf('transform') !== -1;
  }

  function revealWithTransition(el, hasTransform) {
    if (el.dataset.foRevealDone === '1') return;
    el.dataset.foRevealDone = '1';

    el.style.transition = hasTransform
      ? 'opacity 600ms ease, transform 600ms ease'
      : 'opacity 450ms ease';

    requestAnimationFrame(function() {
      el.style.opacity = '1';
      if (hasTransform) {
        el.style.transform = 'none';
      }
    });
  }

  runWhenReady(function() {
    var nodes = document.querySelectorAll('main [style*="opacity"]');
    var revealTargets = [];

    nodes.forEach(function(el) {
      var styleAttr = parseStyleText(el);
      if (!styleAttr) return;
      if (!hasInitialHiddenOpacity(styleAttr)) return;
      if (isCollapsibleOrIntentionallyHidden(el, styleAttr)) return;

      revealTargets.push({
        el: el,
        hasTransform: hasInlineTransform(styleAttr),
      });
    });

    if (!revealTargets.length) return;

    if (typeof IntersectionObserver !== 'function') {
      revealTargets.forEach(function(target) {
        revealWithTransition(target.el, target.hasTransform);
      });
      return;
    }

    var observer = new IntersectionObserver(
      function(entries) {
        entries.forEach(function(entry) {
          if (!entry.isIntersecting) return;

          var el = entry.target;
          observer.unobserve(el);
          revealWithTransition(el, el.dataset.foHasTransform === '1');
        });
      },
      {
        threshold: 0.12,
        rootMargin: '0px 0px -8% 0px',
      }
    );

    revealTargets.forEach(function(target, index) {
      target.el.dataset.foHasTransform = target.hasTransform ? '1' : '0';
      target.el.style.transitionDelay = (index % 6) * 30 + 'ms';
      observer.observe(target.el);
    });
  });
})();
