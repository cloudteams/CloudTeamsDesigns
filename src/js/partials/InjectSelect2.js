/* global $ */

import 'select2';

(function() {
	function activateSelect2() {
		$('select').select2({
			minimumResultsForSearch: Infinity
		});
	}

	$(document).ready(() => {
		activateSelect2();
	});
})();
