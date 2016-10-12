/* global $ */

import 'bootstrap';

(function() {
	function openTutorial() {
		const developerTutorial = $('#popup-tutorial-developer');

		developerTutorial.modal('show');
	}

	$(document).ready(() => {
		openTutorial();
	});
})();
