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

			_$confirm1.fadeOut(500, () => {
				_$confirm2.fadeIn(500);
			});
		}
	}

	return {
		run
	};
})();
