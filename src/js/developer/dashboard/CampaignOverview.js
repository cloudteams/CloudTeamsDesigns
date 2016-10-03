/* global $ */

(function() {
	function preventClicks() {
		$('a[href="#nowhere"]').click(e => {
			e.preventDefault();
		});
	}

	function confirmButtons() {
		const allButtons = $('.add-new-persona-to-campaign .added-persona-container .added-persona');

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

	function confirmTopUp() {
		const subpageSection = $('.top-up-content');
		const confirmButton = $('.top-up-button');
		const contentSection = $('.content-section');
		const sendingSection = $('.sending-section');
		const confirmSection = $('.confirm-section');

		function fadeDelay() {
			setTimeout(() => {
				sendingSection.fadeOut(() => {
					confirmSection.fadeIn();
				});
			}, 2000);

			setTimeout(() => {
				confirmSection.fadeOut(() => {
					contentSection.fadeIn();
				});
			}, 4000);
		}

		confirmButton.click(e => {
			e.preventDefault();

			const height = subpageSection.outerHeight();
			subpageSection.css('height', `${height}`);

			contentSection.fadeOut(() => {
				sendingSection.fadeIn();
			});

			fadeDelay();
		});
	}

	function activeSubMenuItem() {
		const navLink = $('.side-menu > ul > li a[href="developer-dashboard-project-campaigns.php"]');

		navLink.addClass('active');
	}

	$(document).ready(() => {
		activeSubMenuItem();
		confirmButtons();
		confirmTopUp();
		preventClicks();
	});
})();
