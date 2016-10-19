/* global $ */

(function() {
	function confirmMessage() {
		const confirmButton = $('.confirm-button');
		const contentSection = $('.entire-section');
		const confirmSection = $('.confirm-wrapper');
		const sendingSection = $('.sending-wrapper');
		const modalBody = $('.modal-body');
		const subpageLink = $('#link-to-subpage-3');

		function fadeDelay() {
			setTimeout(() => {
				sendingSection.fadeOut(() => {
					confirmSection.fadeIn();
				});
			}, 2000);

			setTimeout(() => {
				confirmSection.fadeOut(() => {
					modalBody.css('height', 'auto');
					contentSection.fadeIn(200);
					subpageLink.fadeIn(200);
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

	function initClicks() {
		$('main a').click(e => {
			e.preventDefault();
		});
	}

	$(document).ready(() => {
		initClicks();
		confirmMessage();
	});
})();
