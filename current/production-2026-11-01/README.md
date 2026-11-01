# Production source checkpoint — 1 November 2026

Current production site: https://tujutaju.ee/

This dated checkpoint is the current source-data archive after removal of Elementor Pro. Earlier dated archives and the frozen English baseline remain historical references.

## Current state

- Custom CSS now lives in WordPress Additional CSS (`global-custom-css.css`). The fresh WXR value exactly matches the CSS served by production, ignoring surrounding whitespace.
- Elementor Pro has been removed; Maia confirmed subscription cancellation. Free Elementor remains active. `plugins.json` contains the current installed-plugin UI readback.
- Workshop 2863: corrected phone CTA text inset (`margin-left: 0`).
- PCM 310: the two lower navigation buttons use 16px text and a minimum height of 44px on viewports up to 1000px. Services 2857 retains its former button sizes.
- Maia confirmed successful phone and tablet review in both orientations during the migration workflow.

## Included

Fresh WordPress Tools → Export capture: all 14 published pages; four EN/ET Header/Footer templates; active Kit 626 including global variables; the active theme's Additional CSS object; the Back to top Angie snippet; one published menu item; three font families and 12 font faces. `object-<ID>.json` retains source content, selected recovery metadata, taxonomy associations and exact raw Elementor data with SHA-256 where present. `published-content.wxr.xml` is a filtered import-oriented copy of the same selection.

Excluded from the shareable archive: authors' account details, comments, form submissions, security dashboard objects, unpublished pages, obsolete templates, caches, editor/session metadata, credentials and the unfiltered export. The original unfiltered export is not committed or uploaded.

`tujutaju-home-canvas-compat.php` is inherited verbatim from the existing 12 October foundation in this repository; it was unchanged during this CSS migration, but was not freshly read from the server today. `state.json` records scope and recovery boundaries.

## Two UpdraftPlus backups — 1 November 2026

1. Earlier backup: BEFORE CSS migration; Elementor Pro active. Creation confirmed by Maia.
2. Later backup: AFTER migration and final Workshop/PCM corrections; Elementor Pro disabled. Creation confirmed by Maia. Pro was subsequently removed and its subscription cancelled, also confirmed by Maia.

Keep both and distinguish them by their creation time in UpdraftPlus. Exact times were not recorded here. The later backup may still contain the inactive Pro plugin files: removal was confirmed after that backup was made.

## Recovery boundary

This source checkpoint is not a complete database/files/media/server backup. Use the later UpdraftPlus backup for complete restoration; preserve the earlier one for rollback. Media/font URLs are retained, but binary media and plugin/theme installations are not duplicated here. Site options and Polylang global options are not included in WXR; retain those from the full backup. For source-only recovery, preserve original object IDs or remap page-ID selectors, menu/media references and language associations; restore the Canvas compatibility MU plugin and install the active dependencies before visual checks. Do not assume a bare WXR import recreates all WordPress settings.

SHA256SUMS covers each file in this checkpoint except itself. No WordPress changes were made while taking this archive.

