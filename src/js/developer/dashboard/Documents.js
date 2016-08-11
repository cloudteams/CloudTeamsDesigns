/* global $ */

(function() {
	function selectAllOptionsOpen() {
		const edit = $('a[data-target="extend-row"]');

		edit.click(e => {
			e.preventDefault();

			const row = $(e.target)
				.closest('.row')
				.next();

			row.fadeIn();

			const arrow = $(e.target)
				.closest('.row')
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

	function blockDefault() {
		$('a[data-target]').click(e => {
			e.preventDefault();
		});
	}

	function removeTags() {
		$('.item-tag').click(e => {
			const target = $(e.target);
			target.remove();
		});
	}
	$(document).ready(() => {
		selectAllOptionsOpen();
		blockDefault();
		removeTags();
	});
})();
