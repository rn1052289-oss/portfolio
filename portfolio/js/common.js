/* common.js — Riku Portfolio (lean & accessible) */
document.addEventListener('DOMContentLoaded', () => {
	const prefersReduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* Header: scroll shadow toggle */
	const header = document.querySelector('.header');
	if (header) {
		const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 40);
		onScroll();
		window.addEventListener('scroll', onScroll, { passive: true });
	}

	/* Hamburger / mobile nav with focus trap */
	const hb = document.querySelector('.hamburger');
	const mn = document.querySelector('.mobile-nav');
	if (hb && mn) {
		const focusable = () => mn.querySelectorAll('a, button');
		let lastFocused = null;
		let previousBodyOverflow = '';
		mn.setAttribute('aria-hidden', 'true');
		mn.inert = true;

		const close = (restoreFocus = true) => {
			const wasOpen = mn.classList.contains('active');
			hb.classList.remove('active');
			mn.classList.remove('active');
			hb.setAttribute('aria-expanded', 'false');
			hb.setAttribute('aria-label', 'メニューを開く');
			mn.setAttribute('aria-hidden', 'true');
			mn.inert = true;
			document.body.style.overflow = previousBodyOverflow;
			focusable().forEach(item => { item.style.transitionDelay = ''; });
			if (wasOpen && restoreFocus && lastFocused instanceof HTMLElement) lastFocused.focus();
			lastFocused = null;
		};

		const open = () => {
			lastFocused = document.activeElement;
			previousBodyOverflow = document.body.style.overflow;
			mn.inert = false;
			mn.setAttribute('aria-hidden', 'false');
			hb.classList.add('active');
			mn.classList.add('active');
			hb.setAttribute('aria-expanded', 'true');
			hb.setAttribute('aria-label', 'メニューを閉じる');
			document.body.style.overflow = 'hidden';
			const items = focusable();
			if (items[0]) items[0].focus();
		};

		hb.addEventListener('click', () => {
			mn.classList.contains('active') ? close() : open();
		});

		mn.querySelectorAll('a').forEach(link => link.addEventListener('click', () => close(false)));

		document.addEventListener('keydown', e => {
			if (!mn.classList.contains('active')) return;
			if (e.key === 'Escape') { e.preventDefault(); close(); return; }
			if (e.key !== 'Tab') return;
			const items = Array.from(focusable());
			if (!items.length) return;
			const first = items[0], last = items[items.length - 1];
			if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
			else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
		});

		const mobileQuery = window.matchMedia('(max-width: 991px)');
		const releaseDesktopLock = event => {
			if (!event.matches && mn.classList.contains('active')) close(false);
		};
		if (typeof mobileQuery.addEventListener === 'function') {
			mobileQuery.addEventListener('change', releaseDesktopLock);
		} else {
			mobileQuery.addListener(releaseDesktopLock);
		}
		window.addEventListener('pagehide', () => close(false));
	}

	/* k-word reveal */
	const kw = document.querySelectorAll('.k-word');
	if (kw.length) {
		if (prefersReduce || !('IntersectionObserver' in window)) {
			kw.forEach(word => word.classList.add('visible'));
		} else {
			const ko = new IntersectionObserver(es => {
				es.forEach(en => {
					if (en.isIntersecting) { en.target.classList.add('visible'); ko.unobserve(en.target); }
				});
			}, { threshold: .2 });
			kw.forEach((w, i) => {
				const span = w.querySelector('span');
				if (span) span.style.transitionDelay = `${i * .07}s`;
				ko.observe(w);
			});
		}
	}

	/* Skill bar fills */
	const bars = document.querySelectorAll('.sd-card__bar-fill');
	if (bars.length) {
		if (prefersReduce || !('IntersectionObserver' in window)) {
			bars.forEach(bar => bar.classList.add('animate'));
		} else {
			const bo = new IntersectionObserver(es => {
				es.forEach(en => {
					if (en.isIntersecting) { en.target.classList.add('animate'); bo.unobserve(en.target); }
				});
			}, { threshold: .5 });
			bars.forEach(b => bo.observe(b));
		}
	}

	/* Counters */
	const ctrs = document.querySelectorAll('[data-counter]');
	if (ctrs.length) {
		const setFinalCounter = element => {
			const target = parseInt(element.dataset.counter, 10);
			const suffix = element.dataset.suffix || '';
			if (Number.isFinite(target)) element.textContent = target + suffix;
		};
		if (prefersReduce || !('IntersectionObserver' in window)) {
			ctrs.forEach(setFinalCounter);
		} else {
			const co = new IntersectionObserver(es => {
				es.forEach(en => {
					if (!en.isIntersecting) return;
					const t = parseInt(en.target.dataset.counter, 10);
					const s = en.target.dataset.suffix || '';
					let c = 0;
					const inc = t / 50;
					const tm = setInterval(() => {
						c += inc;
						if (c >= t) { en.target.textContent = t + s; clearInterval(tm); }
						else en.target.textContent = Math.floor(c) + s;
					}, 20);
					co.unobserve(en.target);
				});
			}, { threshold: .5 });
			ctrs.forEach(c => co.observe(c));
		}
	}
});
