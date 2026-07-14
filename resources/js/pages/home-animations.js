import "../../css/animations.css";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

const root = document.querySelector('[data-page="home"]');

if (!root || root.dataset.gsapInitialized === "true") {
    // No-op when the homepage is not present or the module has already run.
} else {
    root.dataset.gsapInitialized = "true";
    initHomeAnimations(root);
}

function initHomeAnimations(pageRoot) {
    const reducedMotionQuery = window.matchMedia("(prefers-reduced-motion: reduce)");

    if (reducedMotionQuery.matches) {
        document.documentElement.setAttribute("data-home-gsap", "reduced");
        return;
    }

    document.documentElement.setAttribute("data-home-gsap", "active");
    gsap.registerPlugin(ScrollTrigger);
    const cleanupCallbacks = [];
    const registerCleanup = (callback) => {
        cleanupCallbacks.push(callback);
    };

    const context = gsap.context(() => {
        initHero(pageRoot);
        initSectionReveals(pageRoot);
        initStoriesReveal(pageRoot);
        initFaqReveal(pageRoot);
        initFinalCta(pageRoot);
        initSceneDepth(pageRoot, registerCleanup);
    }, pageRoot);

    const runCleanupCallbacks = () => {
        while (cleanupCallbacks.length) {
            const callback = cleanupCallbacks.pop();
            callback?.();
        }
    };

    const handleMotionPreferenceChange = (event) => {
        if (!event.matches) {
            return;
        }

        document.documentElement.setAttribute("data-home-gsap", "reduced");
        context.revert();
        runCleanupCallbacks();
    };

    reducedMotionQuery.addEventListener?.("change", handleMotionPreferenceChange);

    window.addEventListener(
        "pagehide",
        () => {
            reducedMotionQuery.removeEventListener?.("change", handleMotionPreferenceChange);
            context.revert();
            runCleanupCallbacks();
            document.documentElement.removeAttribute("data-home-gsap");
            delete pageRoot.dataset.gsapInitialized;
        },
        { once: true },
    );
}

function initHero(pageRoot) {
    const hero = pageRoot.querySelector("[data-gsap-hero]");

    if (!hero) {
        return;
    }

    const background = hero.querySelector("[data-gsap-hero-bg]");
    const content = hero.querySelector("[data-gsap-hero-content]");
    const badge = hero.querySelector("[data-gsap-hero-badge]");
    const proof = hero.querySelector("[data-gsap-hero-proof]");
    const isDesktop = window.matchMedia("(min-width: 768px)").matches;

    if (badge) {
        gsap.to(badge, {
            y: -8,
            duration: 2.8,
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true,
        });
    }

    if (proof) {
        gsap.to(proof, {
            y: -4,
            duration: 3.2,
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true,
        });
    }

    const timeline = gsap.timeline({
        defaults: { ease: "none" },
        scrollTrigger: {
            trigger: hero,
            start: "top top",
            end: "bottom top",
            scrub: 0.8,
        },
    });

    if (background) {
        timeline.to(
            background,
            {
                scale: isDesktop ? 1.12 : 1.06,
                yPercent: isDesktop ? 8 : 4,
            },
            0,
        );
    }

    if (content) {
        timeline.to(
            content,
            {
                yPercent: isDesktop ? -8 : -4,
            },
            0,
        );
    }
}

function initSectionReveals(pageRoot) {
    const sections = pageRoot.querySelectorAll("[data-gsap-section]");

    sections.forEach((section) => {
        const sectionName = section.getAttribute("data-gsap-section");

        if (sectionName === "stories" || sectionName === "final-cta") {
            return;
        }

        const blocks = getSectionBlocks(section);

        if (!blocks.length) {
            return;
        }

        gsap.from(blocks, {
            autoAlpha: 0,
            y: 36,
            duration: 0.9,
            ease: "power2.out",
            stagger: 0.12,
            scrollTrigger: {
                trigger: section,
                start: "top 78%",
                once: true,
            },
        });
    });
}

function initStoriesReveal(pageRoot) {
    const storiesSection = pageRoot.querySelector('[data-gsap-section="stories"]');

    if (!storiesSection) {
        return;
    }

    const intro = storiesSection.querySelector(".flex.flex-col.space-y-4");
    const tracks = Array.from(storiesSection.querySelectorAll("[data-gsap-marquee]"));

    if (intro) {
        gsap.from(intro, {
            autoAlpha: 0,
            y: 32,
            duration: 0.9,
            ease: "power2.out",
            scrollTrigger: {
                trigger: storiesSection,
                start: "top 80%",
                once: true,
            },
        });
    }

    if (tracks.length) {
        gsap.from(tracks, {
            autoAlpha: 0,
            y: 24,
            duration: 0.9,
            ease: "power2.out",
            stagger: 0.12,
            scrollTrigger: {
                trigger: storiesSection,
                start: "top 72%",
                once: true,
            },
        });
    }
}

function initFaqReveal(pageRoot) {
    const intro = pageRoot.querySelector("[data-gsap-faq-intro]");
    const cardsRoot = pageRoot.querySelector("[data-gsap-faq-cards]");

    if (intro) {
        gsap.from(intro, {
            autoAlpha: 0,
            y: 32,
            duration: 0.85,
            ease: "power2.out",
            scrollTrigger: {
                trigger: intro,
                start: "top 82%",
                once: true,
            },
        });
    }

    if (!cardsRoot) {
        return;
    }

    const cards = Array.from(cardsRoot.querySelectorAll(":scope > .space-y-4 > div"));

    if (!cards.length) {
        return;
    }

    gsap.from(cards, {
        autoAlpha: 0,
        y: 28,
        duration: 0.8,
        ease: "power2.out",
        stagger: 0.08,
        scrollTrigger: {
            trigger: cardsRoot,
            start: "top 78%",
            once: true,
        },
    });
}

function initFinalCta(pageRoot) {
    const section = pageRoot.querySelector('[data-gsap-section="final-cta"]');
    const scene = section?.querySelector('[data-gsap-scene="final-cta"]');

    if (!section || !scene) {
        return;
    }

    const pieces = [
        section.querySelector("[data-gsap-cta-title]"),
        section.querySelector("[data-gsap-cta-copy]"),
        section.querySelector("[data-gsap-cta-actions]"),
        section.querySelector("[data-gsap-cta-proof]"),
    ].filter(Boolean);

    if (pieces.length) {
        gsap.from(pieces, {
            autoAlpha: 0,
            y: 34,
            duration: 0.9,
            ease: "power2.out",
            stagger: 0.1,
            scrollTrigger: {
                trigger: section,
                start: "top 78%",
                once: true,
            },
        });
    }

    gsap.to(scene, {
        yPercent: -4,
        scale: 1.01,
        ease: "none",
        scrollTrigger: {
            trigger: section,
            start: "top bottom",
            end: "bottom top",
            scrub: 0.8,
        },
    });
}

function initSceneDepth(pageRoot, registerCleanup) {
    const canTilt = window.matchMedia("(min-width: 1024px) and (hover: hover) and (pointer: fine)").matches;

    if (!canTilt) {
        return;
    }

    const scenes = pageRoot.querySelectorAll("[data-gsap-scene]");

    scenes.forEach((scene) => {
        const depthLayers = Array.from(scene.querySelectorAll("[data-gsap-depth]"));

        if (!depthLayers.length) {
            return;
        }

        const handlePointerMove = (event) => {
            const bounds = scene.getBoundingClientRect();
            const horizontal = ((event.clientX - bounds.left) / bounds.width - 0.5) * 2;
            const vertical = ((event.clientY - bounds.top) / bounds.height - 0.5) * 2;

            gsap.to(scene, {
                rotationY: horizontal * 5,
                rotationX: vertical * -4,
                duration: 0.55,
                ease: "power3.out",
                overwrite: true,
            });

            depthLayers.forEach((layer) => {
                const depthFactor = getDepthFactor(layer);

                gsap.to(layer, {
                    x: horizontal * depthFactor,
                    y: vertical * depthFactor * -1,
                    z: depthFactor * 2.5,
                    duration: 0.55,
                    ease: "power3.out",
                    overwrite: true,
                });
            });
        };

        const handlePointerLeave = () => {
            gsap.to(scene, {
                rotationX: 0,
                rotationY: 0,
                duration: 0.9,
                ease: "power3.out",
            });

            depthLayers.forEach((layer) => {
                gsap.to(layer, {
                    x: 0,
                    y: 0,
                    z: 0,
                    duration: 0.9,
                    ease: "power3.out",
                });
            });
        };

        scene.addEventListener("pointermove", handlePointerMove);
        scene.addEventListener("pointerleave", handlePointerLeave);

        registerCleanup(() => {
            scene.removeEventListener("pointermove", handlePointerMove);
            scene.removeEventListener("pointerleave", handlePointerLeave);
        });
    });
}

function getDepthFactor(layer) {
    const depth = layer.getAttribute("data-gsap-depth");

    if (depth === "foreground") {
        return 12;
    }

    if (depth === "background") {
        return 6;
    }

    return 9;
}

function getSectionBlocks(section) {
    const directContainer =
        section.querySelector(":scope > .container") ||
        section.querySelector(":scope > .container.mx-auto") ||
        section.querySelector(":scope > .max-w-4xl") ||
        section.querySelector(":scope > .max-w-7xl");

    if (!directContainer) {
        return [];
    }

    return Array.from(directContainer.children).filter((element) => {
        if (!(element instanceof HTMLElement)) {
            return false;
        }

        if (element.tagName === "SCRIPT" || element.tagName === "LINK") {
            return false;
        }

        return element.offsetParent !== null || element.getBoundingClientRect().height > 0;
    });
}
