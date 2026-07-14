# Homepage GSAP Animation Report

## Scope

- Route: `/`
- Date: `2026-07-14`
- Goal: add premium GSAP + ScrollTrigger motion to the homepage without changing backend behavior, content, routes, or introducing any `_next` JavaScript dependency

## Implementation Summary

- Added a homepage-only Vite entry at `resources/js/pages/home-animations.js`
- Added scoped animation CSS at `resources/css/animations.css`
- Loaded the new entry only from `resources/views/frontoffice/pages/index.blade.php`
- Added semantic `data-gsap-*` hooks only where needed for:
  - hero parallax
  - section reveal timing
  - desktop-only subtle 3D pointer depth scenes
  - story marquee entrance timing
  - final CTA sequencing
- Kept all existing `_next` CSS, image, and legacy shared Blade scripts in place
- Did not remove or rename any file under `public/assets/_next`

## Files Changed

- `package.json`
  - added `gsap`
- `package-lock.json`
  - lockfile update for `gsap`
- `vite.config.js`
  - added the homepage animation entry to the existing Vite pipeline
- `resources/js/pages/home-animations.js`
  - homepage-only GSAP/ScrollTrigger orchestration
- `resources/css/animations.css`
  - scoped motion/performance/reduced-motion styles
- `resources/views/frontoffice/pages/index.blade.php`
  - loaded the homepage entry and added `data-gsap-*` hooks
- `docs/homepage-gsap-animation-audit.md`
  - pre-implementation audit
- `docs/homepage-gsap-animation-report.md`
  - post-implementation validation

## Runtime Validation

### Browser audit

- Source: `node scripts/chunk-migration/runtime-audit.mjs`
- Base URL: `http://127.0.0.1:8000`
- Browser: `Chrome/150.0.7871.115`

### Result for `/`

- HTTP status: `200`
- Next runtime detected: `false`
- React hydration detected: `false`
- `_next/static/chunks` requests: none
- New homepage animation assets requested:
  - `http://127.0.0.1:8000/build/assets/home-animations-701947ec.css`
  - `http://127.0.0.1:8000/build/assets/home-animations-b564ed73.js`
- Existing shared Blade scripts still active:
  - `assets/js/frontoffice/navigation.js`
  - `assets/js/frontoffice/accordion-fixes.js`
  - `assets/js/frontoffice/visibility-fixes.js`
  - `assets/js/frontoffice/form-dropdowns.js`
- Existing `_next` CSS still active:
  - `assets/_next/static/css/081a0afca5a9bd20.css`
  - `assets/_next/static/css/d9109d77acd75b7b.css`
  - `assets/_next/static/css/e2c84361ea1dce8b.css`

### Interaction checks observed in runtime audit

- mobile menu toggle: passed
- FAQ accordion open: passed
- form-focus probe: not applicable on homepage
- range-input probe: not applicable on homepage

### Reduced motion check

- Headless Chrome was run with `--force-prefers-reduced-motion`
- DOM output contained `data-home-gsap="reduced"`
- Result: the homepage animation module correctly short-circuits into reduced-motion mode

## Screenshots

### Existing runtime audit captures

- Desktop `1440px`: `docs/chunk-migration/screenshots/home-desktop.png`
- Mobile `375px`: `docs/chunk-migration/screenshots/home-mobile.png`

### Additional captures for this milestone

- Tablet `768px`: `docs/chunk-migration/screenshots/home-gsap-768.png`
- Small desktop `1024px`: `docs/chunk-migration/screenshots/home-gsap-1024.png`

## Console And Network Findings

### No new JS runtime regression detected

- No `_next` JavaScript runtime was requested
- No React or hydration errors were detected
- The page stayed server-rendered and Blade-driven

### Existing known errors still present

- local `404`: `/images/avatar/1.jpg`
- multiple external Airtable-hosted image `404` responses in the success-stories marquee

These errors predate the GSAP work and were already part of the baseline noise.

## Visual / Behavior Notes

- Motion differences are intentional and limited to:
  - hero background/content parallax
  - section reveal timing
  - desktop-only subtle pointer depth on selected cards/media/CTA
  - final CTA entrance and scroll drift
- No static color, spacing, typography, route, or content changes were introduced
- No `_next` asset was removed

## Tests

- `npm run build`
  - passed
- `php artisan test`
  - passed after the Vite build completed

Note:

- an earlier parallel test run hit a temporary `Vite manifest` lookup failure because the test executed before the new build finished
- rerunning the Laravel test suite after the build succeeded resolved that issue cleanly

## Remaining Legacy Dependencies On The Homepage

- `_next` CSS files loaded by the shared layout
- `_next` image assets used in homepage content
- `_next` font/media asset referenced by the existing CSS bundle

## Safe-Removal Status

- `_next/static/chunks/*.js` on `/`: not requested at runtime
- `_next/static/chunks/*.js` on `/`: still not declared safe to remove globally
- Reason: this report validates only the homepage motion layer and does not prove global orphan status for the full legacy asset tree
