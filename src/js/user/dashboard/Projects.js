/* global $ */

(function() {
	function closeItem(item) {
		item.removeClass('active');
	}

	function openClose(element) {
		const message   = element.parent().parent();
		const dashboard = $('.dashboard-page');

		if (message.hasClass('active')) {
			closeItem(message);
			dashboard.addClass('top');
		}
	}

	function runOpenClose() {
		const close = $('.close-message');

		close.click(() => {
			openClose($(this));
		});
	}

	function openTutorial() {
		const userTutorial = $('#popup-tutorial-user');

		userTutorial.modal('show');
	}

	$(document).ready(() => {
		runOpenClose();
		openTutorial();
	});
})();
