/* global $ */

export default (function() {
	function resizeMainContainer() {
		const height = $('.page').height();
		$('main').css('min-height', `${height}px`);
	}

	$(document).ready(() => {
		resizeMainContainer();
		console.log('hi')
		$(window).on('resize', resizeMainContainer);
	});

	return {
		resizeMainContainer
	};
})();