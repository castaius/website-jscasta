const header = document.querySelector("[data-header]");
const menuToggle = document.querySelector("[data-menu-toggle]");
const menuPanel = document.querySelector("[data-menu-panel]");
const revealItems = document.querySelectorAll(".reveal");
const form = document.querySelector(".contact-form");
const formNote = document.querySelector("[data-form-note]");
const tutorialForm = document.querySelector("[data-tutorial-form]");
const tutorialNote = document.querySelector("[data-tutorial-note]");
const videoOpeners = document.querySelectorAll("[data-video-open], [data-video-button]");
const videoModal = document.querySelector("[data-video-modal]");
const videoClosers = document.querySelectorAll("[data-video-close]");
const videoCloseButton = videoModal?.querySelector(".video-modal-close");
const testimonialCarousels = document.querySelectorAll("[data-testimonial-carousel]");
const customCursor = document.querySelector("[data-cursor]");
const fallbackImages = document.querySelectorAll("[data-fallback-image]");
const dragRails = document.querySelectorAll("[data-drag-rail]");
const brandProjectButtons = document.querySelectorAll("[data-brand-project]");
const featuredBrandProject = document.querySelector("[data-featured-brand-project]");
const workCards = document.querySelectorAll(".work-card[data-external-thumbnail]");
const workCarousels = document.querySelectorAll("[data-work-carousel]");
const serviceTabs = document.querySelectorAll("[data-service-tab]");
let lastFocusedElement = null;
const pageLanguage = document.documentElement.lang || "en";
const isSpanishPage = pageLanguage.toLowerCase().startsWith("es");
const uiText = {
  openMenu: isSpanishPage ? "Abrir menu de navegacion" : "Open navigation menu",
  closeMenu: isSpanishPage ? "Cerrar menu de navegacion" : "Close navigation menu",
  showTestimonial: isSpanishPage ? "Mostrar testimonio" : "Show testimonial",
};

function setHeaderState() {
  if (!header) return;
  header.classList.toggle("is-scrolled", window.scrollY > 24);
}

function closeMenu() {
  if (!menuPanel || !menuToggle) return;
  document.body.classList.remove("menu-open");
  menuPanel.classList.remove("is-open");
  menuToggle.setAttribute("aria-expanded", "false");
  menuToggle.setAttribute("aria-label", uiText.openMenu);
}

function toggleMenu() {
  if (!menuPanel || !menuToggle) return;
  const isOpen = menuPanel.classList.toggle("is-open");
  document.body.classList.toggle("menu-open", isOpen);
  menuToggle.setAttribute("aria-expanded", String(isOpen));
  menuToggle.setAttribute("aria-label", isOpen ? uiText.closeMenu : uiText.openMenu);
}

function openVideoModal(event) {
  if (!videoModal) return;
  event?.preventDefault();
  const videosSection = document.querySelector("#videos");
  videosSection?.scrollIntoView({ behavior: "smooth", block: "start" });
  lastFocusedElement = document.activeElement;
  videoModal.classList.add("is-open");
  videoModal.setAttribute("aria-hidden", "false");
  document.body.classList.add("modal-open");
  videoCloseButton?.focus();
}

function closeVideoModal() {
  if (!videoModal) return;
  videoModal.classList.remove("is-open");
  videoModal.setAttribute("aria-hidden", "true");
  document.body.classList.remove("modal-open");

  if (lastFocusedElement && typeof lastFocusedElement.focus === "function") {
    lastFocusedElement.focus();
  }
}

function keepFocusInModal(event) {
  if (!videoModal?.classList.contains("is-open") || event.key !== "Tab") return;

  const focusable = videoModal.querySelectorAll(
    'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])'
  );
  if (!focusable.length) return;

  const first = focusable[0];
  const last = focusable[focusable.length - 1];

  if (event.shiftKey && document.activeElement === first) {
    event.preventDefault();
    last.focus();
  } else if (!event.shiftKey && document.activeElement === last) {
    event.preventDefault();
    first.focus();
  }
}

setHeaderState();
window.addEventListener("scroll", setHeaderState, { passive: true });

if (menuToggle && menuPanel) {
  menuToggle.addEventListener("click", toggleMenu);
  menuPanel.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });
}

document.addEventListener("keydown", (event) => {
  keepFocusInModal(event);

  if (event.key === "Escape") {
    if (menuPanel?.classList.contains("is-open")) {
      closeMenu();
    }

    if (videoModal?.classList.contains("is-open")) {
      closeVideoModal();
    }
  }
});

if ("IntersectionObserver" in window && revealItems.length) {
  const revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          revealObserver.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.16,
      rootMargin: "0px 0px -60px 0px",
    }
  );

  revealItems.forEach((item, index) => {
    item.style.transitionDelay = `${Math.min(index % 4, 3) * 80}ms`;
    revealObserver.observe(item);
  });
} else {
  revealItems.forEach((item) => item.classList.add("is-visible"));
}

videoOpeners.forEach((opener) => {
  opener.addEventListener("click", openVideoModal);
});

videoClosers.forEach((closer) => {
  closer.addEventListener("click", closeVideoModal);
});

function initTestimonialCarousel(carousel) {
  const track = carousel.querySelector("[data-testimonial-track]");
  const slides = Array.from(track?.querySelectorAll(".testimonial-card") || []);
  const prevButton = carousel.querySelector("[data-carousel-prev]");
  const nextButton = carousel.querySelector("[data-carousel-next]");
  const dotsContainer = carousel.querySelector("[data-carousel-dots]");
  const viewport = carousel.querySelector(".testimonial-viewport");

  if (!track || !slides.length || !viewport) return;

  let activeIndex = 0;
  let isPaused = false;
  let autoTimer = null;
  let touchStartX = 0;

  const dots = dotsContainer
    ? slides.map((_, index) => {
        const dot = document.createElement("button");
        dot.type = "button";
        dot.className = "carousel-dot";
        dot.setAttribute("aria-label", `${uiText.showTestimonial} ${index + 1}`);
        dot.addEventListener("click", () => goToSlide(index));
        dotsContainer.appendChild(dot);
        return dot;
      })
    : [];

  function updateCarousel(options = {}) {
    const currentSlide = slides[activeIndex];
    if (!currentSlide) return;

    slides.forEach((slide, index) => {
      const isActive = index === activeIndex;
      slide.classList.toggle("is-active", isActive);
      slide.classList.toggle("is-before", index === (activeIndex - 1 + slides.length) % slides.length);
      slide.classList.toggle("is-after", index === (activeIndex + 1) % slides.length);
      slide.setAttribute("aria-hidden", String(!isActive));
      slide.tabIndex = isActive ? 0 : -1;
    });

    dots.forEach((dot, index) => {
      const isActive = index === activeIndex;
      dot.classList.toggle("is-active", isActive);
      dot.setAttribute("aria-current", isActive ? "true" : "false");
    });

    const targetLeft =
      currentSlide.offsetLeft -
      (viewport.clientWidth - currentSlide.offsetWidth) / 2;

    viewport.scrollTo({
      left: Math.max(0, targetLeft),
      behavior: options.instant ? "auto" : "smooth",
    });
  }

  function goToSlide(index) {
    activeIndex = (index + slides.length) % slides.length;
    updateCarousel();
    restartAutoAdvance();
  }

  function nextSlide() {
    goToSlide(activeIndex + 1);
  }

  function previousSlide() {
    goToSlide(activeIndex - 1);
  }

  function stopAutoAdvance() {
    if (autoTimer) {
      window.clearInterval(autoTimer);
      autoTimer = null;
    }
  }

  function startAutoAdvance() {
    stopAutoAdvance();
    if (isPaused || slides.length < 2) return;
    autoTimer = window.setInterval(nextSlide, 7000);
  }

  function restartAutoAdvance() {
    if (!isPaused) startAutoAdvance();
  }

  prevButton?.addEventListener("click", previousSlide);
  nextButton?.addEventListener("click", nextSlide);

  slides.forEach((slide, index) => {
    slide.setAttribute("role", "button");
    slide.setAttribute("aria-label", `${uiText.showTestimonial} ${index + 1}`);

    slide.addEventListener("click", () => {
      if (index === activeIndex) return;
      const previousIndex = (activeIndex - 1 + slides.length) % slides.length;
      goToSlide(index === previousIndex ? activeIndex - 1 : activeIndex + 1);
    });
  });

  carousel.addEventListener("mouseenter", () => {
    isPaused = true;
    stopAutoAdvance();
  });

  carousel.addEventListener("mouseleave", () => {
    isPaused = false;
    startAutoAdvance();
  });

  carousel.addEventListener("focusin", () => {
    isPaused = true;
    stopAutoAdvance();
  });

  carousel.addEventListener("focusout", (event) => {
    if (event.relatedTarget && carousel.contains(event.relatedTarget)) return;
    isPaused = false;
    startAutoAdvance();
  });

  carousel.addEventListener("keydown", (event) => {
    if (event.key === "ArrowLeft") {
      event.preventDefault();
      previousSlide();
    } else if (event.key === "ArrowRight") {
      event.preventDefault();
      nextSlide();
    }
  });

  viewport.addEventListener(
    "touchstart",
    (event) => {
      touchStartX = event.touches[0]?.clientX || 0;
    },
    { passive: true }
  );

  viewport.addEventListener(
    "touchend",
    (event) => {
      const touchEndX = event.changedTouches[0]?.clientX || 0;
      const delta = touchEndX - touchStartX;
      if (Math.abs(delta) > 42) {
        delta > 0 ? previousSlide() : nextSlide();
      }
    },
    { passive: true }
  );

  window.addEventListener(
    "resize",
    () => updateCarousel({ instant: true }),
    { passive: true }
  );

  updateCarousel({ instant: true });
  startAutoAdvance();
}

testimonialCarousels.forEach(initTestimonialCarousel);

function initWorkCarousel(carousel) {
  const viewport = carousel.querySelector(".work-viewport");
  const cards = Array.from(carousel.querySelectorAll(".work-card"));
  const previousButton = carousel.querySelector("[data-work-prev]");
  const nextButton = carousel.querySelector("[data-work-next]");

  if (!viewport || !cards.length) return;

  let activeIndex = 0;

  function goTo(index) {
    activeIndex = (index + cards.length) % cards.length;
    const card = cards[activeIndex];
    const cardRect = card.getBoundingClientRect();
    const viewportRect = viewport.getBoundingClientRect();
    const targetLeft =
      viewport.scrollLeft +
      cardRect.left -
      viewportRect.left -
      (viewportRect.width - cardRect.width) / 2;

    viewport.scrollTo({ left: Math.max(0, targetLeft), behavior: "smooth" });
    cards.forEach((item, itemIndex) => {
      item.classList.toggle("is-active", itemIndex === activeIndex);
    });
  }

  previousButton?.addEventListener("click", () => goTo(activeIndex - 1));
  nextButton?.addEventListener("click", () => goTo(activeIndex + 1));

  viewport.addEventListener("keydown", (event) => {
    if (event.key === "ArrowLeft") {
      event.preventDefault();
      goTo(activeIndex - 1);
    } else if (event.key === "ArrowRight") {
      event.preventDefault();
      goTo(activeIndex + 1);
    }
  });

  goTo(0);
}

workCarousels.forEach(initWorkCarousel);

function activateServicePanel(tab) {
  if (!tab) return;

  const target = tab.dataset.serviceTab;
  const tabGroup = tab.closest(".services");
  if (!target || !tabGroup) return;

  tabGroup.querySelectorAll("[data-service-tab]").forEach((item) => {
    const isActive = item === tab;
    item.classList.toggle("is-active", isActive);
    item.setAttribute("aria-selected", String(isActive));
  });

  tabGroup.querySelectorAll("[data-service-panel]").forEach((panel) => {
    const isActive = panel.dataset.servicePanel === target;
    panel.classList.toggle("is-active", isActive);
    panel.hidden = !isActive;
  });
}

serviceTabs.forEach((tab) => {
  tab.addEventListener("click", () => activateServicePanel(tab));
  tab.addEventListener("keydown", (event) => {
    if (event.key !== "ArrowLeft" && event.key !== "ArrowRight") return;
    const tabs = Array.from(tab.closest(".services")?.querySelectorAll("[data-service-tab]") || []);
    const currentIndex = tabs.indexOf(tab);
    if (currentIndex < 0) return;
    event.preventDefault();
    const nextIndex =
      event.key === "ArrowRight"
        ? (currentIndex + 1) % tabs.length
        : (currentIndex - 1 + tabs.length) % tabs.length;
    tabs[nextIndex]?.focus();
    activateServicePanel(tabs[nextIndex]);
  });
});

function setImageSource(image, src) {
  if (!image || !src) return;
  image.hidden = false;
  image.src = src;
}

fallbackImages.forEach((image) => {
  image.addEventListener("error", () => {
    const fallbackSrc = image.dataset.localFallback;

    if (fallbackSrc && image.src !== fallbackSrc) {
      image.removeAttribute("data-local-fallback");
      image.src = fallbackSrc;
      return;
    }

    image.hidden = true;
  });
});

workCards.forEach((card) => {
  const externalThumbnail = card.dataset.externalThumbnail;
  if (!externalThumbnail) return;

  const title = card.querySelector("h3")?.textContent?.trim() || "JSCASTA project thumbnail";
  const image = document.createElement("img");
  image.src = externalThumbnail;
  image.alt = title;
  image.loading = "lazy";
  image.setAttribute("data-fallback-image", "");

  if (card.dataset.localFallback) {
    image.dataset.localFallback = card.dataset.localFallback;
  }

  image.addEventListener("error", () => {
    const fallbackSrc = image.dataset.localFallback;
    if (fallbackSrc && image.src !== fallbackSrc) {
      image.removeAttribute("data-local-fallback");
      image.src = fallbackSrc;
      return;
    }
    image.hidden = true;
  });

  card.prepend(image);
});

function updateFeaturedBrandProject(button) {
  if (!featuredBrandProject || !button) return;

  const link = featuredBrandProject.querySelector("[data-project-link]");
  const image = featuredBrandProject.querySelector("[data-project-image]");
  const fallback = featuredBrandProject.querySelector("[data-project-fallback]");
  const brand = featuredBrandProject.querySelector("[data-project-brand]");
  const title = featuredBrandProject.querySelector("[data-project-title]");
  const type = featuredBrandProject.querySelector("[data-project-type]");
  const description = featuredBrandProject.querySelector("[data-project-description]");

  featuredBrandProject.classList.add("is-updating");

  if (link) link.href = button.dataset.link || "#";
  if (brand) brand.textContent = button.dataset.brand || "Brand Project";
  if (title) title.textContent = button.dataset.title || "Project details coming soon";
  if (type) type.textContent = button.dataset.type || "Brand Collaboration";
  if (description) description.textContent = button.dataset.description || "Replace this placeholder with verified project details.";
  if (fallback) {
    fallback.replaceChildren();
    const label = document.createElement("small");
    label.textContent = "Project Preview";
    const fallbackBrand = document.createElement("strong");
    fallbackBrand.textContent = button.dataset.brand || "Brand Project";
    const fallbackTitle = document.createElement("span");
    fallbackTitle.textContent = button.dataset.title || "Project details coming soon";
    const fallbackType = document.createElement("em");
    fallbackType.textContent = button.dataset.type || "Brand Collaboration";
    fallback.append(label, fallbackBrand, fallbackTitle, fallbackType);
  }
  if (image) {
    image.alt = `${button.dataset.title || button.dataset.brand || "Brand project"} thumbnail`;
    setImageSource(image, button.dataset.image || "");
  }

  document.querySelectorAll("[data-brand-project]").forEach((item) => {
    item.classList.toggle("is-active", item.dataset.brand === button.dataset.brand);
  });

  window.setTimeout(() => featuredBrandProject.classList.remove("is-updating"), 180);
}

brandProjectButtons.forEach((button) => {
  button.addEventListener("click", () => updateFeaturedBrandProject(button));
});

function initDragRail(rail) {
  if (!rail) return;

  const track = rail.querySelector(".brand-track");
  let isDown = false;
  let startX = 0;
  let scrollLeft = 0;
  let didDrag = false;
  let autoFrame = null;
  let isPaused = false;
  let isHovering = false;
  let isFocusedWithin = false;

  if (track && !track.dataset.cloned) {
    Array.from(track.children).forEach((child) => {
      const clone = child.cloneNode(true);
      clone.dataset.clone = "true";
      track.appendChild(clone);
    });
    track.dataset.cloned = "true";
  }

  function setPaused(paused) {
    isPaused = paused;
    rail.classList.toggle("is-paused", paused);
  }

  function autoScroll() {
    if (!isPaused && !rail.classList.contains("is-dragging") && track) {
      const loopPoint = track.scrollWidth / 2;
      if (loopPoint > rail.clientWidth) {
        rail.scrollLeft += 0.68;
        if (rail.scrollLeft >= loopPoint) rail.scrollLeft -= loopPoint;
      }
    }
    autoFrame = window.requestAnimationFrame(autoScroll);
  }

  rail.addEventListener("pointerdown", (event) => {
    if (event.pointerType === "mouse" && event.button !== 0) return;
    isDown = true;
    didDrag = false;
    startX = event.clientX;
    scrollLeft = rail.scrollLeft;
    rail.classList.add("is-dragging");
    setPaused(true);
    rail.setPointerCapture?.(event.pointerId);
  });

  rail.addEventListener("pointermove", (event) => {
    if (!isDown) return;
    const delta = event.clientX - startX;
    if (Math.abs(delta) > 4) didDrag = true;
    rail.scrollLeft = scrollLeft - delta;
  });

  function endDrag(event) {
    if (!isDown) return;
    isDown = false;
    rail.classList.remove("is-dragging");
    setPaused(isHovering || isFocusedWithin);
    if (event?.pointerId !== undefined) {
      rail.releasePointerCapture?.(event.pointerId);
    }

    if (!didDrag && event?.clientX !== undefined && event?.clientY !== undefined) {
      const clickTarget = document.elementFromPoint(event.clientX, event.clientY);
      const brandButton = clickTarget?.closest("[data-brand-project]");
      if (brandButton && rail.contains(brandButton)) updateFeaturedBrandProject(brandButton);
    }
  }

  rail.addEventListener("pointerup", endDrag);
  rail.addEventListener("pointercancel", endDrag);
  rail.addEventListener("mouseleave", endDrag);

  rail.addEventListener("click", (event) => {
    if (didDrag) {
      event.preventDefault();
      event.stopPropagation();
      return;
    }

    const brandButton = event.target.closest("[data-brand-project]");
    if (brandButton) {
      event.preventDefault();
      updateFeaturedBrandProject(brandButton);
    }
  });

  rail.addEventListener("mouseenter", () => {
    isHovering = true;
    setPaused(true);
  });
  rail.addEventListener("mouseleave", () => {
    isHovering = false;
    if (!isDown) setPaused(isFocusedWithin);
  });
  rail.addEventListener("focusin", () => {
    isFocusedWithin = true;
    setPaused(true);
  });
  rail.addEventListener("focusout", (event) => {
    if (event.relatedTarget && rail.contains(event.relatedTarget)) return;
    isFocusedWithin = false;
    setPaused(isHovering);
  });

  if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    autoFrame = window.requestAnimationFrame(autoScroll);
  }
}

dragRails.forEach(initDragRail);

function initCustomCursor() {
  const canUseCursor =
    customCursor &&
    window.matchMedia("(pointer: fine)").matches &&
    !window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (!canUseCursor) return;

  document.documentElement.classList.add("custom-cursor-enabled");
  document.body.classList.add("cursor-enabled");

  window.addEventListener(
    "pointermove",
    (event) => {
      customCursor.style.left = `${event.clientX}px`;
      customCursor.style.top = `${event.clientY}px`;
      document.body.classList.add("cursor-ready");

      const target = document.elementFromPoint(event.clientX, event.clientY);
      const isLight = Boolean(target?.closest(".section-light"));
      const isInteractive = Boolean(
        target?.closest(
          'a, button, input, select, textarea, .testimonial-card, [data-video-button]'
            + ', .service-gateway, .work-card, .work-control, .brand-rail, .carousel-arrow, .carousel-dot, .resource-card'
        )
      );

      document.body.classList.toggle("cursor-on-light", isLight);
      document.body.classList.toggle("cursor-interactive", isInteractive);
    },
    { passive: true }
  );

  window.addEventListener("pointerleave", () => {
    document.body.classList.remove("cursor-ready", "cursor-interactive");
  });
}

initCustomCursor();

if (form && formNote) {
  form.addEventListener("submit", (event) => {
    event.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      formNote.textContent =
        form.dataset.errorMessage ||
        "Please complete the required fields before sending your inquiry.";
      formNote.classList.add("is-error");
      return;
    }

    const formData = new FormData(form);
    const recipient = form.dataset.recipient || "booking@jscasta.com";
    const subject = form.dataset.subject || "JSCASTA event inquiry";
    const body = Array.from(formData.entries())
      .filter(([, value]) => String(value).trim())
      .map(([key, value]) => `${key.replace(/-/g, " ")}: ${value}`)
      .join("\n");

    formNote.classList.remove("is-error");
    formNote.textContent =
      form.dataset.successMessage ||
      "Your email app should now open with the inquiry details.";

    window.location.href = `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
  });
}

if (tutorialForm && tutorialNote) {
  tutorialForm.addEventListener("submit", (event) => {
    event.preventDefault();
    tutorialNote.textContent =
      tutorialForm.dataset.successMessage ||
      "Thanks. Connect this form to the tutorial lead magnet and email platform before launch.";
  });
}
