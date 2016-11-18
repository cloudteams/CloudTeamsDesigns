/* global $ */

(function() {
	function resizeMainContainer() {
		const height = $('.page').height();
		$('main').height(`${height}px`);
	}

	$(document).ready(() => {
		resizeMainContainer();
		$(window).on('resize', resizeMainContainer);
	});
})();