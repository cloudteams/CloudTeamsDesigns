/* global $ */

(function() {
	function initClicks() {
		$('a').click(e => {
			e.preventDefault();
		});
	}

	$(document).ready(() => {
		initClicks();
	});
})();
