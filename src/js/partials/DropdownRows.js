/* global $ */

export default (function() {
	function startProcessing() {
		const contentSection = $('.entire-section');
		const sendingSection = $('.sending-wrapper');

		contentSection.fadeOut(() => {
			sendingSection.fadeIn();
		});

		setTimeout(() => {
			sendConfirmation(sendingSection);
		}, 2000); // Proxy for actual delay
	}

	function sendConfirmation(sendingSection) {
		const confirmSection = $('.confirm-wrapper');

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

	function run() {
		const confirmButton = $('.confirm-button');
		const contentSection = $('.entire-section');
		const sendingSection = $('.sending-wrapper');
		const modalBody = $('.modal-body');

		confirmButton.click(e => {
			e.preventDefault();

			const height = modalBody.outerHeight();
			modalBody.css('height', `${height}`);

			startProcessing();
		});
	}

	return {
		run
	};
});