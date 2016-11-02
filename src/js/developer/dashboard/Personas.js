/* global $ */

import ConfirmFader from 'partials/ConfirmFader.js';

(function() {
	function initClicks() {
		$('main a').click(e => {
			e.preventDefault();
		});

		$('.next-button').click(() => {
			$('#link-to-subpage-2').click();
		});
	}

	$(document).ready(() => {
		initClicks();
		ConfirmFader.run('.modal-body');
	});
})();
