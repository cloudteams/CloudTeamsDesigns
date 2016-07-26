/* global $ */

export default (function() {
	let _scrollPosition;

	function preventScroll(e) {
		e.preventDefault();
		window.scroll(..._scrollPosition);
	}

	function lock() {
		_scrollPosition = [window.pageXOffset, window.pageYOffset];
		$(window).on('scroll touchmove', preventScroll);
	}

	function unlock() {
		$(window).off('scroll touchmove', preventScroll);
	}

	return {
		lock,
		unlock
	};
})();
