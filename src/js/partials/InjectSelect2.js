/* global $ */

import 'select2';

(function() {
	function activateSelect2() {
		// Main conversion for select tags
		$('select').select2({
			minimumResultsForSearch: Infinity
		});

		// Converting dashboard menu
		$('#main-select-project-navigation').select2({
			minimumResultsForSearch: Infinity,
			dropdownParent         : $('#main-select-project-holder')
		});
	}

	$(document).ready(() => {
		activateSelect2();
	});
})();
