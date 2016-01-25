(function() {
	function changeSVG() {
		$('img.svg').each(function() {
			var $img = $(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			$.get(imgURL, function(data) {
				// Get the SVG tag, ignore the rest
				var $svg = $(data).find('svg');

				// Add replaced image's ID to the new SVG
				if (typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if (typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
				}

				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');

				// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
				if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
					$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
				}

				// Replace image with new SVG
				$img.replaceWith($svg);

			}, 'xml');
		});
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
		var otherSubpageLinks  = $('.link-to-subpage').not(currentSubpageLink);
		var currentSubpageID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		var currentSubpage     = $('#subpage-' + currentSubpageID);
		var otherSubpages      = $('.subpage').not(currentSubpage);

		if (!currentSubpage.hasClass('active')) {
			closeItem(otherSubpages, otherSubpageLinks);
			openItem(currentSubpage, currentSubpageLink);
		}
	}

	function runOpenCloseSubpage() {
		var linkToSubpage = $('.menu-subpage .link-to-subpage');

		linkToSubpage.click(function() {
			openCloseSubpage($(this));
		});
	}

	function openCloseSubsection(element) {
		var currentSubsectionLink = element;
		var otherSubsectionLinks  = $('.link-to-subsection').not(currentSubsectionLink);
		var currentSubsectionID   = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		var currentSubsection     = $('#subsection-' + currentSubsectionID);
		var otherSubsections      = $('.subsection').not(currentSubsection);

		if (!currentSubsection.hasClass('active')) {
			closeItem(otherSubsections, otherSubsectionLinks);
			openItem(currentSubsection, currentSubsectionLink);
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


	$(document).ready(function() {
		changeSVG();
		runOpenCloseSubpage();
		runOpenCloseSubsection();
		moveProgressBar();
		runOpenCloseTooltip();
		hoverStates();
	});
})();
