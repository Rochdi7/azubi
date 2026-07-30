# Migration Scope

## Scope Decision

Runtime evidence changes the migration shape significantly:

- Current public Laravel routes are already Blade-first and JavaScript-light at runtime.
- The active dependency problem is mostly shared Next CSS and `_next` media, not mounted Next JS chunks.
- Compiled Next chunks still matter as evidence for legacy or missing surfaces, but not as a current public runtime dependency on audited public pages.

## Group A — Already Implemented With Blade and Vanilla JavaScript

These routes are already rendered by Laravel Blade and enhanced by local scripts without any observed `_next/static/chunks` runtime dependency:

- `/`
- `/consultation`
- `/contact`
- `/faq`
- `/jobs`
- `/about`
- `/partner-with-us`
- `/sectors`
- `/sectors/{slug}`
- `/tools`
- `/tools/document-checklist`
- `/tools/living-cost-calculator`
- `/tools/roi-calculator`
- `/tools/career-pathway-decision`
- `/tools/pre-departure-checklist`

Shared runtime modules currently doing real work:

- `public/assets/js/frontoffice/navigation.js`
- `public/assets/js/frontoffice/accordion-fixes.js`
- `public/assets/js/frontoffice/visibility-fixes.js`
- `public/assets/js/frontoffice/form-dropdowns.js`
- page-specific `public/assets/js/*.js` files for contact, consultation, FAQ, and tools

Action:

- do not rewrite these pages blindly
- preserve working behavior and progressively move their source into `resources/js` and `resources/css`
- componentize shared layout/UI first

## Group B — Uses Next CSS But Not Next JavaScript

This group includes every audited live public page.

Current runtime dependency pattern:

- shared CSS:
  - `assets/_next/static/css/081a0afca5a9bd20.css`
  - `assets/_next/static/css/d9109d77acd75b7b.css`
  - `assets/_next/static/css/e2c84361ea1dce8b.css`
- shared font:
  - `assets/_next/static/media/e4af272ccee01ff0-s.p.woff2`
- additional local CSS where present:
  - `assets/css/global-new-styles.css`

Action:

1. extract the real design tokens into `resources/css/tokens.css`
2. move shared layout/component styling into source CSS under `resources/css`
3. replace page-by-page reliance on the generated Next CSS bundles
4. keep the old CSS links active until each migrated page matches visually

## Group C — Actively Depends On React or Next Chunks

No currently audited live public Laravel route fell into this group.

However, the compiled bundle tree still contains substantial legacy surfaces that likely belonged to a standalone Next application:

- auth flows
- student dashboard
- employer dashboard
- interview/voice tooling
- German localized routes
- blog/content routes

Current runtime status of representative paths:

- `/login` -> `404`
- `/dashboard` -> `404`
- `/de` -> `404`
- `/blog` -> `404`
- `/arbeitgeber` -> `404`

Action:

- treat these as a separate reconstruction track
- do not classify their chunks as removable yet
- use the compiled chunk tree only as behavioral evidence until the intended Laravel route/controller plan is defined

## Group D — Old, Duplicate, or Suspected Orphaned Assets

Carried over from the static asset report and still not safe to delete:

- `public/assets/_next/static/chunks/*.js` bundle set
- duplicate CSS copies under `public/assets/css/`
- triplicated font subsets under `fonts/`, `media/`, and `_next/static/media/`
- duplicated images across `_next/` and `images/`
- 20 `_next/image*.html` error artifacts
- 631 assets with no direct repo reference in the static scan

Action:

- document only
- do not delete
- revisit after route-by-route runtime validation

## First Milestone Scope

Recommended first implementation milestone:

1. shared frontoffice layout
2. header and desktop/mobile navigation
3. footer
4. reusable button primitive
5. reusable accordion primitive
6. reusable reveal utility
7. one low-risk public page: `/about`

Why `/about`:

- current route is live and returns `200`
- no page-specific JS dependency was observed
- it is low-risk compared with forms and calculators
- it still exercises the shared header/footer/runtime styling stack

## Explicit Non-Goals For Milestone 1

- do not remove `_next/static/css/*` yet
- do not migrate auth or dashboard flows
- do not change public routes or slugs
- do not remove partner/consultation/tool scripts yet
- do not archive `_next/static/chunks` yet
