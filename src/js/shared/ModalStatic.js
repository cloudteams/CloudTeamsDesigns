/* global $ */

(function() {
	function staticModal() {
		const modal = $('.modal');

		modal.modal({
			show    : false,
			backdrop: 'static',
			keyboard: false
		});
	}

	$(document).ready(() => {
		staticModal();
	});
})();