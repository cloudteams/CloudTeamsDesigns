/* global $ */

export default (function() {
	function run() {
		$('.confirm-button').click(e => {
			e.preventDefault();
			confirmMessage();
		});

		function confirmMessage() {
			const _$confirm1 = $('.confirm-1');
			const _$confirm2 = $('.confirm-2');
			const _$modal = $('.modal-body');

			_$modal.css('height', _$modal.outerHeight());

			_$confirm1.fadeOut(500, () => {
				_$modal.css('height', 'auto');
				_$confirm2.fadeIn(500);
			});
		}
	}

	return {
		run
	};
})();
