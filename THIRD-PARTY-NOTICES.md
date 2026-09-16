# Third-Party Notices

This project includes third-party software and fonts that remain the property of
their respective owners. They are **not** covered by the proprietary licence in
[LICENSE](LICENSE), which applies only to Azubi's own code, design and content.

---

## Fonts

| Font | Where | Licence | Notes |
|---|---|---|---|
| **GT Super Display** | `public/assets/fonts/65394e97*_GT-Super-Display-*.woff2` | Commercial — Grilli Type | ⚠️ Requires a paid licence. Verify your web licence covers this domain and its traffic volume. |
| **DM Sans** | `public/assets/fonts/6876*_DMSans-*.woff2` | SIL Open Font License 1.1 | Free for commercial use. Colophon Foundry / Google Fonts. |
| **Inter** | `public/assets/fonts/inter/*.woff2` | SIL Open Font License 1.1 | Free for commercial use. Rasmus Andersson. |

> **Action item:** GT Super Display is the only font here that is not free.
> Confirm you hold a valid Grilli Type webfont licence before going to
> production, and that it covers your expected monthly pageviews.

## CSS

| Component | Where | Licence |
|---|---|---|
| **Tailwind CSS v3.3.0** | `public/assets/css/tailwind.css` | MIT — Tailwind Labs Inc. |

The MIT notice is preserved at the top of `tailwind.css` and must remain there.
The utility class names it generates (`flex`, `px-4`, `items-center`, …) are part
of that framework and are not claimed by Azubi.

Azubi's own styles are namespaced with the `azubi-` prefix
(`public/assets/css/brand-*.css`, `global-new-styles.css`, `legal-prose.css`) and
are covered by [LICENSE](LICENSE).

## Backend

| Package | Licence |
|---|---|
| Laravel Framework ^10.10 | MIT |
| Laravel Sanctum ^3.3 | MIT |
| Laravel Tinker ^2.8 | MIT |
| Guzzle HTTP ^7.2 | MIT |

## Build tooling

| Package | Licence |
|---|---|
| Vite ^4.0 | MIT |
| Tailwind CSS ^4.2.1 (`node_modules`) | MIT |
| PostCSS ^8.5.8 | MIT |
| Axios ^1.6.1 | MIT |
| laravel-vite-plugin ^0.8.0 | MIT |

## External services

| Service | Used on | Notes |
|---|---|---|
| Google Favicon API (`google.com/s2/favicons`) | `jobs` page | Fetches employer logos at runtime. Subject to Google's terms; no licence granted to the logos themselves. |
| `images.azubi.ma` | OG / social meta tags | Azubi-operated CDN. |

## Imagery

Photographs and illustrations under `public/assets/images/` are covered by
[LICENSE](LICENSE) **only where Azubi owns or has licensed them**. Any stock or
third-party imagery remains subject to the licence it was obtained under —
verify rights for each asset before redistribution.

Employer names, logos and trade marks appearing on the site (for example on the
`jobs` page) are the property of their respective owners and are used for
identification purposes only.
