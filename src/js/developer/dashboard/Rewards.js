/* global $ */

import ConfirmFader from 'partials/ConfirmFader.js';

(function() {
	function initClicks() {
		$('main a').click(e => {
			e.preventDefault();
		});
	}

	$(document).ready(() => {
		initClicks();
		ConfirmFader.run();
	});
})();
