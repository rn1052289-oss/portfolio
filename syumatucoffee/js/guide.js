// JavaScript Document
var mOpen = document.getElementById('modalOpen'),
		mOverlay = document.getElementById('modalOverlay'),
		mClose = document.getElementById('modalClose');
mOpen.addEventListener('click', function () {
		mOverlay.classList.add('is-open');
		document.body.style.overflow = 'hidden';
});
mClose.addEventListener('click', function () {
		mOverlay.classList.remove('is-open');
		document.body.style.overflow = '';
});
mOverlay.addEventListener('click', function (e) {
		if (e.target === mOverlay) {
				mOverlay.classList.remove('is-open');
				document.body.style.overflow = '';
		}
});
