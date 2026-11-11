// JavaScript Document
document.addEventListener('DOMContentLoaded', function () {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const saveData = Boolean(navigator.connection && navigator.connection.saveData);

  document.querySelectorAll('.c-page-hero__video').forEach(function (video, index) {
    const hero = video.closest('.c-page-hero--video');
    if (!hero) return;

    if (!video.id) video.id = 'hero-video-' + (index + 1);
    video.setAttribute('aria-hidden', 'true');

    const toggle = document.createElement('button');
    toggle.type = 'button';
    toggle.className = 'c-media-toggle';
    toggle.setAttribute('aria-controls', video.id);
    hero.appendChild(toggle);

    function updateToggle() {
      const isPlaying = !video.paused && !video.ended;
      toggle.textContent = isPlaying ? '停止 / Pause' : '再生 / Play';
      toggle.setAttribute(
        'aria-label',
        isPlaying
          ? '背景動画を停止 / Pause background video'
          : '背景動画を再生 / Play background video'
      );
    }

    toggle.addEventListener('click', function () {
      if (video.paused || video.ended) {
        const playPromise = video.play();
        if (playPromise && typeof playPromise.catch === 'function') {
          playPromise.catch(updateToggle);
        }
      } else {
        video.pause();
      }
    });

    video.addEventListener('play', updateToggle);
    video.addEventListener('pause', updateToggle);
    video.addEventListener('ended', updateToggle);

    if (reduceMotion || saveData) {
      video.pause();
    } else {
      const playPromise = video.play();
      if (playPromise && typeof playPromise.catch === 'function') {
        playPromise.catch(updateToggle);
      }
    }
    updateToggle();
  });

  const hamburger = document.querySelector('.l-header__hamburger');
  const drawer = document.getElementById('drawer');
  const overlay = document.getElementById('drawerOverlay');
  let lastFocusedElement = null;

  if (!hamburger || !drawer || !overlay) return;

  function getFocusableElements() {
    return Array.from(drawer.querySelectorAll('a[href], button:not([disabled])'));
  }

  function setDrawer(open, returnFocus) {
    const isOpen = Boolean(open);
    if (isOpen) lastFocusedElement = document.activeElement;

    hamburger.classList.toggle('is-open', isOpen);
    drawer.classList.toggle('is-open', isOpen);
    overlay.classList.toggle('is-open', isOpen);
    hamburger.setAttribute('aria-expanded', String(isOpen));
    hamburger.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
    drawer.setAttribute('aria-hidden', String(!isOpen));
    overlay.setAttribute('aria-hidden', String(!isOpen));
    drawer.toggleAttribute('inert', !isOpen);
    document.documentElement.classList.toggle('is-drawer-open', isOpen);

    if (isOpen) {
      window.requestAnimationFrame(function () {
        const firstFocusable = getFocusableElements()[0];
        if (firstFocusable) firstFocusable.focus();
      });
    } else if (returnFocus && lastFocusedElement instanceof HTMLElement) {
      lastFocusedElement.focus();
    }
  }

  hamburger.addEventListener('click', function () {
    setDrawer(hamburger.getAttribute('aria-expanded') !== 'true', true);
  });
  overlay.addEventListener('click', function () {
    setDrawer(false, true);
  });

  const drawerLinks = document.querySelectorAll('.l-drawer__nav-link, .l-drawer__cta');
  drawerLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      if (drawer.classList.contains('is-open')) {
        setDrawer(false, false);
      }
    });
  });

  document.addEventListener('keydown', function (event) {
    if (!drawer.classList.contains('is-open')) return;

    if (event.key === 'Escape') {
      event.preventDefault();
      setDrawer(false, true);
      return;
    }

    if (event.key !== 'Tab') return;
    const focusable = getFocusableElements();
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
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 768 && drawer.classList.contains('is-open')) {
      setDrawer(false, false);
    }
  });

});
