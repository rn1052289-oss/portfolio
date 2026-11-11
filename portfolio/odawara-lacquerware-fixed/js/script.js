/* ============================================================
   script.js — Direction B: Wabi Interface
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {
	/* ヒーローはページ全体を隠さず、画像だけを短く整える */
	var heroSection = document.querySelector('.hero');
	if (heroSection) requestAnimationFrame(function () { heroSection.classList.add('hero-loaded'); });

	/* --- ヘッダースクロール --- */
	var header = document.querySelector('header');
	function onScroll() {
		header.classList.toggle('scrolled', window.scrollY > 20);
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	/* --- スクロール進捗バー --- */
	var progressBar = document.createElement('div');
	progressBar.id = 'scroll-progress';
	progressBar.style.cssText = [
		'position:fixed', 'top:0', 'left:0', 'height:2px',
		'width:0%', 'background:var(--color-accent)',
		'z-index:2000', 'transition:width .1s linear',
		'opacity:.7', 'pointer-events:none'
	].join(';');
	document.body.appendChild(progressBar);
	window.addEventListener('scroll', function () {
		var scrolled = window.scrollY;
		var total    = document.documentElement.scrollHeight - window.innerHeight;
		progressBar.style.width = (total > 0 ? (scrolled / total * 100) : 0) + '%';
	}, { passive: true });

	/* --- ハンバーガーメニュー --- */
	var hamburger  = document.querySelector('.hamburger');
	var mobileMenu = document.querySelector('.mobile-menu');
	var mobileClose = document.querySelector('.mobile-menu-close');
	var menuWasOpenedBy = null;

	if (mobileMenu) {
		if (!mobileMenu.id) mobileMenu.id = 'mobile-menu';
		if (!mobileMenu.hasAttribute('role')) mobileMenu.setAttribute('role', 'dialog');
		mobileMenu.setAttribute('aria-modal', 'true');
		if (!mobileMenu.hasAttribute('aria-label')) mobileMenu.setAttribute('aria-label', 'サイト内ナビゲーション');
		mobileMenu.setAttribute('aria-hidden', 'true');
		mobileMenu.inert = true;
	}
	if (hamburger) {
		hamburger.type = 'button';
		hamburger.setAttribute('aria-controls', mobileMenu ? mobileMenu.id : 'mobile-menu');
		hamburger.setAttribute('aria-expanded', 'false');
	}
	if (mobileClose) mobileClose.type = 'button';

	/* 現在地を音声読み上げと視覚の両方で示す */
	var currentFile = window.location.pathname.split('/').pop() || 'index.html';
	document.querySelectorAll('header nav a[href], .mobile-menu a[href]').forEach(function (link) {
		var targetFile = link.getAttribute('href').split('#')[0].split('?')[0];
		if (targetFile === currentFile) {
			link.setAttribute('aria-current', 'page');
			link.classList.add('current');
		}
	});

	function openMenu() {
		if (!mobileMenu || !hamburger) return;
		menuWasOpenedBy = document.activeElement;
		mobileMenu.classList.add('open');
		hamburger.classList.add('open');    /* ハンバーガー → × に変形 */
		mobileMenu.inert = false;
		mobileMenu.setAttribute('aria-hidden', 'false');
		hamburger.setAttribute('aria-expanded', 'true');
		hamburger.setAttribute('aria-label', 'メニューを閉じる');
		document.body.style.overflow = 'hidden';
		if (mobileClose) mobileClose.focus();
	}
	function closeMenu(restoreFocus) {
		if (!mobileMenu || !hamburger) return;
		mobileMenu.classList.remove('open');
		hamburger.classList.remove('open'); /* × → ハンバーガーに戻す */
		mobileMenu.setAttribute('aria-hidden', 'true');
		mobileMenu.inert = true;
		hamburger.setAttribute('aria-expanded', 'false');
		hamburger.setAttribute('aria-label', 'メニューを開く');
		document.body.style.overflow = '';
		if (restoreFocus !== false && menuWasOpenedBy && typeof menuWasOpenedBy.focus === 'function') {
			menuWasOpenedBy.focus();
		}
	}
	if (hamburger) {
		hamburger.addEventListener('click', function () {
			if (mobileMenu && mobileMenu.classList.contains('open')) closeMenu();
			else openMenu();
		});
	}
	if (mobileClose) mobileClose.addEventListener('click', function () { closeMenu(); });

	/* メニュー外クリックで閉じる */
	if (mobileMenu) {
		mobileMenu.addEventListener('click', function (e) {
			if (e.target === mobileMenu) closeMenu();
		});
		mobileMenu.addEventListener('keydown', function (e) {
			if (e.key !== 'Tab') return;
			var focusable = Array.prototype.slice.call(mobileMenu.querySelectorAll('a[href], button:not([disabled])'));
			if (!focusable.length) return;
			var first = focusable[0];
			var last = focusable[focusable.length - 1];
			if (e.shiftKey && document.activeElement === first) {
				e.preventDefault();
				last.focus();
			} else if (!e.shiftKey && document.activeElement === last) {
				e.preventDefault();
				first.focus();
			}
		});
	}

	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('open')) closeMenu();
	});

	/* メニュー内リンクをタップで閉じる */
	if (mobileMenu) {
		mobileMenu.querySelectorAll('a').forEach(function (a) {
			a.addEventListener('click', function () { closeMenu(false); });
		});
	}

	/* --- コレクションのカテゴリーフィルター --- */
	var filterButtons = Array.prototype.slice.call(document.querySelectorAll('.filter-btn[data-filter]'));
	var productCards = Array.prototype.slice.call(document.querySelectorAll('.product-grid[data-filter-grid] .product-card'));
	var filterStatus = document.querySelector('.filter-status');
	filterButtons.forEach(function (button) {
		button.type = 'button';
		button.setAttribute('aria-pressed', button.classList.contains('active') ? 'true' : 'false');
		button.addEventListener('click', function () {
			var filter = button.getAttribute('data-filter');
			var visibleCount = 0;
			filterButtons.forEach(function (candidate) {
				var selected = candidate === button;
				candidate.classList.toggle('active', selected);
				candidate.setAttribute('aria-pressed', selected ? 'true' : 'false');
			});
			productCards.forEach(function (card) {
				var visible = filter === 'all' || card.getAttribute('data-category') === filter;
				card.hidden = !visible;
				if (visible) visibleCount += 1;
			});
			if (filterStatus) filterStatus.textContent = visibleCount + '件の器を表示しています';
		});
	});

	/* --- 商品画像ギャラリー --- */
	var mainProductImage = document.querySelector('.pd-main-img');
	var thumbButtons = Array.prototype.slice.call(document.querySelectorAll('.pd-thumb[data-full]'));
	thumbButtons.forEach(function (button) {
		button.addEventListener('click', function () {
			if (!mainProductImage) return;
			var thumbImage = button.querySelector('img');
			mainProductImage.src = button.getAttribute('data-full');
			if (thumbImage) mainProductImage.alt = thumbImage.alt;
			thumbButtons.forEach(function (candidate) {
				var selected = candidate === button;
				candidate.classList.toggle('active', selected);
				candidate.setAttribute('aria-pressed', selected ? 'true' : 'false');
			});
		});
	});

	/* --- 数量セレクター（1〜10） --- */
	var quantityValue = document.querySelector('.qty-value');
	var quantityButtons = Array.prototype.slice.call(document.querySelectorAll('.qty-btn[data-delta]'));
	function updateQuantity(next) {
		if (!quantityValue) return;
		var value = Math.min(10, Math.max(1, next));
		quantityValue.textContent = String(value);
		quantityButtons.forEach(function (button) {
			var delta = Number(button.getAttribute('data-delta'));
			button.disabled = (value === 1 && delta < 0) || (value === 10 && delta > 0);
		});
	}
	quantityButtons.forEach(function (button) {
		button.addEventListener('click', function () {
			if (!quantityValue) return;
			updateQuantity(Number(quantityValue.textContent) + Number(button.getAttribute('data-delta')));
		});
	});
	if (quantityValue) updateQuantity(Number(quantityValue.textContent));

});
