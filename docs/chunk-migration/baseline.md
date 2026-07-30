# Next Chunk Migration Baseline

## Environment

- Date: 2026-07-14
- Branch: `refactor/migrate-next-chunks-to-laravel`
- Project root: `C:\Users\ASUS\Desktop\Projects\azubi`
- Base URL: `http://127.0.0.1:8000`
- PHP: `8.3.31`
- Node: `v24.11.0`
- Browser used for runtime audit: `Chrome/150.0.7871.115`
- Audit helper: `scripts/chunk-migration/runtime-audit.mjs`
- Raw runtime data: `docs/chunk-migration/runtime-audit.json`

## Startup Commands

```bash
php artisan route:list
php artisan serve --host=127.0.0.1 --port=8000
node scripts/chunk-migration/runtime-audit.mjs
php artisan test
```

## Repository State Before Frontend Changes

The worktree was already dirty before migration work began. These changes were preserved and not reverted:

- deleted backoffice controllers, views, and `routes/backoffice.php`
- modified `app/Http/Middleware/TrustProxies.php`
- modified `resources/views/frontoffice/partials/header.blade.php`
- modified `routes/web.php`
- untracked `docs/` from prior analysis work

## Routes Tested

### Public routes returning `200`

- `/`
- `/consultation`
- `/contact`
- `/jobs`
- `/about`
- `/partner-with-us`
- `/faq`
- `/sectors`
- `/sectors/healthcare`
- `/tools`
- `/tools/document-checklist`
- `/tools/living-cost-calculator`
- `/tools/roi-calculator`
- `/tools/career-pathway-decision`
- `/tools/pre-departure-checklist`

### Legacy/Next-era routes checked for current availability

- `/login` -> `404`
- `/dashboard` -> `404`
- `/de` -> `404`
- `/blog` -> `404`
- `/arbeitgeber` -> `404`

## Screenshots Captured

- 40 screenshots were captured under `docs/chunk-migration/screenshots/`
- Each audited route has:
  - one desktop screenshot at `1440px`
  - one mobile screenshot at `375px`
- Examples:
  - `docs/chunk-migration/screenshots/home-desktop.png`
  - `docs/chunk-migration/screenshots/home-mobile.png`
  - `docs/chunk-migration/screenshots/consultation-desktop.png`
  - `docs/chunk-migration/screenshots/tool-roi-calculator-mobile.png`

## Current Runtime Behavior

- Every audited live public route loaded the same three Next CSS bundles:
  - `assets/_next/static/css/081a0afca5a9bd20.css`
  - `assets/_next/static/css/d9109d77acd75b7b.css`
  - `assets/_next/static/css/e2c84361ea1dce8b.css`
- Every audited live public route loaded the shared Blade scripts:
  - `assets/js/frontoffice/navigation.js`
  - `assets/js/frontoffice/accordion-fixes.js`
  - `assets/js/frontoffice/visibility-fixes.js`
  - `assets/js/frontoffice/form-dropdowns.js`
- Page-specific Blade scripts were loaded where expected:
  - `consultation.js`
  - `contact-faq.js`
  - `script.js`
  - `faq-interactive.js`
  - `document-checklist.js`
  - `living-cost-calculator.js`
  - `roi-calculator.js`
  - `career-pathway-decision.js`
- No audited live route requested any `/_next/static/chunks/*.js` file.
- No audited live route exposed a detected Next runtime or React hydration signal.
- No `/api/*` requests were triggered during the audited public page loads and lightweight interactions.

## Known Working Features

- mobile navigation opens on audited public pages with the shared header
- shared accordions respond on home, FAQ, contact, and tool pages
- contact page form fields accept focus/input
- tool pages render client-side calculators/checklists/wizards from Blade-delivered markup plus page-specific JS
- shared reveal logic loads without blocking content visibility

## Current Errors and Broken Requests

### Home page

- `404` for `http://127.0.0.1:8000/images/avatar/1.jpg`
- multiple `404` responses from external Airtable-hosted image URLs embedded in the page
- console noise is limited to failed resource loads; no React or chunk boot errors were observed

### Consultation page

- `404` requests to a malformed `_data_image/...svg....html` path
- this looks like exported image markup residue rather than an active Next runtime dependency

### Partner page

- `404` requests to `/_next/image?...` URLs
- this indicates the page still uses Next image-optimizer style URLs even though the live app is Laravel Blade

### Legacy route checks

- `/login`, `/dashboard`, `/de`, `/blog`, and `/arbeitgeber` currently return `404`
- these routes exist in the compiled `_next` asset set as historical evidence, but they are not active Laravel routes in the current runtime

## Current Network Dependencies

- active shared CSS dependency: `_next/static/css/*`
- active shared font dependency: `_next/static/media/e4af272ccee01ff0-s.p.woff2`
- active static image dependency: `_next/*` marketing images and logos
- active local JS dependency: `public/assets/js/frontoffice/*` plus page-specific `public/assets/js/*`
- active external media dependency on the home page: Airtable CDN image URLs

## Baseline Test Result

```text
php artisan test
PASS  Tests\Unit\ExampleTest
PASS  Tests\Feature\ExampleTest
Tests: 2 passed (2 assertions)
```

## Baseline Conclusion

The current public frontend is already Laravel Blade plus static JS at runtime. The compiled Next JavaScript chunk runtime is present on disk but was not requested by any audited public route. The real migration baseline is therefore:

1. replace the shared dependency on Next-generated CSS and media with maintainable Laravel-managed source assets
2. fix the small number of broken image/runtime URL assumptions already visible in Blade
3. treat auth, dashboard, employer, German, and blog flows as separate legacy-reconstruction tracks rather than assuming they are active in the current Laravel app
