/* global $ */

(function() {
	function resizeVideos() {
		const $fluidEl = $('.youtube-container');
		const $allVideos = $('.youtube-container > iframe');

		$allVideos.each(function() {
			$(this)
				.attr('data-aspectRatio', this.height / this.width)
				.removeAttr('height')
				.removeAttr('width');
		});

		$(window).resize(() => {
			const newWidth = $fluidEl.width();
			$allVideos.each(function() {
				const $el = $(this);
				$el
					.width(newWidth)
					.height(newWidth * $el.attr('data-aspectRatio'));
			});
		}).resize();
	}

	function activeMenuItem() {
		$('a.how.secondary').addClass('active');
	}

	$(document).ready(() => {
		resizeVideos();
		activeMenuItem();
	});
})();
