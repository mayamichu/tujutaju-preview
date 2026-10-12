# English production baseline — 2026-10-12

- Production: https://tujutaju.ee
- Final English acceptance QA: **PASS**; verdict **READY TO FREEZE ENGLISH BASELINE**.
- Exact source-capture commit SHA: `4004d5cfbaaf2410d59794b4e142966461d687ee`.
- Final checkpoint tag: `en-baseline-2026-10-12` (includes this manifest; the source-capture SHA above identifies the immutable production export).
- Canonical repository recovery source: [production-snapshot.json](../current/english-2026-10-12/production-snapshot.json), captured read only from live WordPress (file SHA-256 `26236278ccb55bd7ade726e6a2662e4f8ba566952ee41b03d2c7f58f43b13777`). It contains exact raw Elementor data, relevant page/template metadata, and legacy post content. Each record includes its raw Elementor-data SHA-256. It is not a full WordPress installation backup.

| Public English page | Production path | WordPress ID |
|---|---|---:|
| Home | `/` | 764 |
| Services | `/services/` | 2857 |
| PCM Training | `/trainings/` | 765 |
| Consultations | `/consultations/` | 2044 |
| What is PCM? | `/pcm/` | 310 |
| Six Personality Types | `/six-personality-types/` | 2871 |
| PCM Leadership Training | `/leadership-training/` | 2864 |
| Workshop | `/workshop/` | 2863 |
| About | `/about/` | 306 |
| Contact | `/contact/` | 302 |
| Privacy Policy | `/privacy-policy/` | 3 |

Shared Header **2835**, Footer **2836**, and Elementor Kit **626** are in the same snapshot. Active Customizer CSS is [global-custom-css.css](../current/english-2026-10-12/global-custom-css.css). The approved global Back-to-top implementation is [main.php](back-to-top-20261012/main.php), deployed as Angie snippet **2882**; the repository file matched live `main.php` byte for byte.

## Repository audit and recovery

- **A — Current / authoritative:** the `current/english-2026-10-12/` live capture and the Back-to-top file linked above. Page-specific HTML, CSS, and JS stored inside Elementor widgets are included in the raw data.
- **B — Historical but useful:** tracked `handoff/` transfer/rollback material, root and subdirectory preview HTML, assets, prior QA records, and the 2026-10-05 Drive archive. These remain in place to preserve references and Git history.
- **C — Superseded as current sources:** older TEST and pre-freeze Elementor files, including `handoff/production-current-2026-10-05/`, older `*-CURRENT*` and `*-FINAL*` exports, and duplicate generated before/after captures. They remain historical, not live recovery authority.
- **D — Review only:** the local untracked `Tujutaju Design System v1.1.txt` has no verified production-source role. It was not deleted or promoted.

No active tracked preview path or transfer script was moved. Local untracked QA artifacts under `.tmp/`, `docs/`, and `handoff/` remain on disk but are excluded from the canonical Git checkpoint by `.gitignore`; the explicit Back-to-top file and this manifest are tracked. The full production recovery path is this source capture **plus** Maia's separate WordPress UpdraftPlus backup for media, plugins, theme, options, and database state. Maia creates that backup herself.

## ET/RU handoff

**English production is the visual and structural master.** Estonian translation is next; Russian follows ET. Preserve page architecture, section order, button roles, destinations (except localized routes), Header/Footer, Back-to-top, responsive behavior, typography hierarchy, and approved panel geometry/radius. Text may wrap differently. Adjust local width or spacing only when real text expansion or linguistic structure requires it. Do not independently redesign translated pages or reopen English design decisions without explicit approval. Future self-service consultation booking is a later conversion task, not a translation blocker.
