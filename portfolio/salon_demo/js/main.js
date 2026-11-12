(() => {
  'use strict';
  const root = document.documentElement;
  const motion = window.matchMedia('(prefers-reduced-motion: reduce)');
  const reveals = [...document.querySelectorAll('.reveal')];
  let observer;
  const setMotion = () => {
    if (observer) observer.disconnect();
    root.classList.toggle('motion-ready', !motion.matches);
    if (motion.matches || !('IntersectionObserver' in window)) {
      reveals.forEach(el => el.classList.add('is-visible'));
      return;
    }
    observer = new IntersectionObserver(entries => entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      observer.unobserve(entry.target);
    }), { threshold: 0.08 });
    reveals.filter(el => !el.classList.contains('is-visible')).forEach(el => observer.observe(el));
  };
  root.classList.add('js');
  setMotion();
  motion.addEventListener('change', setMotion);
  const toggle = document.querySelector('.nav-toggle');
  const menu = document.querySelector('.mobile-nav');
  const desktop = window.matchMedia('(min-width: 761px)');
  const closeMenu = (restoreFocus = false) => {
    menu.hidden = true;
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'メニューを開く');
    if (restoreFocus) toggle.focus();
  };
  toggle.addEventListener('click', () => {
    if (!menu.hidden) return closeMenu();
    menu.hidden = false;
    toggle.setAttribute('aria-expanded', 'true');
    toggle.setAttribute('aria-label', 'メニューを閉じる');
  });
  menu.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    closeMenu();
    const target = document.querySelector(link.hash);
    if (target) {
      target.setAttribute('tabindex', '-1');
      target.focus({ preventScroll: true });
    }
  }));
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && !menu.hidden) closeMenu(true);
  });
  document.addEventListener('click', event => {
    if (!menu.hidden && !event.target.closest('.site-header')) closeMenu();
  });
  desktop.addEventListener('change', event => {
    if (event.matches) closeMenu(menu.contains(document.activeElement));
  });
  const dialog = document.querySelector('#booking-dialog');
  const choices = dialog.querySelector('.booking-choices');
  const result = dialog.querySelector('.booking-result');
  let bookingTrigger;
  const options = {
    cut: ['カット', '施術の目安：約60分 / ¥5,500'],
    color: ['カット＋ケアカラー', '施術の目安：約120分 / ¥11,000〜'],
    perm: ['カット＋ナチュラルパーマ', '施術の目安：約150分 / ¥13,200〜'],
    consult: ['相談してから決める', '初回はカウンセリングに15分ほど余裕をいただく想定です。施術内容・料金・時間は相談してから確認します。']
  };
  const resetBooking = () => { choices.hidden = false; result.hidden = true; };
  const selectBooking = key => {
    const option = options[key];
    result.querySelector('h3').textContent = option[0];
    result.querySelector('.result-time').textContent = option[1];
    choices.hidden = true;
    result.hidden = false;
    result.focus();
  };
  document.querySelectorAll('[data-book]').forEach(link => link.addEventListener('click', event => {
    if (typeof dialog.showModal !== 'function') return;
    event.preventDefault();
    bookingTrigger = link;
    resetBooking();
    closeMenu();
    dialog.showModal();
    if (link.dataset.book === 'consult') selectBooking('consult');
  }));
  dialog.querySelector('.dialog-close').addEventListener('click', () => dialog.close());
  dialog.querySelectorAll('[data-choice]').forEach(button => button.addEventListener('click', () => selectBooking(button.dataset.choice)));
  dialog.querySelector('.choose-again').addEventListener('click', () => {
    resetBooking();
    choices.querySelector('button').focus();
  });
  dialog.addEventListener('close', () => { if (bookingTrigger) bookingTrigger.focus(); });

})();
