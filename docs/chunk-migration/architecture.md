# Frontend Architecture

## Current Authoritative Frontend Source

Current runtime authority for the public site is split across:

- Blade views: `resources/views/frontoffice/**`
- shared partials: `resources/views/frontoffice/partials/**`
- public CSS source-like files: `public/assets/css/**`
- public JavaScript source-like files: `public/assets/js/**`
- compiled shared styling/media from a historical Next build: `public/assets/_next/static/css/**` and `public/assets/_next/static/media/**`

The live frontoffice does not currently use `@vite`.

## Target Authoritative Frontend Source

Target authority after migration:

- Blade layouts/pages: `resources/views/frontoffice/**`
- reusable Blade components: `resources/views/components/frontoffice/**`
- source CSS: `resources/css/**`
- source JavaScript: `resources/js/**`
- documented asset build pipeline: Vite

`public/assets/_next` remains read-only legacy runtime evidence until validated migration completion.

## Proposed Blade Structure

```text
resources/views/frontoffice/
resources/views/components/frontoffice/
```

Recommended component areas:

- `components/frontoffice/layout`
- `components/frontoffice/ui`
- `components/frontoffice/forms`
- `components/frontoffice/sections`

## Proposed CSS Structure

```text
resources/css/
├── app.css
├── tokens.css
├── base.css
├── layout.css
├── components.css
├── utilities.css
├── animations.css
└── pages/
```

## Proposed JavaScript Structure

```text
resources/js/
├── app.js
├── core/
│   ├── navigation.js
│   ├── accordion.js
│   ├── dropdown.js
│   ├── reveal.js
│   └── form-select.js
├── pages/
└── tools/
```

## Asset Loading Strategy

Target runtime strategy:

1. load shared CSS/JS through one documented Vite pipeline
2. use `@vite` in the frontoffice layout once the shared source bundle is ready
3. keep page-specific assets isolated with `@push('styles')` and `@push('scripts')` or via Vite code-splitting
4. remove body-level stylesheet links

## Shared Component Strategy

Initial shared components to build:

- layout shell
- header
- footer
- button
- accordion
- basic card
- form field wrappers

Rules:

- routes must keep using Laravel route helpers
- accessibility attributes must remain explicit
- interaction JS must initialize only when matching DOM exists

## Runtime Audit and Validation Tooling

- Browser/runtime audit: `node scripts/chunk-migration/runtime-audit.mjs`
- Local server: `php artisan serve --host=127.0.0.1 --port=8000`
- Unit/feature tests: `php artisan test`

## How To Add A New Page

1. create Blade page under `resources/views/frontoffice/pages`
2. reuse shared components from `resources/views/components/frontoffice`
3. add page-specific styles under `resources/css/pages` only if shared layers are insufficient
4. add a small page module under `resources/js/pages` only if progressive enhancement is needed
5. audit screenshots/network before removing any legacy dependency

## How To Add A New Interactive Component

1. build the accessible Blade markup first
2. add a focused JS initializer under `resources/js/core` or `resources/js/tools`
3. initialize by data attribute, not global element assumptions
4. add reduced-motion handling where animation is involved
5. verify no new `_next` runtime dependency was introduced

## Build Process Target

```bash
npm run build
php artisan test
node scripts/chunk-migration/runtime-audit.mjs
```

This target state is not active yet. The current live layout still hard-links public assets directly.
