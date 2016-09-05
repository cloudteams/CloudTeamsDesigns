/* global $ */

(function() {
	const confirmButtons = () => {
		const allButtons = $('a.btn-transparent.add-persona');

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
				.html('<i style="display: none;" class="icon icon-check">')
				.off()
				.click(event => {
					event.preventDefault();
				})
				.find('i')
				.fadeIn();
		});
	};

	const activeSubMenuItem = () => {
		const navLink = $('.side-menu > ul > li a[href="developer-dashboard-project-campaigns.php"]');

		navLink.addClass('active');
	};

	$(document).ready(() => {
		activeSubMenuItem();
		confirmButtons();
	});
})();
