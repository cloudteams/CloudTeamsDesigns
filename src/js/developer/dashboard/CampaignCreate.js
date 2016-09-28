/* global $ */

(function() {

	function confirmButtons() {
		const allButtons = $('a.btn.show-persona');

		allButtons.click(e => {
			e.preventDefault();

			const target = $(e.target);
			const width = target.outerWidth();
			const height = target.outerHeight();

			target
				.css({
					width,
					height
				})
				.html(' <i style="display: none;" class="icon icon-check"> ')
				.off()
				.click(event => {
					event.preventDefault();
				})
				.find('i')
				.fadeIn();
		});
	}

	$(document).ready(() => {
		confirmButtons();

	});
})();
