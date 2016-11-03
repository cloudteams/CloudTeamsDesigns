/* global $ */

export default (function() {
	function toggle() {
		$('.togglebutton').click(e => {
			e.preventDefault();
			const $el = $(e.target);

			if ($el.hasClass('btn')) {
				$el.removeClass('btn').addClass('btn-transparent')
					.blur()
					.html('off');
			} else {
				$el.removeClass('btn-transparent').addClass('btn')
					.blur()
					.html('on');
			}
		});
	}

	return {
		toggle
	};
})();
