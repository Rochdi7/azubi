# Homepage GSAP Animation Audit

## Homepage Blade File

- Route: `/`
- Controller method: `App\Http\Controllers\Frontoffice\HomeController::index()`
- Blade view: `resources/views/frontoffice/pages/index.blade.php`
- Layout: `resources/views/frontoffice/layouts/app.blade.php`

## Included Partials

The homepage itself does not include page-specific partials or Blade components. It inherits shared layout structure from:

- `resources/views/frontoffice/layouts/app.blade.php`
- `resources/views/frontoffice/partials/header.blade.php`
- `resources/views/frontoffice/partials/footer.blade.php`

## Existing Scripts

### Shared scripts loaded on the homepage

- `public/assets/js/frontoffice/navigation.js`
- `public/assets/js/frontoffice/accordion-fixes.js`
- `public/assets/js/frontoffice/visibility-fixes.js`
- `public/assets/js/frontoffice/form-dropdowns.js`

### Homepage-specific scripts

- None currently loaded at runtime.

## Existing CSS Used By The Homepage

### Shared CSS loaded by layout

- `public/assets/_next/static/css/081a0afca5a9bd20.css`
- `public/assets/_next/static/css/d9109d77acd75b7b.css`
- `public/assets/_next/static/css/e2c84361ea1dce8b.css`

### Homepage-specific additional CSS currently linked from the page

- `public/assets/css/global-new-styles.css`

Important note:

- `global-new-styles.css` is linked twice inside `resources/views/frontoffice/pages/index.blade.php`
- both links are currently preserved for safety because this task must not remove existing CSS dependencies

## Current Runtime Findings

From `docs/chunk-migration/runtime-audit.json` and baseline screenshots:

- No `/_next/static/chunks/*.js` requests occur on the live homepage.
- No React hydration or active Next runtime was detected.
- The homepage is Blade-rendered and enhanced with shared local JavaScript only.
- Baseline screenshots already exist at:
  - `docs/chunk-migration/screenshots/home-desktop.png`
  - `docs/chunk-migration/screenshots/home-mobile.png`

## Current Console / Network Issues

- `404` for `http://127.0.0.1:8000/images/avatar/1.jpg`
- multiple external Airtable image URLs currently return `404`
- no homepage console errors related to chunk loading, React hydration, or application boot

## Homepage Section Map

Live section sequence identified from `index.blade.php`:

1. Hero: `Start Your Ausbildung in Germany`
2. `What is Ausbildung?`
3. `What Best Describes You?`
4. `Apply to These Jobs Instantly`
5. `Apply 10x Faster in Three Steps`
6. `Apply 10x Faster with Smart Tools`
7. `Complete Ausbildung Guide`
8. `Find Your Perfect Sector Match`
9. `1000+ Success Stories`
10. `Frequently Asked Questions`
11. Final CTA: `Ready to Apply 10x Faster?`

## Existing Animation Behavior

### CSS keyframe entrance classes already present in homepage markup

The homepage uses existing classes from the shared Next CSS bundle, including:

- `animate-fade-in-up`
- `animate-fade-in-left`
- `animate-fade-in-right`
- `animate-scale-in`
- `animation-delay-*`

These are used heavily in:

- hero badge, heading, copy, CTAs, and social proof stats
- split cards in `What is Ausbildung?`
- persona cards in `What Best Describes You?`
- section headers and various card blocks

### Existing hover motion already present

Several cards already use CSS hover transforms such as:

- `hover:scale-105`
- `hover:-translate-y-2`
- hover border/shadow changes

These must be preserved.

### Existing marquee / looping movement

The success-stories section already has inline marquee animation on `.stories-marquee-track` plus related CSS in:

- `public/assets/css/global-new-styles.css`
- `public/assets/css/style.css`
- `public/assets/css/home.css`

This existing motion should be enhanced carefully, not duplicated.

### Existing shared reveal fallback

`public/assets/js/frontoffice/visibility-fixes.js` reveals elements only when they already have inline `opacity: 0` / transform placeholder styles. The homepage’s current keyframe-based entrance classes are separate from that system.

## Elements Already Animated

- hero text stack and stat cards
- section intro blocks using `animate-fade-in-up`
- some split cards using `animate-fade-in-left` and `animate-fade-in-right`
- persona cards with hover translate / scale
- success-story marquees with continuous horizontal movement
- FAQ accordions through shared Blade accordion behavior

## Mobile-Specific Markup / Behavior

- shared mobile navigation from `frontoffice/partials/header.blade.php`
- responsive stacks and breakpoint-specific spacing throughout the homepage
- mobile hero spacing uses separate top padding and min-height values
- many CTA rows collapse from horizontal to vertical on small screens
- current mobile experience already depends on clean vertical read flow and must not be blocked by pinning or heavy scrub effects

## Selected Sections For GSAP Animation

These will receive intentional GSAP hooks and motion:

- hero
- `What is Ausbildung?`
- `What Best Describes You?`
- `Apply to These Jobs Instantly`
- `Apply 10x Faster in Three Steps`
- `Apply 10x Faster with Smart Tools`
- `Complete Ausbildung Guide`
- `Find Your Perfect Sector Match`
- success-stories header and marquee container entry
- FAQ section header and FAQ card entrances
- final CTA block

## Sections Intentionally Left Mostly Static

These should remain mostly static or receive only very light entry motion:

- header and footer
- dense text content inside expanded FAQ answers
- existing marquee loop mechanics themselves
- any form controls or links where extra motion could hurt usability

## Risks

- Existing CSS entrance classes may conflict with new GSAP entrances if both own the same elements.
- The homepage is a very large single Blade file, so hook placement must stay minimal and semantic.
- `global-new-styles.css` is duplicated in the page; animation work must not rely on removing that duplication.
- Broken home images already create baseline `404` noise, so post-change testing must distinguish new regressions from existing ones.
- The homepage currently does not use Vite; introducing GSAP must stay homepage-scoped and must not accidentally enable a second uncontrolled runtime across all frontoffice pages.
- Several cards already use CSS hover transforms, so pointer tilt must avoid overriding those elements directly.

## Mobile Considerations

- no pinning
- minimal scrub depth
- no pointer tilt
- reduced rotation / `z` values
- preserve current read order and section pacing
- no delay before content becomes readable
- no animation that introduces horizontal overflow

## Chosen Integration Direction

- install and use `gsap` only
- create homepage-only entry: `resources/js/pages/home-animations.js`
- import animation CSS from that entry
- load it only on the homepage through Vite
- add semantic `data-gsap-*` hooks directly to existing homepage markup
- preserve all current content, layout, color, and interaction structure
