import Svg from 'partials/Svg.js';

(function() {
	var _lastSubsection;

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
		var currentSubpageLink = element;
		var otherSubpageLinks  = $('.link-to-subpage').not(currentSubpageLink, '#link-to-hidden-subpage-5');
		var currentSubpageID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		var currentSubpage     = $('#subpage-' + currentSubpageID);
		var otherSubpages      = $('.subpage').not(currentSubpage);

		if (!currentSubpage.hasClass('active')) {
			closeItem(otherSubpages, otherSubpageLinks);
			openItem(currentSubpage, currentSubpageLink);
		}
	}

	function runOpenCloseSubpage() {
		var linkToSubpage = $('.link-to-subpage');

		linkToSubpage.click(function(event) {
			event.preventDefault();
			resetState();

			openCloseSubpage($(this));
		});
	}

	function openCloseSubsection(element) {
		var currentSubsectionLink = element;
		var currentSubsectionID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		var currentSubsection     = $('#subsection-' + currentSubsectionID);
		var activeSubsection      = currentSubsection.parent().find('.active');
		var activeSubsectionLink  = element.parent().find('.active');

		if (!currentSubsection.hasClass('active')) {
			if (_lastSubsection) {
				var _lastSubsectionID   = parseInt(_lastSubsection.attr('id').replace(/[^\d]/g, ''), 10);
				var _lastSubsectionLink = $('#link-to-subsection-' + _lastSubsectionID);

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
		var linkToSubsection = $('.menu-subsection .link-to-subsection');

		linkToSubsection.click(function() {
			openCloseSubsection($(this));
		});
	}

	function moveProgressBar() {
		var getPercent      = $('.progress-wrap').attr('data-progress-percent');
		var getPercentWhole = (Number(getPercent) * 100).toFixed(0);

		$('.progress-bar').css('width', getPercentWhole + '%');
	}

	function openCloseTooltip(element) {
		var currentButton  = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		var currentTooltip = $('#custom-tooltip-' + currentButton);

		if (!currentTooltip.hasClass('active')) {
			openItem(element, currentTooltip);
		} else {
			closeItem(element, currentTooltip);
		}
	}

	function runOpenCloseTooltip() {
		var moreOptions = $('.open-tooltip-button');
		var tooltips    = $('.custom-tooltip');

		moreOptions.each(function(index) {
			var button = $(this);

			button.attr('id', 'open-tooltip-button-' + (index + 1));
		});

		tooltips.each(function(index) {
			var tooltip = $(this);

			tooltip.attr('id', 'custom-tooltip-' + (index + 1));
		});

		moreOptions.click(function(event) {
			event.preventDefault();

			openCloseTooltip($(this));
		});
	}

	function hoverStates() {
		var input  = $('input, textarea');
		var select = $('select');

		input
			.mouseover(function() {
				$(this).parent().addClass('hover');
			})
			.mouseout(function() {
				$(this).parent().removeClass('hover');
			});

		input
			.focusin(function() {
				$(this).parent().addClass('display-none');
			})
			.focusout(function() {
				$(this).parent().removeClass('display-none');
			});

		select
			.mouseover(function() {
				$(this).parent().addClass('hover');
			})
			.mouseout(function() {
				$(this).parent().removeClass('hover');
			});
	}

	function start() {
		Svg.run();
		runOpenCloseSubpage();
		runOpenCloseSubsection();
		moveProgressBar();
		runOpenCloseTooltip();
		hoverStates();
	}

	$(document).ready(function() {
		start();
	});
})();
