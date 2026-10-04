# Consultations production transfer — CLOSED

- Existing production page: 2044, published, slug consultations.
- URL: https://tujutaju.ee/consultations/
- WP-CLI preflight siteurl/home: https://tujutaju.ee / https://tujutaju.ee.
- Transfer: 2026-10-04T08:27:19+00:00; final readback: 2026-10-04T08:33:26+00:00.
- Approved source commit: 9355414 (mayamichu/tujutaju-preview).
- Source: handoff/consultations-test-final/consultations-2044-FINAL-approved.json.
- Archive and live TEST SHA: 2f591bfc9072e1aa0cd957e83c549fd69bbc002916bfcdc4768b507402b9142e.
- Final production SHA: 83738459f4410fd4cc49b9aafa31ebe143a5f027945b84894e311c65664f118a.
- Rollback data SHA: abbfec0ce882d488b8a100f07f17b368afe2ec5cf9a7217ff37e96c610adc6a5.

## Intentional source-to-production differences

Exactly two image URLs change /test/wp-content/ to /wp-content/. Attachment IDs 2784 and 2723 are retained and file SHA-256 matches across environments. Exactly eight body.elementor-page-2044 selectors become equivalent body.page-id-2044 selectors. Both sites use page ID 2044; this satisfies the requested absence of the former selector without changing specificity or targets. All 205 unique element IDs, hierarchy, copy, other settings, CSS and JavaScript are preserved. Deterministic JSON paths are in difference-report.json. No /test/ reference remains. All four mailto CTA links and Google Fonts URL are unchanged; no unexpected TEST URL or attachment reference remains. Internal IDs containing 2044 are preserved element IDs, not TEST-environment references.

Production retains its original _wp_page_template=default and inherits elementor_canvas from the existing kit. Explicit source Canvas was initially applied, then restored to default after browser verification showed it enabled existing HFE header/footer rendering. This page-only correction preserves pre-transfer production header/footer absence and hidden navigation while retaining Canvas content layout. No shared templates were altered. Page settings hide_title=yes and edit mode builder already matched. Elementor page caches/CSS were refreshed; SureRank automatically refreshed this page’s SEO-check metadata when WordPress updated it. Post content remains as before; Elementor renders the transferred data.

## Preservation and verification

All five viewport and interaction checks passed; see responsive-verification.md. Production content matches approved TEST after accounting for the existing environment difference in shared header/footer display.

All other non-revision post rows and all other post metadata excluding volatile edit locks and Elementor CSS/element caches have identical before/after SHA-256 fingerprints. This includes Home, Trainings, Privacy, shared header/footer templates, navigation records and Elementor global kit/font/variable metadata. No options, templates, plugins, mu-plugins or other pages were explicitly written by this transfer. The broad options-table fingerprint changes during runtime (it includes logging/cache/SEO/telemetry timestamps); it is not used as proof of configuration equality and individual changing options were not captured in the initial snapshot. Global kit preservation is independently established by the unchanged postmeta fingerprint.

Rollback: rollback/pre-transfer.json contains the full original post, slug/URL/status and all raw meta; rollback/elementor-data.json is exact original data. rollback/restore.php is a guarded restoration helper, not executed. Copy both files to an administrator-controlled server location and run wp --path=/www/apache/domains/www.tujutaju.ee/htdocs eval-file restore.php pre-transfer.json if rollback is required. Keep the backup private if moving it to the web server.

Final raw readback and meta: production-readback.json. Transfer receipt reflects the initial write; final template state is in the final readback. No unresolved page-transfer issue. Next page in sequence: Services; not started in this task.
