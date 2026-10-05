# Workshop production verification

The live route `https://tujutaju.ee/workshop/` returned HTTP 200. Exact production `_elementor_data` readback is valid JSON, with 1 Elementor element and 1 unique ID; SHA-256 is `5c0560038299e4fee3763e2ca4937213c1eb078858ce6505427ee1b7c6087868`.

The rendered public HTML confirms the expected H1, description/canonical metadata, JSON-LD schema, both production image URLs, no local footer, and no `/test/` or `/tujutaju-preview/` references. Header 2835 and Footer 2836 each occur once. The shared header navigation markup retains its `display:none!important` rule. The PCM, Trainings, Calendly, and both image destinations returned HTTP 200. No form or booking was submitted. No custom page JavaScript was added.

| Viewport | Responsive CSS/readback result | Rendered screenshot / overflow check |
|---|---|---|
| 1440×1000 | Desktop two-column Hero and editorial layouts; 1160px maximum content field. | Unavailable: Playwright/Chromium is not installed in this runtime. |
| 1180×820 | Desktop-like tablet landscape compositions remain in two columns. | Unavailable: Playwright/Chromium is not installed in this runtime. |
| 820×1180 | Portrait-tablet rule sets the outer content width to `calc(100vw - 80px)` (40px each side); sections reflow as specified. | Unavailable: Playwright/Chromium is not installed in this runtime. |
| 844×390 | Dedicated compact landscape rule retains horizontal compositions where they fit. | Unavailable: Playwright/Chromium is not installed in this runtime. |
| 390×844 | Phone portrait stacks sections; content and grids use constrained/minmax widths. | Unavailable: Playwright/Chromium is not installed in this runtime. |

Consequently, the five states have CSS and public-HTML readback only; visual fit, measured overflow, and browser-console JavaScript errors remain unverified and are left for Maia’s visual review.
