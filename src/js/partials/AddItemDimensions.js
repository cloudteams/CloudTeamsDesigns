/* global $ */

(function() {
	function setDimensionsOfAddItem() {
		// set height to the height of the next article
		const $item = $('article.add-item');
		$item.height($item.next('article').height());
	}

	function onResize() {
		setDimensionsOfAddItem();
	}

	$(document).ready(() => {
		// resize when window is resized or images are loaded
		$(window).on('resize', onResize);
		$('img').on('load', onResize);
		onResize();
	});
})();
