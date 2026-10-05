# PCM Workshop — current production recovery archive

**Status:** PUBLISHED FOR MAIA VISUAL REVIEW — not closed.

Production URL: https://tujutaju.ee/workshop/  
Page ID: `2863`  
Current production `_elementor_data` SHA-256: `5c0560038299e4fee3763e2ca4937213c1eb078858ce6505427ee1b7c6087868`  
Elementor elements / unique IDs: `1 / 1`

The JSON file is the exact `_elementor_data` readback from production, archived without normalizing the JSON. `rollback/preflight-rollback.json` records the pre-write state: `/workshop/` returned 404 and no page or post used the slug, so no existing page data was overwritten. The unrelated published page Elementor #2771 was not reused or changed.

The production build follows the complete 2026-10-03 Google Drive redesign brief and the current repository source `workshop/index.html`. The approved copy, schema and meaningful destinations are preserved; the local preview footer and `/tujutaju-preview/` routes are absent. Two existing source images were copied to new production Media Library files: attachment 2861 (Hero illustration) and 2862 (Format photo). The page uses the existing Elementor Canvas pattern. Shared Header 2835 and Footer 2836 render once each; the shared navigation-hidden CSS remains active.

Files:

- `workshop-2863-CURRENT-production-20261005.json` — exact live Elementor data.
- `rollback/preflight-rollback.json` — target and shared-template preflight / rollback record.
- `verification-summary.md` — live HTML, assets, link and responsive-rule verification; rendered browser limitations are stated there.
- `SHA256SUMS` — checksums for the archive files.
