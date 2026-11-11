/* ================================================
   about.js — ABOUTページ専用JavaScript
   FEATURESモーダル + PHILOSOPHYスライダー
   ================================================ */

document.addEventListener("DOMContentLoaded", function () {

  /* ================================
     FEATURESモーダル
     ================================ */
  const detailBtns = document.querySelectorAll(".feature-card-btn");
  if (detailBtns.length === 0) return;

  let currentOverlay = null;

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
    if (e.key === "Escape" && currentOverlay) closeModal(currentOverlay);
  });

  function openModal(overlay) {
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

  if (philosophySlides.length > 0 && dots.length > 0) {

    dots.forEach(function (dot) {
      dot.addEventListener("click", function () {
        const index = parseInt(this.getAttribute("data-index"), 10);
        goToSlide(index);
        resetAutoPlay();
      });
    });

    if (allowAutoPlay) startAutoPlay();
  }

  function goToSlide(index) {
    philosophySlides[currentPhiloSlide].classList.remove("is-active");
    dots[currentPhiloSlide].classList.remove("is-active");
    currentPhiloSlide = index;
    philosophySlides[currentPhiloSlide].classList.add("is-active");
    dots[currentPhiloSlide].classList.add("is-active");
  }

  function nextSlide() {
    const next = (currentPhiloSlide + 1) % philosophySlides.length;
    goToSlide(next);
  }

  function startAutoPlay() {
    if (!allowAutoPlay || document.hidden) return;
    clearInterval(autoPlayTimer);
    autoPlayTimer = setInterval(nextSlide, AUTO_INTERVAL);
  }

  function resetAutoPlay() {
    clearInterval(autoPlayTimer);
    if (allowAutoPlay) startAutoPlay();
  }

  document.addEventListener("visibilitychange", function () {
    if (document.hidden) {
      clearInterval(autoPlayTimer);
    } else {
      startAutoPlay();
    }
  });

});
