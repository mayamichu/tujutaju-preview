<?php
/**
 * Tujutaju public-site Back to top control.
 * Installed as one global Angie code snippet; no page/template edits.
 */

add_action( 'wp_footer', static function () {
    if ( is_admin() ) {
        return;
    }
    ?>
    <style id="tt-back-to-top-style">
        #tt-back-to-top {
            position: fixed;
            right: 32px;
            bottom: max(40px, var(--tt-back-to-top-clearance, 0px));
            z-index: 1000;
            display: grid;
            place-items: center;
            box-sizing: border-box;
            width: 44px;
            height: 44px;
            padding: 0;
            border: 0;
            border-radius: 14px 0 14px 14px;
            background: #EBECF2;
            color: #626E98;
            box-shadow: none;
            cursor: pointer;
            line-height: 1;
            transition: background-color 140ms ease, color 140ms ease;
        }

        #tt-back-to-top[hidden] {
            display: none !important;
        }

        #tt-back-to-top svg {
            display: block;
            width: 18px;
            height: 18px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.75;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        #tt-back-to-top:hover {
            background: #DDE1EC;
            color: #56648E;
        }

        #tt-back-to-top:focus-visible {
            outline: 2px solid #626E98;
            outline-offset: 3px;
        }

        #tt-back-to-top:active {
            background: #D3D9E7;
            color: #53618D;
        }

        @media (max-width: 767px), (max-width: 850px) and (max-height: 500px) and (orientation: landscape) {
            #tt-back-to-top {
                right: 20px;
                bottom: max(60px, calc(env(safe-area-inset-bottom) + 20px), var(--tt-back-to-top-clearance, 0px));
                width: 40px;
                height: 40px;
            }

            #tt-back-to-top svg {
                width: 17px;
                height: 17px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            #tt-back-to-top {
                transition: none;
            }
        }
    </style>
    <button id="tt-back-to-top" type="button" aria-label="Back to top" hidden>
        <svg viewBox="0 0 18 18" aria-hidden="true" focusable="false">
            <path d="M9 15V3M9 3L4.75 7.25M9 3L13.25 7.25" />
        </svg>
    </button>
    <script id="tt-back-to-top-script">
        (() => {
            const button = document.getElementById('tt-back-to-top');
            if (!button) return;

            const threshold = 600;
            const footer = document.getElementById('colophon');
            let queued = false;
            const update = () => {
                button.hidden = window.scrollY < threshold;
                button.style.removeProperty('--tt-back-to-top-clearance');
                if (button.hidden) {
                    queued = false;
                    return;
                }

                if (footer) {
                    const rect = footer.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom > 0) {
                        const clearance = Math.max(0, window.innerHeight - rect.top + 16);
                        button.style.setProperty('--tt-back-to-top-clearance', `${clearance}px`);
                    }
                }

                const controls = document.querySelectorAll('a, button, [role="button"]');
                for (let pass = 0; pass < 12; pass++) {
                    const bubble = button.getBoundingClientRect();
                    const bottom = parseFloat(getComputedStyle(button).bottom);
                    let needed = 0;
                    for (const control of controls) {
                        if (control === button || control.contains(button)) continue;
                        const style = getComputedStyle(control);
                        if (style.display === 'none' || style.visibility === 'hidden') continue;
                        const rect = control.getBoundingClientRect();
                        if (rect.width === 0 || rect.height === 0) continue;
                        if (bubble.left >= rect.right + 4 || bubble.right <= rect.left - 4 ||
                            bubble.top >= rect.bottom + 4 || bubble.bottom <= rect.top - 4) continue;
                        needed = Math.max(needed, bubble.bottom - rect.top + 8);
                    }
                    if (needed === 0) break;
                    const clearance = bottom + needed;
                    if (clearance > window.innerHeight - bubble.height - 16) {
                        button.hidden = true;
                        break;
                    }
                    button.style.setProperty('--tt-back-to-top-clearance', `${clearance}px`);
                }
                queued = false;
            };

            window.addEventListener('scroll', () => {
                if (queued) return;
                queued = true;
                window.requestAnimationFrame(update);
            }, { passive: true });
            window.addEventListener('resize', update, { passive: true });
            window.addEventListener('pageshow', update);

            button.addEventListener('click', () => {
                const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                window.scrollTo({ top: 0, behavior: reducedMotion ? 'instant' : 'smooth' });
            });

            update();
        })();
    </script>
    <?php
}, 99 );
