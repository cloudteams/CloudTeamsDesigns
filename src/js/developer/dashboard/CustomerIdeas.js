/* global $ */

import CustomerIdeas from 'partials/CustomerIdeas.js';

(function() {
	function start() {
		CustomerIdeas.run();
	}

	$(document).ready(() => {
		start();
	});
})();

