(() => {
  'use strict';

  const root = document.documentElement;
  root.classList.add('js');

  const motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');

  /* ------------------------------------------------------------
     Reveal on scroll (skipped entirely when reduced motion is on)
     ------------------------------------------------------------ */
  const reveals = Array.from(document.querySelectorAll('.reveal'));
  let observer = null;

  const showAll = () => {
    reveals.forEach((el) => el.classList.add('is-visible'));
    if (observer) {
      observer.disconnect();
      observer = null;
    }
  };

  if (motionQuery.matches || !('IntersectionObserver' in window)) {
    showAll();
  } else {
    observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
    reveals.forEach((el) => observer.observe(el));
  }

  const onMotionChange = (event) => {
    if (event.matches) showAll();
  };
  if (typeof motionQuery.addEventListener === 'function') motionQuery.addEventListener('change', onMotionChange);
  else motionQuery.addListener(onMotionChange);

  /* ------------------------------------------------------------
     Mobile menu: focus trap, Esc to close, inert background,
     focus returns to the button that opened it
     ------------------------------------------------------------ */
  const menuButton = document.querySelector('.menu-button');
  const menu = document.getElementById('mobileMenu');
  const closeButton = menu ? menu.querySelector('.mobile-menu__close') : null;
  const background = [document.getElementById('siteHeader'), document.getElementById('main'), document.querySelector('.site-footer')].filter(Boolean);
  const desktopQuery = window.matchMedia('(min-width: 900px)');
  let returnFocus = null;

  const isOpen = () => menuButton && menuButton.getAttribute('aria-expanded') === 'true';
  const focusables = () => Array.from(menu.querySelectorAll('a[href], button:not([disabled])'));

  const setMenu = (open, restoreFocus = true) => {
    if (!menu || !menuButton) return;
    if (open) returnFocus = document.activeElement;

    menuButton.setAttribute('aria-expanded', String(open));
    menu.classList.toggle('is-open', open);
    menu.inert = !open;
    background.forEach((el) => { el.inert = open; });
    document.body.classList.toggle('menu-open', open);

    if (open) {
      if (closeButton) closeButton.focus();
    } else if (restoreFocus && returnFocus instanceof HTMLElement) {
      returnFocus.focus();
    }
  };

  if (menu && menuButton) {
    menu.inert = true;
    menuButton.addEventListener('click', () => setMenu(true));
    closeButton.addEventListener('click', () => setMenu(false));

    // Following an in-page link: close without pulling focus back to the button,
    // so focus and scroll land on the chosen section.
    menu.querySelectorAll('a[href^="#"]').forEach((link) => {
      link.addEventListener('click', () => setMenu(false, false));
    });

    document.addEventListener('keydown', (event) => {
      if (!isOpen()) return;
      if (event.key === 'Escape') {
        event.preventDefault();
        setMenu(false);
        return;
      }
      if (event.key !== 'Tab') return;
      const items = focusables();
      const first = items[0];
      const last = items[items.length - 1];
      if (event.shiftKey && document.activeElement === first) {
        event.preventDefault();
        last.focus();
      } else if (!event.shiftKey && document.activeElement === last) {
        event.preventDefault();
        first.focus();
      }
    });

    const onDesktop = (event) => {
      if (event.matches && isOpen()) setMenu(false, false);
    };
    if (typeof desktopQuery.addEventListener === 'function') desktopQuery.addEventListener('change', onDesktop);
    else desktopQuery.addListener(onDesktop);
  }

  // Move focus to the target section after an in-page jump (keyboard / screen reader users).
  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', () => {
      const id = link.getAttribute('href').slice(1);
      const target = id && document.getElementById(id);
      if (!target || id === 'top') return;
      if (!target.hasAttribute('tabindex')) target.setAttribute('tabindex', '-1');
      window.requestAnimationFrame(() => target.focus({ preventScroll: true }));
    });
  });

  /* ------------------------------------------------------------
     Today's opening status (shop time = Asia/Tokyo)
     ------------------------------------------------------------ */
  const HOURS = { 0: [9, 18], 1: [10, 19], 2: [10, 19], 3: null, 4: [10, 19], 5: [10, 20], 6: [9, 18] };
  const DAY = ['日', '月', '火', '水', '木', '金', '土'];
  const fmt = (h) => `${h}:00`;

  const tokyoNow = () => {
    const parts = new Intl.DateTimeFormat('en-US', {
      timeZone: 'Asia/Tokyo', weekday: 'short', hour: 'numeric', minute: 'numeric', hourCycle: 'h23'
    }).formatToParts(new Date());
    const get = (type) => parts.find((p) => p.type === type).value;
    const day = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'].indexOf(get('weekday'));
    return { day, minutes: Number(get('hour')) * 60 + Number(get('minute')) };
  };

  const nextOpen = (day) => {
    for (let i = 1; i <= 7; i += 1) {
      const d = (day + i) % 7;
      if (HOURS[d]) return { d, label: i === 1 ? '明日' : `${DAY[d]}曜`, open: HOURS[d][0] };
    }
    return null;
  };

  const status = document.getElementById('todayStatus');
  try {
    const { day, minutes } = tokyoNow();
    const today = HOURS[day];

    const row = document.querySelector(`.hours tr[data-day="${day}"]`);
    if (row) {
      row.classList.add('is-today');
      const badge = document.createElement('span');
      badge.className = 'hours__badge';
      badge.textContent = '今日';
      row.querySelector('th').append(badge);
    }

    let text;
    let short;
    let open = false;
    if (!today) {
      const n = nextOpen(day);
      text = `今日（${DAY[day]}）は定休日です。${n.label}は ${fmt(n.open)} から営業します。`;
      short = `本日定休 ／ ${n.label} ${fmt(n.open)} から`;
    } else if (minutes < today[0] * 60) {
      text = `今日（${DAY[day]}）は ${fmt(today[0])}–${fmt(today[1])} の営業です。`;
      short = `本日 ${fmt(today[0])}–${fmt(today[1])}`;
    } else if (minutes < today[1] * 60) {
      text = `営業中。今日（${DAY[day]}）は ${fmt(today[1])} まで（L.O. ${today[1] - 1}:30）。`;
      short = `営業中 ／ ${fmt(today[1])} まで`;
      open = true;
    } else {
      const n = nextOpen(day);
      text = `今日の営業は終了しました。${n.label}は ${fmt(n.open)} から営業します。`;
      short = `本日の営業は終了 ／ ${n.label} ${fmt(n.open)} から`;
    }
    if (status) {
      status.textContent = text;
      status.classList.toggle('status-open', open);
    }
    document.querySelectorAll('[data-today-short]').forEach((el) => {
      el.textContent = short;
      el.classList.toggle('status-open', open);
    });
  } catch (error) {
    // Intl with time zones is unavailable: the static hours stay as written.
  }

  const year = document.getElementById('footerYear');
  if (year) year.textContent = String(new Date().getFullYear());
})();
