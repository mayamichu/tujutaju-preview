# Approved English production source — 2026-10-12

`production-snapshot.json` is a read-only capture from the live WordPress database at `https://tujutaju.ee`. It contains the exact raw `_elementor_data` for all 11 public English pages, Header 2835, Footer 2836, and Kit 626. It also records post identity/content and the selected Elementor/template metadata needed to identify the source. Each record has the SHA-256 of its raw `_elementor_data` string.

The global Back-to-top code is in `../../docs/back-to-top-20261012/main.php` and was compared byte for byte with deployed Angie snippet 2882 (`main.php`).
`global-custom-css.css` is the exact active WordPress Customizer CSS returned by `wp_get_custom_css()` (SHA-256 `32de6bf58aaa2b304017e41770a55e3b92b1a5d3fdd282d57af508371f8f9938`).

This is the canonical repository source for the frozen English production state. Root HTML files are older preview sources. `handoff/` and older `docs/` files are historical checkpoints or work artifacts; filenames containing `CURRENT` or `FINAL` there do not supersede this capture. Consult `../../docs/EN_BASELINE_2026-10-12.md` for the exact checkpoint and translation rules.

The snapshot is a content recovery artifact, not a complete WordPress installation export. Media library files, theme/plugins, database options, and other site configuration require Maia's separate UpdraftPlus backup. Do not replace live content directly from this file without a controlled restore and visual verification.
