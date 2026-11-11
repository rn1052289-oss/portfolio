document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.nav-toggle');
  const menu = document.querySelector('.mobile-nav');
  const desktopQuery = window.matchMedia('(min-width: 769px)');
  let lastFocused = null;

  if (toggle && menu) {
    const getFocusable = () => Array.from(menu.querySelectorAll('a[href], button:not([disabled])'));

    const closeMenu = ({ restoreFocus = true } = {}) => {
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label', 'メニューを開く');
      menu.classList.remove('is-open');
      menu.setAttribute('aria-hidden', 'true');
      menu.setAttribute('inert', '');
      document.body.classList.remove('menu-open');

      if (restoreFocus && lastFocused instanceof HTMLElement) {
        lastFocused.focus();
      }
    };

    const openMenu = () => {
      lastFocused = document.activeElement;
      toggle.setAttribute('aria-expanded', 'true');
      toggle.setAttribute('aria-label', 'メニューを閉じる');
      menu.classList.add('is-open');
      menu.setAttribute('aria-hidden', 'false');
      menu.removeAttribute('inert');
      document.body.classList.add('menu-open');

      const focusable = getFocusable();
      if (focusable.length > 0) {
        window.requestAnimationFrame(() => focusable[0].focus());
      }
    };

    toggle.addEventListener('click', () => {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';
      if (isOpen) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    menu.querySelectorAll('a[href]').forEach((link) => {
      link.addEventListener('click', () => {
        closeMenu({ restoreFocus: false });
        const target = link.hash ? document.querySelector(link.hash) : null;
        if (target) {
          target.setAttribute('tabindex', '-1');
          window.requestAnimationFrame(() => target.focus({ preventScroll: true }));
        }
      });
    });

    document.addEventListener('keydown', (event) => {
      if (toggle.getAttribute('aria-expanded') !== 'true') return;

      if (event.key === 'Escape') {
        event.preventDefault();
        closeMenu();
        return;
      }

      if (event.key !== 'Tab') return;

      const focusable = getFocusable();
      if (focusable.length === 0) return;

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

    const handleDesktopChange = (event) => {
      if (event.matches && toggle.getAttribute('aria-expanded') === 'true') {
        closeMenu();
      }
    };

    if (typeof desktopQuery.addEventListener === 'function') {
      desktopQuery.addEventListener('change', handleDesktopChange);
    } else {
      desktopQuery.addListener(handleDesktopChange);
    }
  }

  const reveals = document.querySelectorAll('.reveal');
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (reduceMotion || !('IntersectionObserver' in window)) {
    reveals.forEach((element) => element.classList.add('is-visible'));
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.12,
      rootMargin: '0px 0px -48px 0px'
    }
  );

  reveals.forEach((element) => observer.observe(element));
});
