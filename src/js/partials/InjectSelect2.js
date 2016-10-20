/* global $ */

import 'select2';

(function() {
	const activateProjectMenu = () => {
		$('#main-select-project-navigation').select2({
			minimumResultsForSearch: Infinity,
			dropdownParent         : $('#main-select-project-holder')
		});
	};

	const activatePersonaOptions = () => {
		const dropDowns = {
			'gender'       : 1,
			'tech-level'   : 1,
			'platform'     : 1,
			'age'          : 1,
			'business'     : 3,
			'activity'     : 1,
			'device'       : 2,
			'influence'    : 1,
			'activity-time': 1
		};

		Object.keys(dropDowns).forEach(key => {
			$(`#persona-${key}-select`).select2({
				minimumResultsForSearch: Infinity,
				tags                   : true,
				maximumSelectionLength : dropDowns[key],
				dropdownParent         : $(`#persona-${key}-select-holder`)
			});
		});
	};

	$(document).ready(() => {
		activateProjectMenu();
		activatePersonaOptions();
	});
})();
