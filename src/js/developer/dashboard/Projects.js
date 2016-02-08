(function() {
	function openTutorial() {
		const developerTutorial = $('#popup-tutorial-developer');

		developerTutorial.modal('show');
	}

	$(document).ready(function() {
		openTutorial();
	});
})();
