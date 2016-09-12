/* global $ */

(function() {
	function closeOptions(el) {
		const _el = $(el);

		console.log(_el);

		_el
			.off()
			.css({
				'transform': 'scaleY(1)'
			});

		const sibling =
			_el
				.closest('.row')
				.next();

		sibling.fadeOut();
		selectAllOptionsOpen();
	}

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
				.find('i.icon-arrow-down');

			arrow
				.css({
					'transform': 'scaleY(-1)'
				});

			arrow.parent().off().click(ev => {
				ev.preventDefault();
				closeOptions(ev.target);
			});
		});
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
