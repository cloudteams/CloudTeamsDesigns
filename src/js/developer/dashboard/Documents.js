/* global $ */

(function() {
	function selectAllOptionsOpen() {
		const edit = $('a[data-target="extend-row"]');

		edit.click(e => {
			e.preventDefault();

			const row = $(e.target)
				.parent()
				.parent()
				.parent()
				.parent()
				.next();

			row.fadeIn();

			const arrow = $(e.target)
				.parent()
				.parent()
				.parent()
				.parent()
				.find('i.icon-arrow-up');

			arrow.css({
				'transform': 'scaleY(-1)',
				'cursor'   : 'pointer'
			});

			arrow.click(ev => {
				ev.preventDefault();
				closeOptions(ev.target);
			});
		});
	}

	function closeOptions(el) {
		const _el = $(el);

		_el.css({
			'transform': 'scaleY(1)',
			'cursor'   : 'default'
		})
			.off();

		const sibling =
			_el
				.parent()
				.parent()
				.parent()
				.next();

		sibling.fadeOut();
	}

	function removeTags() {
		$('.item-tag').click(e => {
			$(e.target).remove();
		});
	}

	$(document).ready(() => {
		selectAllOptionsOpen();
		removeTags();
	});
})();
