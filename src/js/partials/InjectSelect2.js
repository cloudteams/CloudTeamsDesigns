/* global $ */

import 'select2';

(function() {
	const activateSelect2 = () => {
		$('#main-select-project-navigation').select2({
			minimumResultsForSearch: Infinity,
			dropdownParent         : $('#main-select-project-holder')
		});
	};

	$(document).ready(() => {
		activateSelect2();
	});
})();
