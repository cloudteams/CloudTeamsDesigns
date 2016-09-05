/* global $ */

import CustomerIdeas from 'partials/CustomerIdeas.js';

(function() {
	const start = () => {
		CustomerIdeas.run();
	};

	$(document).ready(() => {
		start();
	});
})();

