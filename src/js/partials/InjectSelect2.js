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
		$('#persona-gender-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 1,
			dropdownParent         : $('#persona-gender-select-holder')
		});
		$('#persona-tech-level-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 1,
			dropdownParent         : $('#persona-tech-level-select-holder')
		});
		$('#persona-platform-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 1,
			dropdownParent         : $('#persona-platform-select-holder')
		});
		$('#persona-age-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 1,
			dropdownParent         : $('#persona-age-select-holder')
		});
		$('#persona-business-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 3,
			dropdownParent         : $('#persona-business-select-holder')
		});
		$('#persona-activity-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 1,
			dropdownParent         : $('#persona-activity-select-holder')
		});
		$('#persona-device-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 2,
			dropdownParent         : $('#persona-device-select-holder')
		});
		$('#persona-influence-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 1,
			dropdownParent         : $('#persona-influence-select-holder')
		});
		$('#persona-activity-time-select').select2({
			minimumResultsForSearch: Infinity,
			tags                   : true,
			maximumSelectionLength : 1,
			dropdownParent         : $('#persona-activity-time-select-holder')
		});
	};

	$(document).ready(() => {
		activateProjectMenu();
		activatePersonaOptions();
	});
})();
