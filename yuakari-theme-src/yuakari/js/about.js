/* ================================================
   about.js — ABOUTページ専用JavaScript
   FEATURESモーダル + PHILOSOPHYスライダー
   ================================================ */

document.addEventListener("DOMContentLoaded", function () {

  /* ================================
     FEATURESモーダル
     ================================ */
  const detailBtns = document.querySelectorAll(".feature-card-btn");
  let currentOverlay = null;
  let modalTrigger = null;
  let inertedElements = [];

  const focusableSelector = [
    "a[href]",
    "button:not([disabled])",
    "input:not([disabled]):not([type='hidden'])",
    "select:not([disabled])",
    "textarea:not([disabled])",
    "[tabindex]:not([tabindex='-1'])"
  ].join(",");

  detailBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const card = this.closest(".feature-card");
      if (!card) return;
      const modalId = card.getAttribute("data-modal");
      if (!modalId) return;
      const overlay = document.getElementById(modalId);
      if (!overlay) return;
      openModal(overlay);
    });
  });

  document.querySelectorAll(".feature-modal-close").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const overlay = this.closest(".feature-modal-overlay");
      if (overlay) closeModal(overlay);
    });
  });

  document.querySelectorAll(".feature-modal-overlay").forEach(function (overlay) {
    overlay.addEventListener("click", function (e) {
      if (e.target === this) closeModal(this);
    });
  });

  document.addEventListener("keydown", function (e) {
    if (!currentOverlay) return;

    if (e.key === "Escape") {
      e.preventDefault();
      closeModal(currentOverlay);
      return;
    }

    if (e.key !== "Tab") return;

    const focusable = getFocusableElements(currentOverlay);
    if (focusable.length === 0) {
      e.preventDefault();
      return;
    }

    const first = focusable[0];
    const last  = focusable[focusable.length - 1];

    if (e.shiftKey && document.activeElement === first) {
      e.preventDefault();
      last.focus();
    } else if (!e.shiftKey && document.activeElement === last) {
      e.preventDefault();
      first.focus();
    } else if (!currentOverlay.contains(document.activeElement)) {
      e.preventDefault();
      first.focus();
    }
  });

  function getFocusableElements(overlay) {
    return Array.from(overlay.querySelectorAll(focusableSelector)).filter(function (element) {
      return element.getClientRects().length > 0 && element.getAttribute("aria-hidden") !== "true";
    });
  }

  function setBackgroundInert(overlay, shouldInert) {
    if (shouldInert) {
      inertedElements = Array.from(document.body.children).filter(function (element) {
        return element !== overlay && !element.contains(overlay) && !element.hasAttribute("inert");
      });
      inertedElements.forEach(function (element) { element.setAttribute("inert", ""); });
      return;
    }

    inertedElements.forEach(function (element) { element.removeAttribute("inert"); });
    inertedElements = [];
  }

  function openModal(overlay) {
    modalTrigger = document.activeElement;
    setBackgroundInert(overlay, true);
    overlay.classList.add("is-active");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
    currentOverlay = overlay;
    const closeBtn = overlay.querySelector(".feature-modal-close");
    if (closeBtn) {
      setTimeout(function () { closeBtn.focus(); }, 100);
    }
  }

  function closeModal(overlay) {
    overlay.classList.remove("is-active");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
    currentOverlay = null;
    setBackgroundInert(overlay, false);

    if (modalTrigger instanceof HTMLElement && modalTrigger.isConnected) {
      modalTrigger.focus();
    }
    modalTrigger = null;
  }


  /* ================================
     PHILOSOPHYスライダー
     ================================ */
  const philosophySlides = document.querySelectorAll(".philosophy-slide");
  const dots             = document.querySelectorAll(".philosophy-dot");
  let currentPhiloSlide  = 0;
  let autoPlayTimer      = null;
  const AUTO_INTERVAL    = 5000;
  const allowAutoPlay = !window.matchMedia("(prefers-reduced-motion: reduce)").matches &&
    !(navigator.connection && navigator.connection.saveData);
  let userPaused = !allowAutoPlay;
  let sliderToggle = null;

  if (philosophySlides.length > 0 && dots.length > 0) {

    syncSlideState();

    dots.forEach(function (dot) {
      dot.addEventListener("click", function () {
        const index = parseInt(this.getAttribute("data-index"), 10);
        goToSlide(index);
        restartAutoPlay();
      });
    });

    if (philosophySlides.length > 1) {
      sliderToggle = document.createElement("button");
      sliderToggle.type = "button";
      sliderToggle.className = "philosophy-slider-toggle";
      sliderToggle.setAttribute("aria-controls", "philosophy-slider");
      document.getElementById("philosophy-dots").insertAdjacentElement("afterend", sliderToggle);
      sliderToggle.addEventListener("click", function () {
        if (autoPlayTimer !== null) {
          userPaused = true;
          stopAutoPlay();
        } else {
          userPaused = false;
          startAutoPlay();
        }
      });
    }

    if (!userPaused) startAutoPlay();
    updateSliderToggle();
  }

  function goToSlide(index) {
    philosophySlides[currentPhiloSlide].classList.remove("is-active");
    dots[currentPhiloSlide].classList.remove("is-active");
    currentPhiloSlide = index;
    philosophySlides[currentPhiloSlide].classList.add("is-active");
    dots[currentPhiloSlide].classList.add("is-active");
    syncSlideState();
  }

  function syncSlideState() {
    philosophySlides.forEach(function (slide, index) {
      slide.setAttribute("aria-hidden", String(index !== currentPhiloSlide));
    });
    dots.forEach(function (dot, index) {
      if (index === currentPhiloSlide) {
        dot.setAttribute("aria-current", "true");
      } else {
        dot.removeAttribute("aria-current");
      }
    });
  }

  function nextSlide() {
    const next = (currentPhiloSlide + 1) % philosophySlides.length;
    goToSlide(next);
  }

  function startAutoPlay() {
    if (userPaused || document.hidden || philosophySlides.length < 2) {
      updateSliderToggle();
      return;
    }
    clearInterval(autoPlayTimer);
    autoPlayTimer = setInterval(nextSlide, AUTO_INTERVAL);
    updateSliderToggle();
  }

  function stopAutoPlay() {
    clearInterval(autoPlayTimer);
    autoPlayTimer = null;
    updateSliderToggle();
  }

  function restartAutoPlay() {
    if (userPaused) return;
    stopAutoPlay();
    startAutoPlay();
  }

  function updateSliderToggle() {
    if (!sliderToggle) return;
    const isRunning = autoPlayTimer !== null;
    sliderToggle.textContent = isRunning ? "停止 / Pause" : "再生 / Play";
    sliderToggle.setAttribute(
      "aria-label",
      isRunning
        ? "スライドの自動切替を停止 / Pause automatic slideshow"
        : "スライドの自動切替を再生 / Play automatic slideshow"
    );
  }

  document.addEventListener("visibilitychange", function () {
    if (document.hidden) {
      stopAutoPlay();
    } else if (!userPaused) {
      startAutoPlay();
    }
  });

});
