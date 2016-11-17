/* global $ */

import ConfirmFader from 'partials/ConfirmFader.js';

(function() {
	function closeOptions(el) {
		const _el = $(el);

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
		selectOptionOpen(_el);
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

	function selectOptionOpen(el) {
		$(el).closest('a').click(e => {
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

	function preventClicks() {
		$('a[href="#nowhere"]').click(e => {
			e.preventDefault();
		});
	}

	function confirmButtons() {
		const allButtons = $('.add-new-persona-to-campaign .added-persona-container .added-persona');

		allButtons.click(e => {
			e.preventDefault();
			e.stopPropagation();

			const target = $(e.target).closest('.added-persona').find('footer');

			target
				.html('<i style="display: none;" class="icon icon-check">')
				.off()
				.click(event => {
					event.preventDefault();
				})
				.find('i')
				.fadeIn();
		});
	}

	function activeSubMenuItem() {
		const navLink = $('.side-menu > ul > li a[href="developer-dashboard-project-campaigns.php"]');
		navLink.addClass('active');
	}

	$(document).ready(() => {
		activeSubMenuItem();
		confirmButtons();
		ConfirmFader.run('.top-up-content');
		preventClicks();
		selectAllOptionsOpen();
		blockDefault();
		removeTags();
	});
})();
