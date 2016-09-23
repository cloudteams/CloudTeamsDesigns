/* global $ */

(function() {

	function confirmMessage() {
		const confirmButton = $('.confirm-button');
		const contentSection = $('.entire-section');
		const confirmSection = $('.confirm-wrapper');
		const sendingSection = $('.sending-wrapper');
		const modalBody = $('.modal-body');

		function fadeDelay() {
			setTimeout(() => {
				sendingSection.fadeOut(() => {
					confirmSection.fadeIn();
				});
			}, 2000);

			setTimeout(() => {
				confirmSection.fadeOut(() => {
					modalBody.css('height', 'auto');
					contentSection.fadeIn();
				});
			}, 4000);
		}

		confirmButton.click(e => {
			e.preventDefault();

			const height = modalBody.outerHeight();
			modalBody.css('height', `${height}`);

			contentSection.fadeOut(() => {
				sendingSection.fadeIn();
			});

			fadeDelay();
		});
	}

	function closeOptions(el) {
		const _el = $(el);

		_el
			.off()
			.css({
				'transform': 'scaleY(1)'
			});

		const sibling =
			_el
				.closest('.row')
				.next();

		sibling.fadeOut();
		selectOptionOpen(_el);
	}

	function selectAllOptionsOpen() {
		const edit = $('a[data-target="extend-row"]');

		edit.click(e => {
			e.preventDefault();

			const row = $(e.target)
				.closest('.row')
				.next();

			row.fadeIn();

			const arrow = $(e.target)
				.closest('.row')
				.find('i.icon-arrow-down');

			arrow
				.css({
					'transform': 'scaleY(-1)'
				});

			arrow.parent().off().click(ev => {
				ev.preventDefault();
				closeOptions(ev.target);
			});
		});
	}

	function selectOptionOpen(el) {
		$(el).closest('a').click(e => {
			e.preventDefault();

			const row = $(e.target)
				.closest('.row')
				.next();

			row.fadeIn();

			const arrow = $(e.target)
				.closest('.row')
				.find('i.icon-arrow-down');

			arrow
				.css({
					'transform': 'scaleY(-1)'
				});

			arrow.parent().off().click(ev => {
				ev.preventDefault();
				closeOptions(ev.target);
			});
		});
	}

	function initClicks() {
		$('main a').click(e => {
			e.preventDefault();
		});
	}

	$(document).ready(() => {
		initClicks();
		selectAllOptionsOpen();
		confirmMessage();
	});
})();
