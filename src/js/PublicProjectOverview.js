import CustomerIdeas from 'partials/CustomerIdeas.js';

(function() {
	function activeSubpage() {
		var campaignSubpageLink    = $('#link-to-subpage-2');

		campaignSubpageLink.addClass('active');
	}

	function runActiveSubpage() {
		var subpageLink = $('.link-to-hidden-subpage');

		subpageLink.click(function() {
			activeSubpage();
		});
	}

	function start() {
		CustomerIdeas.run();
		runActiveSubpage();
	}

	$(document).ready(function() {
		start();
	});
})();
