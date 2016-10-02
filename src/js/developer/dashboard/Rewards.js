/* global $ */

(function() {
	function confirmMessage() {
		const confirmButton = $('.confirm-button');
		const contentSection = $('.entire-section');
		const confirmSection = $('.confirm-wrapper');
		const sendingSection = $('.sending-wrapper');
		const modalBody = $('.modal-body');

		function startProcessing() {
			contentSection.fadeOut(() => {
				sendingSection.fadeIn();
			});
			setTimeout(() => {
				sendConfirmation();
			}, 2000); // Proxy for actual delay
		}

		function sendConfirmation() {
			sendingSection.fadeOut(() => {
				confirmSection.fadeIn();
			});
			setTimeout(() => {
				displayContent();
			}, 2000); // Proxy for actual delay
		}

		function displayContent() {
			confirmSection.fadeOut(() => {
				modalBody.css('height', 'auto');
				contentSection.fadeIn();
			});
		}

		confirmButton.click(e => {
			e.preventDefault();

			const height = modalBody.outerHeight();
			modalBody.css('height', `${height}`);

			startProcessing();
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
