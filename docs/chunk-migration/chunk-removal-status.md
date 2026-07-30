# Chunk Removal Status

## Current Position

Runtime evidence from `docs/chunk-migration/runtime-audit.json` shows no active public Laravel route requesting `/_next/static/chunks/*.js`. That is not enough to remove them yet because multiple legacy surfaces represented in the compiled chunk tree are not currently mapped by the Laravel router.

## JavaScript Chunk Families

| Chunk or Family | Routes Using It Before | Migrated Routes | Remaining Routes | Safe to Remove |
|---|---|---|---|---|
| `main-app-be9f4b9e89c49c47.js` | None in current audited Laravel runtime | None | Unknown legacy Next surfaces | No |
| `webpack-d57c101cdf9c23fe.js` | None in current audited Laravel runtime | None | Unknown legacy Next surfaces | No |
| `framework-fb89c271e3453c53.js` | None in current audited Laravel runtime | None | Unknown legacy Next surfaces | No |
| `polyfills-42372ed130431b0a.js` | None in current audited Laravel runtime | None | Unknown legacy Next surfaces | No |
| `vendor-ef0373f8482ee07a.js` | None in current audited Laravel runtime | None | Unknown legacy Next surfaces | No |
| `common-6f13d6a0b944209a.js` | None in current audited Laravel runtime | None | Unknown legacy Next surfaces | No |
| `ui-611c4b27eabc1ace.js` | None in current audited Laravel runtime | None | Unknown legacy Next surfaces | No |
| `app/**/page-*.js` route chunks | None in current audited Laravel runtime | None | Auth, dashboard, employer, German, blog, other historical surfaces | No |

## Active Non-Chunk Next Assets

These are still required by current public routes and therefore explicitly not removable:

| Asset Family | Current Live Usage | Safe to Remove |
|---|---|---|
| `_next/static/css/081a0afca5a9bd20.css` | Loaded by all audited live public pages | No |
| `_next/static/css/d9109d77acd75b7b.css` | Loaded by all audited live public pages | No |
| `_next/static/css/e2c84361ea1dce8b.css` | Loaded by all audited live public pages | No |
| `_next/static/media/e4af272ccee01ff0-s.p.woff2` | Loaded by all audited live public pages | No |
| `_next/*` logos and marketing images | Loaded by current Blade pages | No |

## Removal Gate

No chunk or chunk family is currently approved for removal. Required evidence before any archive step:

1. repository reference check
2. runtime request check
3. browser regression pass
4. legacy route ownership decision
5. final approval
