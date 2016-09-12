/* global $ */

(function() {
	function preventClicks() {
		$('a[href="#nowhere"]').click(e => {
			e.preventDefault();
		});
	}

	function confirmButtons() {
		const allButtons = $('.added-persona-container .added-persona');

		allButtons.click(e => {
			e.preventDefault();
			e.stopPropagation();

			const target = $(e.target).closest('.added-persona').find('footer');

			target
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
		preventClicks();
	});
})();
