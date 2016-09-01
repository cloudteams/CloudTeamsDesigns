/* global $ */

import jquery from 'jQuery';
import "select2";

(function() {

	function activateSelect2() {
		console.log($.select());
	}

	$(document).ready(() => {
		activateSelect2();
	});
})();
