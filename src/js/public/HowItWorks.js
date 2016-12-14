/* global $ */

(function() {
	function resizeVideos() {
		console.log('run');

		const $fluidEl = $('.youtube-container');
		const $allVideos = $('.youtube-container > iframe');

		console.log($allVideos);
		console.log($fluidEl)

		$allVideos.each(function() {
			console.log('found one video!')
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

	$(document).ready(() => {
		resizeVideos();
	});
})();
