/* ================================================
   craft.js — CRAFTページ専用JavaScript
   モーダル開閉（陶芸・組紐・藍染め）

   【制御方式】
   CSSで visibility + pointer-events + opacity を制御する。
   hidden属性は使わない（hidden だと display:none になり
   フェードアニメーションが効かないため）。
   ================================================ */

document.addEventListener("DOMContentLoaded", function () {

  const cardBtns = document.querySelectorAll(".craft-card-btn");
  if (cardBtns.length === 0) return;

  let lastFocusedEl = null;

  /* --- DETAIL → ボタンのクリック → 対応モーダルを開く --- */
  cardBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const card    = this.closest(".craft-card");
      if (!card) return;
      const modalId = card.getAttribute("data-modal");
      if (!modalId) return;
      const modal   = document.getElementById(modalId);
      if (!modal) return;

      lastFocusedEl = this;
      openModal(modal);
    });
  });

  /* --- ✕ボタンで閉じる --- */
  document.querySelectorAll(".craft-modal-close").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const modal = this.closest(".craft-modal-overlay");
      if (modal) closeModal(modal);
    });
  });

  /* --- オーバーレイ背景クリックで閉じる --- */
  document.querySelectorAll(".craft-modal-overlay").forEach(function (overlay) {
    overlay.addEventListener("click", function (e) {
      if (e.target === overlay) closeModal(overlay);
    });
  });

  /* --- ESCキー + フォーカストラップ --- */
  document.addEventListener("keydown", function (e) {

    if (e.key === "Escape") {
      const openModal = document.querySelector(".craft-modal-overlay.is-open");
      if (openModal) closeModal(openModal);
      return;
    }

    if (e.key !== "Tab") return;
    const openModal = document.querySelector(".craft-modal-overlay.is-open");
    if (!openModal) return;

    const focusable = openModal.querySelectorAll(
      'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    if (focusable.length === 0) return;

    const first = focusable[0];
    const last  = focusable[focusable.length - 1];

    if (e.shiftKey && document.activeElement === first) {
      e.preventDefault();
      last.focus();
    } else if (!e.shiftKey && document.activeElement === last) {
      e.preventDefault();
      first.focus();
    }
  });


  /* ================================
     openModal
     ================================ */
  function openModal(modal) {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";

    /* 閉じるボタンにフォーカスを移す */
    const closeBtn = modal.querySelector(".craft-modal-close");
    if (closeBtn) {
      setTimeout(function () { closeBtn.focus(); }, 50);
    }
  }


  /* ================================
     closeModal
     ================================ */
  function closeModal(modal) {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";

    /* フォーカスを元のボタンに戻す */
    if (lastFocusedEl) {
      lastFocusedEl.focus();
      lastFocusedEl = null;
    }
  }

});
