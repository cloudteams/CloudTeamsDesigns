/* global $ */

import CustomerIdeas from 'partials/CustomerIdeas.js';

(function() {
	function activeSubpage() {
		const campaignSubpageLink = $('#link-to-subpage-2');

		campaignSubpageLink.addClass('active');
	}

	function runActiveSubpage() {
		const subpageLink = $('.link-to-hidden-subpage');

		subpageLink.click(() => {
			activeSubpage();
		});
	}

	function checkPageName() {
		const url = window.location.hash.substr(1);
		const campaignsTab = $('#link-to-subpage-2');

		if (url === 'campaigns') {
			campaignsTab.click();
		}
	}

	function start() {
		CustomerIdeas.run();
		runActiveSubpage();
		checkPageName();
	}

	$(document).ready(() => {
		start();
	});
})();
