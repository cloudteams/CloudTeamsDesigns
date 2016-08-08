/* global $ */

import 'partials/Menu';
import 'partials/Tutorial';
import 'partials/Easing';
import 'partials/AddItemDimensions';
// import Svg from 'partials/Svg.js';

(function() {
	let _lastSubsection;

	function resetState() {
		_lastSubsection = null;
	}

	function openItem(item, item2) {
		item.addClass('active');

		if (item2) {
			item2.addClass('active');
		}
	}

	function closeItem(item, item2) {
		item.removeClass('active');

		if (item2) {
			item2.removeClass('active');
		}
	}

	function openCloseSubpage(element) {
		const currentSubpageLink = element;
		const otherSubpageLinks  = $('.link-to-subpage').not(currentSubpageLink, '#link-to-hidden-subpage-5');
		const currentSubpageID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		const currentSubpage     = $(`#subpage-${currentSubpageID}`);
		const otherSubpages      = $('.subpage').not(currentSubpage);

		if (!currentSubpage.hasClass('active')) {
			closeItem(otherSubpages, otherSubpageLinks);
			openItem(currentSubpage, currentSubpageLink);
		}
	}

	function runOpenCloseSubpage() {
		const linkToSubpage = $('.link-to-subpage');

		linkToSubpage.click(function(event) {
			event.preventDefault();
			resetState();

			openCloseSubpage($(this));
		});
	}

	function openCloseSubsection(element) {
		const currentSubsectionLink = element;
		const currentSubsectionID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		const currentSubsection     = $(`#subsection-${currentSubsectionID}`);
		const activeSubsection      = currentSubsection.parent().find('.active');
		const activeSubsectionLink  = element.parent().find('.active');

		if (!currentSubsection.hasClass('active')) {
			if (_lastSubsection) {
				const _lastSubsectionID   = parseInt(_lastSubsection.attr('id').replace(/[^\d]/g, ''), 10);
				const _lastSubsectionLink = $(`#link-to-subsection-${_lastSubsectionID}`);

				closeItem(_lastSubsection, _lastSubsectionLink);
				openItem(currentSubsection, currentSubsectionLink);
				_lastSubsection = currentSubsection;
			} else {
				closeItem(activeSubsection, activeSubsectionLink);
				openItem(currentSubsection, currentSubsectionLink);
				_lastSubsection = currentSubsection;
			}
		}
	}

	function runOpenCloseSubsection() {
		const linkToSubsection = $('.menu-subsection .link-to-subsection');

		linkToSubsection.click(function() {
			openCloseSubsection($(this));
		});
	}

	function moveProgressBar() {
		const getPercent      = $('.progress-wrap').attr('data-progress-percent');
		const getPercentWhole = (Number(getPercent) * 100).toFixed(0);

		$('.progress-bar').css('width', `${getPercentWhole}%`);
	}

	function openCloseTooltip(element) {
		const currentButton  = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		const currentTooltip = $(`#custom-tooltip-${currentButton}`);

		if (currentTooltip.hasClass('active')) {
			closeItem(element, currentTooltip);
		} else {
			openItem(element, currentTooltip);
		}
	}

	function runOpenCloseTooltip() {
		const moreOptions = $('.open-tooltip-button');
		const tooltips    = $('.custom-tooltip');

		moreOptions.each(function(index) {
			$(this).attr('id', `open-tooltip-button-${index + 1}`);
		});

		tooltips.each(function(index) {
			$(this).attr('id', `custom-tooltip-${index + 1}`);
		});

		moreOptions.click(function(e) {
			e.preventDefault();
			openCloseTooltip($(this));
		});
	}

	function hoverStates() {
		const input  = $('input, textarea');

		input
			.focusin(function() {
				$(this).parent().addClass('focused');
			})
			.focusout(function() {
				$(this).parent().removeClass('focused');
			});
	}

	function runMinimizeSideMenu() {
		$('.minimize-sidepanel').on('click', () => {
			$('section.dashboard-page').toggleClass('minimized');
		});
	}

	function runCategorySelector() {
		$('.category-selector, .category-selector .categories').on('click', e => {
			e.stopPropagation();
			$('.category-selector .list').slideToggle(250);
		});
	}

	function start() {
		runOpenCloseSubpage();
		runOpenCloseSubsection();
		moveProgressBar();
		runOpenCloseTooltip();
		runMinimizeSideMenu();
		runCategorySelector();
		hoverStates();
	}

	$(document).ready(start);
})();
