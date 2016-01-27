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
		var currentTutorialPageID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		var currentTutorialPage     = $('#tutorial-step-' + currentTutorialPageID);
		var otherTutorialPages      = $('.tutorial-step').not(currentTutorialPage);

		if (!currentTutorialPage.hasClass('active')) {
			closeItem(otherTutorialPages);
			openItem(currentTutorialPage);
		}
	}

	function runOpenCloseTutorial() {
		var linkToTutorialPage = $('.tutorial-button');

		linkToTutorialPage.click(function(event) {
			event.preventDefault();

			openCloseTutorial($(this));
		});
	}


	$(document).ready(function() {
		runOpenCloseTutorial();
	});
})();
