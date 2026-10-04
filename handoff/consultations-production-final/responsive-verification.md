# Responsive transfer verification

Ordinary production URL: https://tujutaju.ee/consultations/

Passed desktop 1440×1000, tablet landscape 1180×820, tablet portrait 820×1180, phone landscape 844×390, and phone portrait 390×844.

At every viewport, all 205 Elementor element rectangles, computed fonts and padding match the approved live TEST page exactly after subtracting its shared header offset (80 px; 64 px on phone portrait). Visible page text is identical. Production preserves its pre-transfer absence of shared header/footer; TEST includes them. No new aesthetic refinements were made.

Portrait-tablet content field is x=40, width=740 at viewport width 820, preserving 40 px on each side. Hero composition and phone alignment, Practical / Map / of yourself line treatment, How Profiling Works optical correction, section spacing and final CTA geometry are preserved by the exact source CSS and equal computed geometry. Final full-page screenshots were inspected in all five states.

Each viewport returns HTTP 200, has no horizontal overflow, no visible CSS/code text, no page JavaScript errors and all images resolve. First/middle/last carousel dots navigate to the expected scroll offsets and active state. All four CTA links accept actual browser clicks; their mailto destinations match source. Clicks were intercepted to avoid launching an email client or sending messages.

See browser/comparison.json, browser/functional.json, and final-*.png/json. before-* captures pre-transfer production; test-* captures approved TEST. production-* is the intermediate explicit-Canvas verification and is superseded by final-*.
