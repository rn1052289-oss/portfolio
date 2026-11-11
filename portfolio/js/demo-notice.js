(function () {
	'use strict';

	function initDemoNotice() {
		if (!document.body) return;

		if (!document.getElementById('demo-notice-style')) {
			const style = document.createElement('style');
			style.id = 'demo-notice-style';
			style.textContent = [
				'.demo-notice{position:relative;z-index:100000;padding:.75rem 1rem;background:#2D2926;color:#fff;text-align:center;font:500 .82rem/1.7 system-ui,-apple-system,"Noto Sans JP",sans-serif;letter-spacing:.02em}',
				'.demo-notice strong{color:#FFD166}',
				'[data-demo-disabled]{cursor:not-allowed!important;opacity:.55!important;text-decoration:none!important}'
			].join('');
			document.head.appendChild(style);
		}

		let notice = document.getElementById('demo-notice');
		if (!notice) {
			notice = document.createElement('aside');
			notice.id = 'demo-notice';
			notice.className = 'demo-notice';
			notice.setAttribute('aria-label', 'デモサイトについて');
			const strong = document.createElement('strong');
			strong.textContent = '自主制作の架空デモです。';
			notice.appendChild(strong);
			notice.appendChild(document.createTextNode(' 実在する店舗・団体ではありません。予約・購入・送信・SNS等の外部連携は動作しません。'));
			document.body.insertBefore(notice, document.body.firstChild);
		} else {
			notice.classList.add('demo-notice');
			notice.setAttribute('aria-label', 'デモサイトについて');
		}

		const placeholderLinks = document.querySelectorAll([
			'a[href="#"]',
			'a[href^="mailto:"]',
			'a[href^="tel:"]',
			'a[href*="instagram.com/odawara_lacquerware"]'
		].join(','));

		placeholderLinks.forEach(function (link) {
			const label = (link.getAttribute('aria-label') || link.textContent || 'リンク').trim();
			link.removeAttribute('href');
			link.dataset.demoDisabled = 'true';
			link.setAttribute('aria-disabled', 'true');
			link.setAttribute('tabindex', '-1');
			link.setAttribute('title', '自主制作デモのため未実装です');
			link.setAttribute('aria-label', label + '（自主制作デモのため未実装）');
		});

		document.querySelectorAll('.add-to-cart, .buy-now, [data-demo-action]').forEach(function (button) {
			if (button.tagName === 'A') {
				button.removeAttribute('href');
				button.setAttribute('aria-disabled', 'true');
				button.setAttribute('tabindex', '-1');
				button.addEventListener('click', function (event) {
					event.preventDefault();
				});
			} else {
				button.disabled = true;
			}
			button.dataset.demoDisabled = 'true';
			button.setAttribute('aria-describedby', 'demo-notice');
			button.setAttribute('title', '自主制作デモのため未実装です');
		});

		document.querySelectorAll('form').forEach(function (form) {
			form.removeAttribute('action');
			form.removeAttribute('onsubmit');
			form.setAttribute('aria-describedby', 'demo-notice');
			form.addEventListener('submit', function (event) {
				event.preventDefault();
				notice.focus();
			});
			form.querySelectorAll('button[type="submit"], input[type="submit"]').forEach(function (button) {
				button.disabled = true;
				button.dataset.demoDisabled = 'true';
				button.setAttribute('aria-describedby', 'demo-notice');
				button.setAttribute('title', '自主制作デモのため送信できません');
			});
		});

		notice.setAttribute('tabindex', '-1');
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initDemoNotice, { once: true });
	} else {
		initDemoNotice();
	}
})();
