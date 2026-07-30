# Design System

## Current Source Of Truth

The current visual system is split across:

- `public/assets/css/base.css`
- `public/assets/css/style.css`
- `public/assets/css/global-new-styles.css`
- `public/assets/_next/static/css/d9109d77acd75b7b.css`
- `public/assets/_next/static/css/081a0afca5a9bd20.css`

The migration goal is to consolidate only the needed tokens and rules into maintainable source CSS, not to copy the generated Tailwind bundle verbatim.

## Initial Token Extraction

### Colors

Observed current palette:

- `--green: #344F1F`
- `--orange: #F4991A`
- `--orange-hover: #E5890F`
- `--cream: #F2EAD3`
- `--warm: #F9F5F0`
- Next CSS HSL tokens include:
  - background `36 43% 96%`
  - foreground `96 44% 22%`
  - primary `32 90% 54%`
  - secondary `96 44% 22%`

### Typography

- primary font: Inter
- delivery today: `_next/static/css/081a0afca5a9bd20.css`
- target: define `--font-sans` in `resources/css/tokens.css`

### Radius

- custom CSS: `0.5rem`, `1rem`, `1.5rem`, `2rem`, `9999px`
- Next CSS: `--radius: 0.75rem`

### Shadows

- small to extra-large shadows defined in `public/assets/css/base.css`
- glassmorphism and elevated panel shadows appear heavily in header/mobile menu markup

### Layout

- shared container max width from Next CSS: `1400px`
- common custom breakpoints: `640px`, `768px`, `1024px`, `1280px`

### Motion

- common transition durations in current code: `200ms`, `300ms`, `450ms`, `600ms`
- shared reveal logic uses opacity and transform transitions
- no `prefers-reduced-motion` support is currently present

## Target Token File

Target location:

- `resources/css/tokens.css`

Suggested initial shape:

```css
:root {
    --color-primary: #f4991a;
    --color-primary-hover: #e5890f;
    --color-secondary: #344f1f;
    --color-background: #f9f5f0;
    --color-surface: #f2ead3;
    --color-text: #344f1f;
    --color-muted: rgba(52, 79, 31, 0.7);
    --color-border: rgba(52, 79, 31, 0.12);

    --font-sans: "Inter", ui-sans-serif, system-ui, -apple-system, sans-serif;

    --radius-sm: 0.5rem;
    --radius-md: 0.75rem;
    --radius-lg: 1rem;
    --radius-xl: 1.5rem;
    --radius-pill: 9999px;

    --shadow-sm: ...;
    --shadow-md: ...;
    --shadow-lg: ...;

    --container-max: 1400px;

    --duration-fast: 200ms;
    --duration-normal: 300ms;
    --duration-slow: 600ms;
}
```

## Migration Rules

- extract only rules that are actually used by migrated Blade pages
- avoid copying all utility classes from generated Next CSS
- keep page patches temporary and move stable patterns into shared component styles
- use page-level CSS only when the pattern is not reusable

## Accessibility Requirement

Every migrated animation layer must add a reduced-motion fallback. Suggested baseline:

```css
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}
```

This must be applied carefully so visibility state remains correct.
