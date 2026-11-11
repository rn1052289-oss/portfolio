/* ================================================
   festival.js — Festivalページ専用JavaScript
   モーダル開閉 + フォーカストラップ
   ================================================ */

document.addEventListener("DOMContentLoaded", function () {

  const detailBtns = document.querySelectorAll(".festival-card-btn");
  let lastFocusedEl = null;

  detailBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const card    = btn.closest(".festival-card");
      const modalId = card.getAttribute("data-modal");
      const modal   = document.getElementById(modalId);
      if (!modal) return;

      lastFocusedEl = btn;
      modal.removeAttribute("hidden");

      requestAnimationFrame(function () {
        requestAnimationFrame(function () {
          modal.classList.add("is-open");
        });
      });

      document.body.style.overflow = "hidden";

      const closeBtn = modal.querySelector(".festival-modal-close");
      if (closeBtn) closeBtn.focus();
    });
  });

  function closeModal(modal) {
    modal.classList.remove("is-open");
    setTimeout(function () { modal.setAttribute("hidden", ""); }, 300);
    document.body.style.overflow = "";
    if (lastFocusedEl) {
      lastFocusedEl.focus();
      lastFocusedEl = null;
    }
  }

  document.querySelectorAll(".festival-modal-close").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const modal = btn.closest(".festival-modal");
      closeModal(modal);
    });
  });

  document.querySelectorAll(".festival-modal-overlay").forEach(function (overlay) {
    overlay.addEventListener("click", function () {
      const modal = overlay.closest(".festival-modal");
      closeModal(modal);
    });
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      const openModal = document.querySelector(".festival-modal.is-open");
      if (openModal) closeModal(openModal);
    }

    /* フォーカストラップ */
    if (e.key !== "Tab") return;
    const openModal = document.querySelector(".festival-modal.is-open");
    if (!openModal) return;

    const focusableEls = openModal.querySelectorAll(
      'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    if (focusableEls.length === 0) return;

    const firstEl = focusableEls[0];
    const lastEl  = focusableEls[focusableEls.length - 1];

    if (e.shiftKey && document.activeElement === firstEl) {
      e.preventDefault();
      lastEl.focus();
    } else if (!e.shiftKey && document.activeElement === lastEl) {
      e.preventDefault();
      firstEl.focus();
    }
  });

});
