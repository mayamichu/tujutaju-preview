# Consultations — TEST page 2044

Published 2026-10-03 at https://tujutaju.ee/test/consultations/.

- Authoritative source: `5b3fb55706341b317944db58142ed8489b3e1c35`, `consultations.html` and `consultations/index.html`.
- Confirmed WordPress `siteurl` and `home`: `https://tujutaju.ee/test`.
- Existing page 2044 restored from Trash; no duplicate page created.
- Explicit Elementor Canvas; existing published TEST HFE Header 2812 and Footer 2817 reused through their existing global Canvas conditions. Their data/settings were not modified.
- All nine approved sections reconstructed as 88 native containers, 27 heading widgets, 83 text-editor widgets, two image widgets and four button widgets. One additional HTML widget carries only fonts, scoped CSS and the approved testimonial behavior, not page content.
- Existing TEST Media Library images 2784 and 2723 reused. No images uploaded.
- Page-scoped navigation suppression keeps menus, language controls, hamburger and footer navigation hidden without modifying shared templates or global rules.
- No local site header or footer. Testimonial attribution footers remain part of their cards.

## Final data and recovery

`consultations-2044-elementor-final.json` is the exact `_elementor_data` readback, byte-identical to the prepared data.

SHA-256: `5de4a203e34382bda04f955a4b99d1369afd7fb12b96b7652d6baff3da444ee6`

`consultations-2044-import-template.json` is an Elementor template-envelope version of the same native content. Its file hash differs because it includes export metadata. It does not contain the shared header/footer; those remain existing TEST templates.

`consultations-2044-before.json` preserves the original page and all its metadata, including its trashed state and original Elementor data. Original `_elementor_data` SHA-256: `6cf6b1976a7c1fc5a055648d4621bf047f59f302c518df4839bbda7c63a4b650`.

For recovery, first verify both URL options using WP-CLI scoped to `/www/apache/domains/www.tujutaju.ee/htdocs/test/`. Restore the complete saved `_elementor_data` value using `wp_slash` and a single `update_post_meta` call, then restore the saved page settings/template/status as needed. Regenerate only page 2044's Elementor CSS/cache. Never target the production installation. Do not import a new page when restoring this existing page.

The original comprehensive backup remains at `docs/consultations-test-20261003/preflight-backup.json`. Local source/candidate/published screenshots, rendered HTML, node comparisons, deployment script and before/after safety snapshots remain in that directory.

## Responsive verification

Browser-verified source and live TEST at desktop 1440×1000, tablet landscape 1180×820, tablet portrait 820×1180, phone landscape 844×390 and phone portrait 390×844.

All five passed: identical visible copy, exact section geometry, native element geometry within 0.11px, matching heading styles, no horizontal overflow, loaded images, actual Poppins/Source Sans 3 fonts verified through Chromium's rendered-font inspection, one shared header/footer, and hidden navigation.

Verified the six static situations, tablet-portrait outer content x=40px/width=740px, right-aligned narrow-phone Hero, approved phone-landscape Hero, three-line “Practical / Map / of yourself”, source CTA text offset, and asymmetric card/button corners. No discretionary design changes were made. See `responsive-verification.json`.

Production page/template post fields, Elementor hashes, page settings and page templates were compared before/after: no changes. On TEST, only page 2044 changed; shared templates and other pages remained unchanged. No production writes were performed.
