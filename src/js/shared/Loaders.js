/* global $ */

(function() {
	function start() {
		$('.loader-demo-container a').click(e => {
			e.preventDefault();
			e.stopPropagation();

			const $loader = $($(e.currentTarget).attr('href'));
			const $image2 = $loader.data('image2');

			// to reload gif, set the source manually using URLs stored in data attribute:
			if ($image2) {
				$loader.css({
					backgroundImage: $image2.replace('.gif', `.gif?${new Date().getTime()}`)
				});
			} else {
				const $dataImage1 = $loader.css('background-image');

				$loader.addClass('complete');
				const $dataImage2 = $loader.css('background-image');
				$loader.data({
					image1: $dataImage1,
					image2: $dataImage2
				});
			}

			window.setTimeout(() => {
				$loader.removeClass('complete');
				$loader.css({
					backgroundImage: $loader.data('image1')
				});
			}, 2000);
		});
	}

	$(document).ready(() => {
		start();
	});
})();
