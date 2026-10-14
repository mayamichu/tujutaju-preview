# Multilingual production recovery checkpoint — 2026-10-14

Production WordPress: `https://tujutaju.ee` (`siteurl` and `home`; environment `production`). Captured read-only on 2026-10-14 at 16:07 UTC after the ET Home refinement. This incremental checkpoint extends the [2026-10-12 multilingual foundation](MULTILINGUAL_FOUNDATION_2026-10-12.md) at commit `c8169b66d695e5091dd7876ae1001c085d95ff1d`. It does not replace the frozen English design baseline, commit `bc99e4d0fecc9cd019b802c8b44391854e84d900`, tag `en-baseline-2026-10-12`, or immutable source capture `4004d5cfbaaf2410d59794b4e142966461d687ee`.

Polylang Free 3.8.11 remains configured with EN as the default at `/` (Home 764), ET at `/et/` (Home 2884), and RU deferred. No language-root migration was performed. The exact current language options, terms, six object associations, rendered Home metadata, and template media references are in [`state.json`](../current/multilingual-2026-10-14/state.json) (SHA-256 `efaf0fc208fe67ee9cf02c598eaccd5302ffa903183303b0e0435e1321898c31`). The Polylang values and associations match 12 October exactly.

## Exact current captures

Each file contains the production post fields, selected recovery metadata, raw `_elementor_data` string, and the SHA-256 of that raw string. These files are incremental to the earlier archive, not a full-site backup.

| Object | ID | File in `current/multilingual-2026-10-14/` | File SHA-256 | Raw `_elementor_data` SHA-256 |
| --- | ---: | --- | --- | --- |
| EN Home | 764 | `object-764.json` | `1335723a1580936010231da983d7123ffaff0edd3f07102d1215a04c381f4abd` | `9f0a01468dbfffb4a45ae301948a76c70f5fbfc1634af0dd0a1d67643f2357da` |
| ET Home | 2884 | `object-2884.json` | `2ce09a917560b38fa0b2e767970741ec59a2c928d43a8bd3e312d77045b50150` | `73c970ff260f19ed3200d23e60517c819b06546a6f23f324274a7ac00b33c1dc` |
| EN Header | 2835 | `object-2835.json` | `425cb7009af433c72ae2f06e0e6b7f3abbf46c4b82c5063cc9e799ed80ace7ed` | `7b94892507ab54d8113397fd440fea8d8a4e7592b236791006a9401fdcc47f19` |
| EN Footer | 2836 | `object-2836.json` | `5351cdda987e5aa45ce1d3cffb4747338662f37124896ab8681097146dbb37eb` | `5ac654f6dfa6707a1ec7a278886107c9e567cef53c4c96484b2141277e344bb7` |
| ET Header | 2886 | `object-2886.json` | `a2646cfa4457e87bccae60e38d131ebaa4210f6627f935c534639894acac49da` | `d17e758993c4f4424014dcad995881ac579af7806766bd359ec4d1cde09326a5` |
| ET Footer | 2887 | `object-2887.json` | `2d318d8d71f0b03fcabf6d22f887d447f0f6c05421ba113025d62f4036e48d15` | `8c3d91d22e7da09ebf400e7c1c3d6cf4c3dd2d216018fe128aa362d9ad11b648` |

## Confirmed differences from 12 October

- Both Homes' raw Elementor data changed. EN Home retained its 150-node structure and visible copy; the hidden “Typography experiment” content and its CSS were removed from HTML widget `d3a283e`. ET Home now has 149 rather than 150 nodes: obsolete explanatory paragraph widget `30e00e97` was removed, the same hidden experiment was removed, and the approved ET visible text and FAQ refinements were applied. The exact current text and widget data are in the captures.
- EN and ET Home SureRank descriptions changed from the previous fallback values to explicit, complete descriptions. Current live EN description: “Maia Mitšulis, Estonia’s first certified PCM trainer. Practical tools to understand personality, reduce stress and communicate better at work and beyond.” Current live ET description: “Process Communication Model (PCM) aitab mõista suhtlemist, iseennast ja stressimustreid. Praktilised tööriistad inimestele, meeskondadele ja juhtidele.” The current rendered titles, canonicals, and descriptions are in `state.json`.
- All four Header/Footer raw Elementor values changed, but each retains its original two-node Elementor structure and node identities. The Header HTML widgets use the contrast logo and include a scoped size rule. The Footer HTML widgets use the clean white wordmark and include scoped responsive sizing and alignment rules. Thus the difference includes image references **and** local logo CSS, without an outer template-structure change. Current Header logo: attachment 2893, `Tujutaju-logo-contrast.png`, SHA-256 `8d41c41f93ceffea2dc0c62a2e0e1eec59c8ee908b3bbd83babcb6a571aa500c`. Current Footer wordmark: attachment 2895, `Tujutaju-logo-footer-white.webp`, SHA-256 `4862dd3c1069393fbc877fca0aa9a22e3c79bf6d5a6407f0a138514cd6f9afd0`. The existing PCM logo file remains referenced; its current SHA-256 is `5f6827dbe0f0b0db0190b07d99de450098bacc6e59ca4d4c88118dece05fe26b`.

## Unchanged foundation items, intentionally not duplicated

- Customizer/global CSS: SHA-256 `32de6bf58aaa2b304017e41770a55e3b92b1a5d3fdd282d57af508371f8f9938`; use the [12 October copy](../current/multilingual-2026-10-12/global-custom-css.css).
- `wp-content/mu-plugins/tujutaju-home-canvas-compat.php`: SHA-256 `078fe5c701686fa8a8b296573ade3776098fe0ff34359d2911a60b02e1b504c6`; use the [12 October copy](../current/multilingual-2026-10-12/tujutaju-home-canvas-compat.php).
- Elementor global Kit 626 data: SHA-256 `4f53cda18c2baa0c0354bb5f9a3ecbe5ed12ab4d8e11ba873c2f11161202b945`; use the [12 October capture](../current/multilingual-2026-10-12/object-626.json). Its page settings also match the foundation.
- Polylang language and translation configuration is unchanged; `state.json` records the current readback for clarity.

## Recovery boundary

Use this checkpoint's six object captures and `state.json` **with** the 12 October multilingual foundation for unchanged CSS, Canvas compatibility, global Kit, and broader context. Preserve the frozen EN baseline separately. Restore to a staging environment first, then verify EN `/`, ET `/et/`, language associations, Header/Footer rendering, media URLs, SEO output, and responsive layouts. The referenced image files are identified and hashed but not duplicated in this source-data checkpoint. Maia's fresh production UpdraftPlus backup from 2026-10-14 exists separately outside this Git checkpoint and is the source for full-site database/media recovery.
