/* global $ */

import 'select2';

(function() {
	const activateSelect2 = () => {
		// Main conversion for select tags
		

		// Converting dashboard menu
		$('#main-select-project-navigation').select2({
			minimumResultsForSearch: Infinity,
			dropdownParent         : $('#main-select-project-holder')
		});
	};

	$(document).ready(() => {
		activateSelect2();
	});
})();
