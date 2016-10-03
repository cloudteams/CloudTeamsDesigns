/* global $ */

export default (function() {
	function startProcessing(modalBody) {
		const contentSection = $('.entire-section');
		const sendingSection = $('.sending-wrapper');

		contentSection.fadeOut(() => {
			sendingSection.fadeIn();
		});

		setTimeout(() => {
			sendConfirmation(sendingSection, contentSection, modalBody);
		}, 2000); // Proxy for actual delay
	}

	function sendConfirmation(sendingSection, contentSection, modalBody) {
		const confirmSection = $('.confirm-wrapper');

		sendingSection.fadeOut(() => {
			confirmSection.fadeIn();
		});
		setTimeout(() => {
			displayContent(confirmSection, contentSection, modalBody);
		}, 2000); // Proxy for actual delay
	}

	function displayContent(confirmSection, contentSection, modalBody) {
		confirmSection.fadeOut(() => {
			modalBody.css('height', 'auto');
			contentSection.fadeIn();
		});
	}

	function run() {
		const confirmButton = $('.confirm-button');
		const modalBody = $('.modal-body');

		confirmButton.click(e => {
			e.preventDefault();

			const height = modalBody.outerHeight();
			modalBody.css('height', `${height}`);

			startProcessing(modalBody);
		});
	}

	return {
		run
	};
})();