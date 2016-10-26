/* global $ */

import 'bootstrap';

(function() {
	function closeItem(item) {
		item.removeClass('active');
	}

	function runOpenClose() {
		const close = $('.close-message');

		close.click(() => {
			closeItem(close.parent().parent());
		});
	}

	function openTutorial() {
		// const userTutorial = $('#popup-tutorial-user');
		// userTutorial.modal('show');
	}

	$(document).ready(() => {
		runOpenClose();
		openTutorial();
	});
})();
