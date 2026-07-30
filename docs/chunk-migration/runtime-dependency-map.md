# Runtime Dependency Map

## Verified Findings

- Runtime audit source: `docs/chunk-migration/runtime-audit.json`
- Screenshots: `docs/chunk-migration/screenshots/`
- Audited live public routes are Blade-delivered and progressively enhanced with local JavaScript.
- No audited live route requested `/_next/static/chunks/*.js`.
- No audited live route showed detectable Next runtime globals or React hydration.
- All audited live routes still depend on the three shared Next CSS bundles and one shared Next font subset.

## Route Matrix

| Route | Active Chunks | Active CSS | APIs | Interactions | Migration Priority |
|---|---|---|---|---|---|
| `/` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css`, `global-new-styles.css` | None observed | Mobile nav, shared accordion, reveal effects | High |
| `/consultation` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css`, `global-new-styles.css` | None observed | Mobile nav, FAQ accordion, consultation page JS | High |
| `/contact` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | Mobile nav, FAQ accordion, form input | High |
| `/jobs` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | Mobile nav, shared accordion present | Medium |
| `/about` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | Mobile nav | Low |
| `/partner-with-us` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | FAQ accordion, form input; broken `_next/image` URLs | High |
| `/faq` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | FAQ accordion via `faq-interactive.js` | High |
| `/sectors` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | Shared navigation and reveal only | Low |
| `/sectors/healthcare` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | Static Blade page | Low |
| `/tools` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | Static listing page | Low |
| `/tools/document-checklist` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css`, `global-new-styles.css` | None observed | Tool JS plus shared accordion | Medium |
| `/tools/living-cost-calculator` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css`, `global-new-styles.css` | None observed | Tool JS plus shared accordion | Medium |
| `/tools/roi-calculator` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css`, `global-new-styles.css` | None observed | Tool JS, accordion, range input | Medium |
| `/tools/career-pathway-decision` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css`, `global-new-styles.css` | None observed | Tool wizard loads from Blade + page JS | Medium |
| `/tools/pre-departure-checklist` | None requested at runtime | `081a0af...css`, `d9109d7...css`, `e2c8436...css` | None observed | Accordion/select UI only | Medium |
| `/login` | Route absent in current Laravel runtime | None | None observed | `404` only | Blocked pending source-of-truth |
| `/dashboard` | Route absent in current Laravel runtime | None | None observed | `404` only | Blocked pending source-of-truth |
| `/de` | Route absent in current Laravel runtime | None | None observed | `404` only | Blocked pending source-of-truth |
| `/blog` | Route absent in current Laravel runtime | None | None observed | `404` only | Blocked pending source-of-truth |
| `/arbeitgeber` | Route absent in current Laravel runtime | None | None observed | `404` only | Blocked pending source-of-truth |

## Common Runtime Pattern

All live public routes currently follow this stack:

1. Laravel Blade response
2. shared Next-generated CSS bundles
3. shared Blade JS modules
4. page-specific Blade JS where needed
5. static `_next` images and fonts

What did not happen during the audit:

- no `/_next/static/chunks/*.js`
- no React hydration
- no live client-side routing
- no browser-observed Next app bootstrap

## Broken Runtime Dependencies

### Home

- missing local image: `/images/avatar/1.jpg`
- multiple external Airtable image URLs currently return `404`

### Consultation

- malformed `_data_image/...html` requests return `404`

### Partner page

- `/_next/image?...` optimizer URLs return `404`
- this is a Laravel runtime bug source, not a chunk dependency

## Implications for Migration

The previous static report correctly identified that `_next/static/chunks` was not directly mounted from Blade templates. Runtime verification strengthens that finding:

- for the active public Laravel routes, compiled Next JavaScript is not part of the current runtime
- the immediate migration target is shared CSS/media debt and Blade structure debt, not React-to-Blade conversion for these public pages
- React/Next reconstruction work is still required for legacy surfaces evidenced in the compiled chunk tree, but those surfaces are not active in the current Laravel route set
