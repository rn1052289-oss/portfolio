/* ================================================
   food.js — FOODページ専用JavaScript
   モーダル開閉 + モーダル内スライダー
   ================================================ */

document.addEventListener("DOMContentLoaded", function () {

  /* ================================
     1. モーダルの開閉
     ================================ */
  const modalBtns = document.querySelectorAll(".food-modal-btn");
  if (modalBtns.length === 0) return;

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

  modalBtns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      const card    = this.closest(".food-card");
      if (!card) return;
      const modalId = card.getAttribute("data-modal");
      if (!modalId) return;
      const overlay = document.getElementById(modalId);
      if (!overlay) return;
      openModal(overlay);
    });
  });

  document.querySelectorAll(".food-modal-close").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const overlay = this.closest(".food-modal-overlay");
      if (overlay) closeModal(overlay);
    });
  });

  document.querySelectorAll(".food-modal-overlay").forEach(function (overlay) {
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
    const closeBtn = overlay.querySelector(".food-modal-close");
    if (closeBtn) {
      setTimeout(function () { closeBtn.focus(); }, 100);
    }
  }

  function closeModal(overlay) {
    overlay.classList.remove("is-active");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
    currentOverlay = null;
    resetSlider(overlay);
    setBackgroundInert(overlay, false);

    if (modalTrigger instanceof HTMLElement && modalTrigger.isConnected) {
      modalTrigger.focus();
    }
    modalTrigger = null;
  }


  /* ================================
     2. モーダル内スライダー
     ================================ */
  document.querySelectorAll(".food-modal-prev").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const slider = this.closest(".food-modal-slider");
      if (slider) changeSlide(slider, -1);
    });
  });

  document.querySelectorAll(".food-modal-next").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const slider = this.closest(".food-modal-slider");
      if (slider) changeSlide(slider, 1);
    });
  });

  document.querySelectorAll(".food-modal-dot").forEach(function (dot) {
    dot.addEventListener("click", function () {
      const slider = this.closest(".food-modal-slider");
      if (!slider) return;
      const index = parseInt(this.getAttribute("data-index"), 10);
      goToSlide(slider, index);
    });
  });

  function changeSlide(slider, direction) {
    const slides = slider.querySelectorAll(".food-modal-slide");
    const dots   = slider.querySelectorAll(".food-modal-dot");
    let currentIndex = 0;

    slides.forEach(function (slide, i) {
      if (slide.classList.contains("is-active")) currentIndex = i;
    });

    const nextIndex = (currentIndex + direction + slides.length) % slides.length;
    slides[currentIndex].classList.remove("is-active");
    dots[currentIndex].classList.remove("is-active");
    slides[nextIndex].classList.add("is-active");
    dots[nextIndex].classList.add("is-active");
    syncSliderState(slider, nextIndex);
  }

  function goToSlide(slider, index) {
    const slides = slider.querySelectorAll(".food-modal-slide");
    const dots   = slider.querySelectorAll(".food-modal-dot");
    slides.forEach(function (s) { s.classList.remove("is-active"); });
    dots.forEach(function (d)   { d.classList.remove("is-active"); });
    slides[index].classList.add("is-active");
    dots[index].classList.add("is-active");
    syncSliderState(slider, index);
  }

  function syncSliderState(slider, currentIndex) {
    const slides = slider.querySelectorAll(".food-modal-slide");
    const dots   = slider.querySelectorAll(".food-modal-dot");
    slides.forEach(function (slide, index) {
      slide.setAttribute("aria-hidden", String(index !== currentIndex));
    });
    dots.forEach(function (dot, index) {
      if (index === currentIndex) {
        dot.setAttribute("aria-current", "true");
      } else {
        dot.removeAttribute("aria-current");
      }
    });
  }

  function resetSlider(overlay) {
    const slider = overlay.querySelector(".food-modal-slider");
    if (slider) goToSlide(slider, 0);
  }

  document.querySelectorAll(".food-modal-slider").forEach(function (slider) {
    syncSliderState(slider, 0);
  });

});
