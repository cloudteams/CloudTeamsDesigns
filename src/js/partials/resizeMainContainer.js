/* global $ */

(function() {
	function resizeMainContainer() {
		const height = $('.page').height();
		$('main').height(`${height}px`);
		console.log(height)
	}

	$(document).ready(() => {
		resizeMainContainer();
		$(window).on('resize', resizeMainContainer);
	});
})();