import CustomerIdeas from 'partials/CustomerIdeas.js';

(function() {
	function activeSubpage() {
		var campaignSubpageLink = $('#link-to-subpage-2');

		campaignSubpageLink.addClass('active');
	}

	function runActiveSubpage() {
		var subpageLink = $('.link-to-hidden-subpage');

		subpageLink.click(function() {
			activeSubpage();
		});
	}

	function checkPageName() {
		var url = window.location.hash.substr(1);
		var campaignsTab = $('#link-to-subpage-2');

		if (url === 'campaigns') {
			campaignsTab.click();
		}
	}

	function start() {
		CustomerIdeas.run();
		runActiveSubpage();
		checkPageName();
	}

	$(document).ready(function() {
		start();
	});
})();
