/* global $ */

(function() {
	function openItem(item, item2) {
		item.addClass('active');

		if (item2) {
			item2.addClass('active');
		}
	}

	function closeItem(item, item2) {
		item.removeClass('active');

		if (item2) {
			item2.removeClass('active');
		}
	}

	function openCloseTutorial(element) {
		const currentTutorialPageID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		const currentTutorialPage     = $('#tutorial-step-' + currentTutorialPageID);
		const otherTutorialPages      = $('.tutorial-step').not(currentTutorialPage);

		if (!currentTutorialPage.hasClass('active')) {
			closeItem(otherTutorialPages);
			openItem(currentTutorialPage);
		}
	}

	function runOpenCloseTutorial() {
		const linkToTutorialPage = $('.tutorial-button');

		linkToTutorialPage.click(function(e) {
			e.preventDefault();

			openCloseTutorial($(this));
		});
	}

	$(document).ready(function() {
		runOpenCloseTutorial();
	});
})();
