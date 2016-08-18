/* global $ */

(function() {
	function initClicks() {
		$('main a').click(e => {
			console.log('intervented');
			e.preventDefault();
		});
	}

	$(document).ready(() => {
		initClicks();
	});
})();
