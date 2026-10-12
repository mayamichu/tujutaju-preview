# Multilingual foundation recovery checkpoint — 2026-10-12

Production: https://tujutaju.ee. This is a read-only capture of the working EN/ET Home foundation, separate from the frozen English checkpoint at commit `bc99e4d0fecc9cd019b802c8b44391854e84d900`, tag `en-baseline-2026-10-12`. The English tag and its files remain unchanged.

## Live architecture

- Polylang Free 3.8.11: active. English is the default language at `/`; Estonian is at `/et/`. Russian is deferred and is not configured.
- Front page: 764. Polylang translates the `elementor-hf` post type. The exact current language options, language terms, and translation associations are in [polylang-state.json](../current/multilingual-2026-10-12/polylang-state.json).
- Untranslated ET navigation destinations may temporarily point to working English pages. Do not invent ET URLs before their pages exist.
- Only after the full ET site is ready, the planned URL migration is ET → `/` and EN → `/en/`. That migration is not part of this checkpoint.

| Object | EN ID | ET ID | EN raw `_elementor_data` SHA-256 | ET raw `_elementor_data` SHA-256 |
| --- | ---: | ---: | --- | --- |
| Home | 764 | 2884 | `b948657c14f3cd01f1385cd51e5e93aec7ec465852b3247567e69a3b1c1d1ca8` | `13e956387ce139a5fac90bca7c21ea19fc26a58c67a7bfd1e4337a68b5164a6b` |
| Header | 2835 | 2886 | `cfdf1db3e6d2f01447e4d776df045bad06256795eae49d6e445060b7cbb86a98` | `8ffe1a2e1155481e253d7319f4ef912df7b7675e8db06aa91dc870f912b438e1` |
| Footer | 2836 | 2887 | `338a84c2784e1c221e89b0d65a2aa73522517b6e0d0d6c89399189a1834a23c4` | `6da6dcdb2ec86b03725e154bbf98d67bb22552dd34c5ec61d4fb8b7fb591becb` |

All six objects were published and associated in the three EN/ET pairs at capture. [Global Kit 626](../current/multilingual-2026-10-12/object-626.json) has raw Elementor SHA-256 `4f53cda18c2baa0c0354bb5f9a3ecbe5ed12ab4d8e11ba873c2f11161202b945`.

## Recovery files

- [current/multilingual-2026-10-12/](../current/multilingual-2026-10-12/) contains one exact raw Elementor and selected metadata snapshot per object: `object-764.json`, `object-2884.json`, `object-2835.json`, `object-2886.json`, `object-2836.json`, `object-2887.json`, and `object-626.json`. Each JSON file stores the raw `_elementor_data` string and its SHA-256. HFB conditions and page template metadata are included where present.
- [global-custom-css.css](../current/multilingual-2026-10-12/global-custom-css.css) is the exact current Customizer CSS; SHA-256 `32de6bf58aaa2b304017e41770a55e3b92b1a5d3fdd282d57af508371f8f9938`.
- [tujutaju-home-canvas-compat.php](../current/multilingual-2026-10-12/tujutaju-home-canvas-compat.php) is the exact production `wp-content/mu-plugins/tujutaju-home-canvas-compat.php`; SHA-256 `078fe5c701686fa8a8b296573ade3776098fe0ff34359d2911a60b02e1b504c6`. Its narrow Home condition accepts both EN Home 764 and ET Home 2884 so Elementor Canvas invokes the HFB Header/Footer rendering hooks for either language. This checkpoint did not edit the live file.
- The approved global Back-to-top implementation is already tracked at [docs/back-to-top-20261012/main.php](back-to-top-20261012/main.php). Its SHA-256 `7cfec90f4522ab2d74f2ba2b3ba1595ac3016630b8460f455c07a12ac8e7c9f7` matched the live Angie snippet 2882 `main.php` byte for byte.

## Verification and restore boundary

At capture, `siteurl` and `home` were `https://tujutaju.ee`. Both `/` and `/et/` returned 200. The English response contained Elementor IDs 2835, 764, and 2836 exactly once; the Estonian response contained 2886, 2884, and 2887 exactly once. Both had self-referencing canonicals and reciprocal EN/ET hreflang. The number of published WordPress pages was 14.

Restore source: this Git tag and its snapshot directory, with a copy in the existing Tujutaju website Google Drive recovery area. This is a source-data checkpoint, not a full WordPress database, media, plugins, or theme backup. Maia is creating a separate fresh UpdraftPlus production backup; confirm its completion and location independently before any full-site restore.

The English baseline tag remains the source for the frozen English design. Use this multilingual checkpoint for the current EN/ET Home, Header/Footer, Polylang configuration, CSS, and Canvas compatibility state. Any restoration should be staged and verified before production use.
