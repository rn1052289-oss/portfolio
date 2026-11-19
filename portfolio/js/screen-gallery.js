// Screen gallery for app case studies.
// - Slider: the list scrolls with scroll-snap; the buttons move one screen at a time.
// - Modal: clicking a screen opens it large in a <dialog>, with previous/next.
// Without JavaScript the list still scrolls and each image links to its file.
(() => {
	const icon = (d) => `<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="${d}" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>`;
	const PREV = icon('M15 5l-7 7 7 7');
	const NEXT = icon('M9 5l7 7-7 7');
	const CLOSE = icon('M6 6l12 12M18 6L6 18');

	let modal = null;

	function buildModal() {
		const dialog = document.createElement('dialog');
		dialog.className = 'screen-modal';
		dialog.setAttribute('aria-label', '画面の拡大表示');
		dialog.innerHTML = `
			<div class="screen-modal__body">
				<figure class="screen-modal__figure"><img class="screen-modal__img" alt=""></figure>
				<div class="screen-modal__bar">
					<button type="button" class="screen-modal__btn" data-modal-prev aria-label="前の画面">${PREV}</button>
					<p class="screen-modal__caption" aria-live="polite"></p>
					<span class="screen-modal__count"></span>
					<button type="button" class="screen-modal__btn" data-modal-next aria-label="次の画面">${NEXT}</button>
					<button type="button" class="screen-modal__btn screen-modal__close" aria-label="閉じる">${CLOSE}</button>
				</div>
			</div>`;
		document.body.appendChild(dialog);

		const state = { gallery: null, index: 0 };
		const img = dialog.querySelector('.screen-modal__img');
		const caption = dialog.querySelector('.screen-modal__caption');
		const count = dialog.querySelector('.screen-modal__count');

		const show = (index) => {
			const items = state.gallery.items;
			state.index = (index + items.length) % items.length;
			const item = items[state.index];
			img.src = item.href;
			img.alt = item.alt;
			caption.innerHTML = item.caption;
			count.textContent = `${state.index + 1} / ${items.length}`;
		};

		dialog.querySelector('.screen-modal__close').addEventListener('click', () => dialog.close());
		dialog.querySelector('[data-modal-prev]').addEventListener('click', () => show(state.index - 1));
		dialog.querySelector('[data-modal-next]').addEventListener('click', () => show(state.index + 1));
		// A click on the backdrop lands on the dialog element itself.
		dialog.addEventListener('click', (e) => { if (e.target === dialog) dialog.close(); });
		dialog.addEventListener('keydown', (e) => {
			if (e.key === 'ArrowLeft') { e.preventDefault(); show(state.index - 1); }
			if (e.key === 'ArrowRight') { e.preventDefault(); show(state.index + 1); }
		});
		// Return to the screen that was last shown, in the slider too.
		dialog.addEventListener('close', () => {
			document.documentElement.style.overflow = '';
			if (state.gallery) state.gallery.focus(state.index);
		});

		return {
			open(gallery, index) {
				state.gallery = gallery;
				show(index);
				document.documentElement.style.overflow = 'hidden';
				dialog.showModal();
			},
		};
	}

	function initGallery(root) {
		const track = root.querySelector('.screen-gallery__track');
		const slides = [...root.querySelectorAll('.screen-gallery__slide')];
		const links = slides.map((s) => s.querySelector('.screen-gallery__link'));
		const prev = root.querySelector('[data-gallery-prev]');
		const next = root.querySelector('[data-gallery-next]');
		const counter = root.querySelector('.screen-gallery__count');
		if (!track || slides.length === 0) return;

		const gallery = {
			items: slides.map((slide, i) => ({
				href: links[i].getAttribute('href'),
				alt: links[i].querySelector('img')?.alt || '',
				caption: slide.querySelector('.screen-gallery__caption')?.innerHTML || '',
			})),
			focus(index) {
				goTo(index);
				links[index].focus({ preventScroll: true });
			},
		};

		let current = 0;
		const maxScroll = () => track.scrollWidth - track.clientWidth;
		const offsetOf = (i) => slides[i].offsetLeft - slides[0].offsetLeft;

		const update = () => {
			const x = track.scrollLeft;
			if (x >= maxScroll() - 2) {
				current = slides.length - 1;
			} else {
				let best = 0;
				slides.forEach((_, i) => { if (Math.abs(offsetOf(i) - x) < Math.abs(offsetOf(best) - x)) best = i; });
				current = best;
			}
			if (counter) counter.textContent = `${current + 1} / ${slides.length}`;
			if (prev) prev.disabled = x <= 2;
			if (next) next.disabled = x >= maxScroll() - 2;
		};

		function goTo(index) {
			const i = Math.max(0, Math.min(slides.length - 1, index));
			track.scrollTo({ left: Math.min(offsetOf(i), maxScroll()) });
		}

		prev?.addEventListener('click', () => goTo(current - 1));
		next?.addEventListener('click', () => goTo(current + 1));
		track.addEventListener('scroll', () => window.requestAnimationFrame(update), { passive: true });
		window.addEventListener('resize', update);
		track.addEventListener('keydown', (e) => {
			if (e.target !== track) return;
			if (e.key === 'ArrowLeft') { e.preventDefault(); goTo(current - 1); }
			if (e.key === 'ArrowRight') { e.preventDefault(); goTo(current + 1); }
		});

		links.forEach((link, i) => {
			link.addEventListener('click', (e) => {
				if (typeof HTMLDialogElement !== 'function') return; // fall back to opening the file
				e.preventDefault();
				modal = modal || buildModal();
				modal.open(gallery, i);
			});
		});

		root.classList.add('is-ready');
		update();
	}

	document.querySelectorAll('[data-screen-gallery]').forEach(initGallery);
})();
