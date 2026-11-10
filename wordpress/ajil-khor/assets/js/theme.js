/**
 * Ajil Khor theme interactions: mobile menu, cart badge/toast, newsletter note.
 */
(function () {
	'use strict';

	var faDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];

	function toFa(value) {
		return String(value).replace(/\d/g, function (digit) {
			return faDigits[Number(digit)];
		});
	}

	/* Mobile menu ------------------------------------------------------- */
	var toggle = document.querySelector('[data-menu-toggle]');
	var panel = document.querySelector('[data-menu-panel]');
	var iconOpen = document.querySelector('[data-menu-icon="open"]');
	var iconClose = document.querySelector('[data-menu-icon="close"]');

	if (toggle && panel) {
		toggle.addEventListener('click', function () {
			var isOpen = toggle.getAttribute('aria-expanded') === 'true';
			toggle.setAttribute('aria-expanded', String(!isOpen));
			panel.classList.toggle('hidden', isOpen);
			if (iconOpen) {
				iconOpen.classList.toggle('hidden', !isOpen);
			}
			if (iconClose) {
				iconClose.classList.toggle('hidden', isOpen);
			}
		});
	}

	/* Cart badge and toast ---------------------------------------------- */
	var cartCount = 0;
	var badge = document.querySelector('[data-cart-count]');
	var toastTimer = null;
	var toast = null;

	function showToast(name) {
		if (!toast) {
			toast = document.createElement('div');
			toast.className = 'pointer-events-none fixed inset-x-0 bottom-6 z-50 flex justify-center px-4';
			toast.innerHTML =
				'<div aria-live="polite" class="flex items-center gap-2 rounded-full bg-ink px-4 py-2.5 text-[12px] font-medium text-cream shadow-soft">' +
				'<svg viewBox="0 0 24 24" class="h-4 w-4 text-pistachio" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M20 4c-8 0-14 4-14 10a6 6 0 0 0 6 6c6 0 8-8 8-16Z"/></svg>' +
				'<span data-toast-text></span></div>';
			document.body.appendChild(toast);
		}

		var text = toast.querySelector('[data-toast-text]');
		if (text) {
			text.textContent = '«' + name + '» به سبد خرید اضافه شد';
		}

		toast.classList.remove('hidden');
		window.clearTimeout(toastTimer);
		toastTimer = window.setTimeout(function () {
			toast.classList.add('hidden');
		}, 2400);
	}

	document.addEventListener('click', function (event) {
		var button = event.target.closest('[data-add-to-cart]');
		if (!button) {
			return;
		}

		cartCount += 1;

		if (badge) {
			badge.textContent = toFa(cartCount);
			badge.classList.remove('hidden');
			badge.classList.add('grid');
		}

		showToast(button.getAttribute('data-product-name') || 'محصول');
	});

	/* Newsletter -------------------------------------------------------- */
	var newsletter = document.querySelector('[data-newsletter]');
	if (newsletter) {
		newsletter.addEventListener('submit', function (event) {
			event.preventDefault();
			var message = document.querySelector('[data-newsletter-message]');
			if (message) {
				message.textContent = 'عضویت شما ثبت شد!';
			}
			newsletter.reset();
		});
	}
})();
