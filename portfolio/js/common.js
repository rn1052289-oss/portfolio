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
		const focusable = () => [...mn.querySelectorAll('a, button'), hb];
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
			window.requestAnimationFrame(() => {
				if (mn.classList.contains('active')) items[0]?.focus({ preventScroll: true });
			});
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

	/* Print motion (see "Print motion" in common.css). Start states are only
	   applied once .motion-ready is set, so no-JS and reduced-motion visitors
	   always get the final, registered state. */
	const printBg = document.querySelector('.print-bg');
	if (!prefersReduce && 'IntersectionObserver' in window) {
		const accentSelector = '.hero__accent, .k-red, .cta-red, main h2 span[style*="A5281F"]';
		document.querySelectorAll(accentSelector).forEach(word => {
			word.classList.add('misreg');
			word.dataset.ink = word.textContent.trim();
		});
		const pressTargets = document.querySelectorAll('main .stamp, .misreg, .reg-mark');
		if (pressTargets.length) {
			document.documentElement.classList.add('motion-ready');
			const po = new IntersectionObserver(es => {
				es.forEach(en => {
					if (!en.isIntersecting) return;
					en.target.classList.add(en.target.classList.contains('misreg') ? 'is-registered' : 'is-pressed');
					po.unobserve(en.target);
				});
			}, { threshold: .6 });
			// Wait one frame so the start state is painted before it can settle.
			requestAnimationFrame(() => requestAnimationFrame(() => pressTargets.forEach(t => po.observe(t))));
		}

		if (printBg) {
			// Plates start out of register, then follow scroll speed and settle.
			let mis = 14, lastY = window.scrollY, ticking = false;
			const step = () => {
				mis *= .9;
				if (Math.abs(mis) < .05) mis = 0;
				printBg.style.setProperty('--mis', mis.toFixed(2));
				ticking = mis !== 0;
				if (ticking) requestAnimationFrame(step);
			};
			const kick = () => { if (!ticking) { ticking = true; requestAnimationFrame(step); } };
			window.addEventListener('scroll', () => {
				const y = window.scrollY;
				mis = Math.max(-12, Math.min(12, mis + (y - lastY) * .12));
				lastY = y;
				kick();
			}, { passive: true });
			kick();
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
