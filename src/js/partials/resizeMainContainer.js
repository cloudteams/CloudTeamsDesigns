/* global $ */

(function() {
	function resizeMainContainer() {
		const height = $('.page').height();
		$('main').css('min-height', `${height}px`);
	}

	$(document).ready(() => {
		resizeMainContainer();
		$(window).on('resize', resizeMainContainer);
	});
})();