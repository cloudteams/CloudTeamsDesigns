/* global $ */

(function() {
	function confirmMessage() {
		const subpageSection = $('#subpage-1');
		const confirmButton = $('.confirm-button');
		const contentSection = $('.subpage-wrapper .form-group');
		const confirmSection = $('.confirm-wrapper');
		const sendingSection = $('.sending-wrapper');

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

	$(document).ready(() => {
		confirmMessage();
		confirmButtons();
	});
})();
