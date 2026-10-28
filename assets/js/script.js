(() => {
    "use strict";

    const body = document.body;
    const header = document.getElementById("siteHeader");
    const nav = document.getElementById("mainNav");
    const navToggle = document.getElementById("navToggle");
    const navLinks = Array.from(document.querySelectorAll(".nav-link"));
    const toTop = document.getElementById("toTop");
    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
    const mobileQuery = window.matchMedia("(max-width: 960px)");

    /* -----------------------------------------------------
       Header saat halaman digulir + tombol kembali ke atas
    ----------------------------------------------------- */
    let ticking = false;

    const updateScrollState = () => {
        const scrolled = window.scrollY > 24;
        header.classList.toggle("is-scrolled", scrolled);

        if (toTop) {
            toTop.classList.toggle("is-visible", window.scrollY > 600);
        }
    };

    const onScroll = () => {
        if (ticking) {
            return;
        }

        ticking = true;
        window.requestAnimationFrame(() => {
            updateScrollState();
            ticking = false;
        });
    };

    updateScrollState();
    window.addEventListener("scroll", onScroll, { passive: true });

    if (toTop) {
        toTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: prefersReducedMotion.matches ? "auto" : "smooth",
            });
        });
    }

    /* -----------------------------------------------------
       Menu navigasi ponsel
    ----------------------------------------------------- */
    const setNavState = (open, restoreFocus = false) => {
        if (!nav || !navToggle) {
            return;
        }

        nav.classList.toggle("is-open", open);
        header.classList.toggle("is-open", open);
        navToggle.setAttribute("aria-expanded", String(open));
        navToggle.setAttribute(
            "aria-label",
            open ? "Tutup menu navigasi" : "Buka menu navigasi"
        );
        body.classList.toggle("nav-open", open && mobileQuery.matches);

        if (restoreFocus) {
            navToggle.focus();
        }
    };

    if (navToggle && nav) {
        navToggle.addEventListener("click", () => {
            setNavState(!nav.classList.contains("is-open"));
        });

        navLinks.forEach((link) => {
            link.addEventListener("click", () => setNavState(false));
        });

        document.addEventListener("click", (event) => {
            if (
                nav.classList.contains("is-open") &&
                !nav.contains(event.target) &&
                !navToggle.contains(event.target)
            ) {
                setNavState(false);
            }
        });

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && nav.classList.contains("is-open")) {
                setNavState(false, true);
            }
        });

        mobileQuery.addEventListener("change", (event) => {
            if (!event.matches) {
                setNavState(false);
            }
        });
    }

    /* -----------------------------------------------------
       Penanda bagian aktif pada navigasi
    ----------------------------------------------------- */
    const sections = navLinks
        .map((link) => {
            const target = link.getAttribute("href");
            return target && target.startsWith("#")
                ? document.querySelector(target)
                : null;
        })
        .filter(Boolean);

    const setActiveLink = (id) => {
        navLinks.forEach((link) => {
            const isActive = link.getAttribute("href") === `#${id}`;
            link.classList.toggle("is-active", isActive);

            if (isActive) {
                link.setAttribute("aria-current", "location");
            } else {
                link.removeAttribute("aria-current");
            }
        });
    };

    if ("IntersectionObserver" in window && sections.length > 0) {
        const navObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        setActiveLink(entry.target.id);
                    }
                });
            },
            {
                rootMargin: "-42% 0px -52% 0px",
                threshold: 0,
            }
        );

        sections.forEach((section) => navObserver.observe(section));
    }

    /* -----------------------------------------------------
       Animasi muncul saat bagian memasuki layar
    ----------------------------------------------------- */
    const revealItems = Array.from(document.querySelectorAll(".reveal"));

    if (
        "IntersectionObserver" in window &&
        !prefersReducedMotion.matches &&
        revealItems.length > 0
    ) {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px",
            }
        );

        revealItems.forEach((item) => revealObserver.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add("is-visible"));
    }

    /* -----------------------------------------------------
       Lightbox galeri
    ----------------------------------------------------- */
    const triggers = Array.from(
        document.querySelectorAll("[data-lightbox-trigger]")
    );
    const lightbox = document.getElementById("lightbox");
    const lightboxImage = document.getElementById("lightboxImage");
    const lightboxTitle = document.getElementById("lightboxTitle");
    const lightboxMeta = document.getElementById("lightboxMeta");
    const lightboxCounter = document.getElementById("lightboxCounter");
    const lightboxClose = document.querySelector("[data-lightbox-close]");
    const lightboxPrev = document.querySelector("[data-lightbox-prev]");
    const lightboxNext = document.querySelector("[data-lightbox-next]");

    let currentPhoto = 0;
    let lastFocusedElement = null;

    const renderPhoto = (index) => {
        if (!triggers.length) {
            return;
        }

        currentPhoto = (index + triggers.length) % triggers.length;
        const trigger = triggers[currentPhoto];

        lightboxImage.src = trigger.dataset.src || "";
        lightboxImage.alt = trigger.dataset.alt || "";
        lightboxTitle.textContent = trigger.dataset.title || "";
        lightboxMeta.textContent = `${trigger.dataset.category || "Galeri"} · Foto ilustrasi`;
        lightboxCounter.textContent = `${currentPhoto + 1} / ${triggers.length}`;
    };

    const openLightbox = (index, trigger) => {
        lastFocusedElement = trigger;
        renderPhoto(index);
        lightbox.hidden = false;
        body.classList.add("lightbox-open");
        lightboxClose.focus();
    };

    const closeLightbox = () => {
        if (lightbox.hidden) {
            return;
        }

        lightbox.hidden = true;
        body.classList.remove("lightbox-open");
        lightboxImage.src = "";

        if (lastFocusedElement) {
            lastFocusedElement.focus();
        }
    };

    const trapFocus = (event) => {
        const focusable = [lightboxClose, lightboxPrev, lightboxNext].filter(Boolean);

        if (!focusable.length) {
            return;
        }

        const first = focusable[0];
        const last = focusable[focusable.length - 1];

        if (event.shiftKey && document.activeElement === first) {
            event.preventDefault();
            last.focus();
        } else if (!event.shiftKey && document.activeElement === last) {
            event.preventDefault();
            first.focus();
        }
    };

    if (lightbox && triggers.length > 0) {
        triggers.forEach((trigger, index) => {
            trigger.addEventListener("click", () => openLightbox(index, trigger));
        });

        lightboxClose.addEventListener("click", closeLightbox);
        lightboxPrev.addEventListener("click", () => renderPhoto(currentPhoto - 1));
        lightboxNext.addEventListener("click", () => renderPhoto(currentPhoto + 1));

        lightbox.addEventListener("click", (event) => {
            if (event.target === lightbox) {
                closeLightbox();
            }
        });

        document.addEventListener("keydown", (event) => {
            if (lightbox.hidden) {
                return;
            }

            if (event.key === "Escape") {
                closeLightbox();
            } else if (event.key === "ArrowLeft") {
                renderPhoto(currentPhoto - 1);
            } else if (event.key === "ArrowRight") {
                renderPhoto(currentPhoto + 1);
            } else if (event.key === "Tab") {
                trapFocus(event);
            }
        });
    }

    /* -----------------------------------------------------
       Salin koordinat lokasi
    ----------------------------------------------------- */
    const copyButtons = Array.from(document.querySelectorAll("[data-copy]"));
    const copyStatus = document.getElementById("copyStatus");

    const fallbackCopy = (text) => {
        const textarea = document.createElement("textarea");
        textarea.value = text;
        textarea.setAttribute("readonly", "");
        textarea.style.position = "fixed";
        textarea.style.opacity = "0";
        document.body.appendChild(textarea);
        textarea.select();

        let copied = false;
        try {
            copied = document.execCommand("copy");
        } catch (error) {
            copied = false;
        }

        document.body.removeChild(textarea);
        return copied;
    };

    copyButtons.forEach((button) => {
        button.addEventListener("click", async () => {
            const text = button.dataset.copy || "";
            let copied = false;

            try {
                if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(text);
                    copied = true;
                } else {
                    copied = fallbackCopy(text);
                }
            } catch (error) {
                copied = fallbackCopy(text);
            }

            if (!copied) {
                if (copyStatus) {
                    copyStatus.textContent = `Koordinat: ${text}`;
                }
                return;
            }

            const label = button.querySelector("span");
            button.classList.add("is-copied");

            if (label) {
                label.textContent = "Tersalin";
            }

            if (copyStatus) {
                copyStatus.textContent = "Koordinat berhasil disalin.";
            }

            window.setTimeout(() => {
                button.classList.remove("is-copied");

                if (label) {
                    label.textContent = "Salin";
                }

                if (copyStatus) {
                    copyStatus.textContent = "";
                }
            }, 2600);
        });
    });
})();
