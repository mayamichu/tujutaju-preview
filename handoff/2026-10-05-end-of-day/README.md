# Tujutaju website — end-of-day checkpoint — 2026-10-05

This is a state/recovery manifest for the production work completed or paused on 5 October 2026. It records exact live Elementor SHA-256 values, review status, and pending work. It is **not** a substitute for the raw `_elementor_data` JSON exports.

## Services — CLOSED

- Production: https://tujutaju.ee/services/
- Page ID: `2857`
- Final approved Elementor SHA-256: `fb52d57373ffb0e7c4554607852733cc839f11eb9c2aa197f854419f03add1c1`
- Status: visually approved and CLOSED.
- Preserve body-page design. Shared Header/Footer cleanup is a separate future global task.

## Contact — structure approved, final artwork pending

- Production: https://tujutaju.ee/contact/
- Page ID: `302`
- Current structural Elementor SHA-256: `47a925401270c22fc1793a1e08415cc5321ff029a4991648f6fd24b681e9cf75`
- Current structure has been visually approved across the five standard responsive states.
- Temporary Hero artwork remains PCM Recognize; Maia will replace it with her own artwork.
- Preserve the exact two-line H1 `Let’s start / with a conversation`, open contact columns, soft-blue practical-context block, no extra CTA, and full right alignment of kicker + H1 + supporting text on phone portrait.
- Next Contact pass: insert final artwork, adjust only Hero artwork sizing/position responsively, recheck five states, archive exact final readback/SHA, then close Contact.

## PCM — PAUSED / NOT CLOSED

- Production: https://tujutaju.ee/pcm/
- Page ID: `310`
- Current preferred live Elementor SHA-256: `1fefb0b897ed1a2d5a3c42da919c8c86f93e0d3a714ba4bf1b6ef080e77c822d`
- Do not roll back to the earlier Medium refinement.

### Confirmed browser geometry

Cached Playwright Core + Chromium is available and can measure live `getBoundingClientRect()` geometry.

Across `1440×1000`, `1180×820`, `820×1180`, `844×390`, and `390×844`, the following **visible-to-visible outer gaps** currently measure exactly `66px`:

1. Personality button → History panel
2. History panel → `A practical framework`
3. last How PCM Works body text → Research panel
4. Research panel → `Where to go next`

At `820×1180`:

- visible page outer field is `40px` left and right;
- people illustration is layered behind text;
- illustration bottom effectively aligns with the last visible Personality Structure body line.

### Important next-pass decision

Maia still sees the overall inter-block rhythm as visually too loose. **Do not simply change the verified 66px outer gaps.** On return, use a stronger model plus Playwright to inspect the **internal geometry** that makes correct outer gaps read too large: panel inner padding, child spacing, line boxes, grid/content heights, `min-height`, and internal white space.

### Confirmed final-section defects

At phone portrait `390×844`:

- intro paragraph → `A personal perspective` = `96px` (`66 + 30` card top padding)
- `Explore consultations` button → `Learn to use PCM` = `126px` (`30 + 66 + 30`)
- final button → footer = `30px`

At desktop, tablets, and phone landscape:

- final CTA → footer = `0px`

Future repair: remove redundant vertical card padding, retain one clean internal spacing source, add one deliberate final-section→footer spacing source, and remeasure actual rendered geometry afterward.

Do not touch during that later PCM pass: approved Hero top rhythm, 3-line H1, typography, History/Research visual design, How PCM Works illustrations/titles, portrait-tablet 40px field, people-illustration geometry/layering, shared Header/Footer, or other pages.

## Shared-site future task

Header `2835` / Footer `2836` geometry varies between some page contexts/breakpoints, especially Consultations tablet. Audit and unify shared-template rendering separately. Do not edit closed body-page content during that task.

## Raw archive status

The exact SHA checkpoints above are authoritative for this handoff. The current chat connector does not have direct WordPress/WP-CLI access to retrieve the live `_elementor_data` bytes, and no separate final raw archives for these exact Services/Contact/PCM states were found in the current GitHub handoff tree or Drive search. Therefore no byte-for-byte JSON backup is fabricated here.

**Before any further edit in the next Codex/WP-CLI window:** export the exact live `_elementor_data` for Services 2857, Contact 302, and PCM 310; verify each export's SHA-256 against the values above; save the exact JSON into GitHub handoff archives and Google Drive; then continue work.
