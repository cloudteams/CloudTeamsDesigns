/* global $ */

(function() {

	function confirmButtons() {
		const allButtons = $('a.btn.invite-button');

		allButtons.click(e => {
			e.preventDefault();

			const target = $(e.target);
			const width = target.outerWidth();
			const height = target.outerHeight();

			target
				.css({
					'width' : width,
					'height' : height
				})
				.html('<i style="display: none;" class="icon icon-check">')
				.off()
				.click(event => {
					event.preventDefault();
				})
				.find('i')
				.fadeIn();
		});
	}

	function activeSubMenuItem() {
		const navLink = $('.side-menu > ul > li a[href="developer-dashboard-project-campaigns.php"]');

		navLink.addClass('active');
	}

	$(document).ready(() => {
		activeSubMenuItem();
		confirmButtons();
	});
})();
