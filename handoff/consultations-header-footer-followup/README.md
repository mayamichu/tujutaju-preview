# Consultations shared header/footer restoration

Completed 2026-10-04. Production page 2044: https://tujutaju.ee/consultations/.

Consultations `_elementor_data` was never written and remains SHA-256 `83738459f4410fd4cc49b9aafa31ebe143a5f027945b84894e311c65664f118a`.

## Diagnosis and smallest fixes

1. Consultations had `_wp_page_template=default`, inheriting Elementor Canvas from the kit. HFE's existing Canvas renderer explicitly requires `get_page_template_slug() === elementor_canvas`. Trainings 765 already uses explicit Canvas. Home 764 inherits Canvas but is covered by the existing Home/Privacy mu-plugin; Consultations is outside that deliberately limited rule. Set only Consultations `_wp_page_template` to `elementor_canvas`. No plugin or mu-plugin changes.
2. Published Header 2835 and Footer 2836 both already target the entire site, all users, no exclusions, and have `display-on-canvas-template=1`. Their embedded approved production component CSS, however, excluded legacy page 2044. This caused portrait-tablet/phone footer differences after rendering was restored. In those two templates only, replace `:not(.elementor-page-2044)` with a duplicate of the existing `:not(.elementor-page-3)` exclusion: 19 header occurrences and 24 footer occurrences. Repeating an existing exclusion retains the exact selector specificity and matches precisely the same pages as before, plus Consultations. All styling declarations, template structure/content/IDs and display conditions remain unchanged. No redesign or new styling was introduced.

Header data SHA: `e0cc0555e7b317a60b3e1bd303aede443dac9e1f5cd16070dd19bb8594445f8c`.
Footer data SHA: `b0dcc8fdd6d2d6de42998a257c91cb759233990e0fae14d0e217295475f48e70`.

## Verification

Ordinary production URL checked at 1440×1000, 1180×820, 820×1180, 844×390 and 390×844. Exactly one header/footer renders. Visible shared geometry and computed styling match Trainings in every state; all 205 page-content rectangles/fonts/padding and text match the closed production state after accounting for header height. Navigation stays hidden. The sole detailed DOM comparison difference is the already-hidden phone navigation bottom wrapper: Consultations has display:none via its preserved approved navigation CSS, while Trainings has display:flex inside a hidden ancestor; both have zero dimensions and are invisible. This was deliberately left unchanged.

No horizontal overflow, page JavaScript errors or broken images. `browser/final-*` is final verification; `restored-*` is the intermediate template-only fix. `shared-detailed-comparison.json` and `final-verification.json` contain evidence.

Other post rows match the initial fingerprint. Other non-cache post metadata matches exactly when the two intentional shared-template data changes are normalized to their originals. Global kit, navigation records, fonts, variables, display conditions, plugins, mu-plugins and unrelated pages were not modified. Services was not started.

## Recovery

`before.json` contains original complete shared-template post/meta and the original compatibility source; `final-readback.json` contains final shared-template data and fingerprints. Prior Consultations content rollback remains under `../consultations-production-final/rollback/`.

To reverse this follow-up only, restore the exact original `_elementor_data` strings for templates 2835 and 2836 from before.json using WordPress update_post_meta with wp_slash, invalidate only their `_elementor_element_cache`, and restore page 2044 `_wp_page_template` to `default`. Do not restore or rewrite Consultations page data. No rollback has been executed.

This follow-up supersedes the prior production archive's deliberate header/footer-absence state; the approved Consultations content SHA remains valid.
