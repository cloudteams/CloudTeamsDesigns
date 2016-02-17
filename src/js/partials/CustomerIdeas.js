/* global $ */

export default (function() {
	function openElement(element, element2) {
		const curHeight  = element.height();
		const autoHeight = element.css('height', 'auto').height();

		element.height(curHeight).addClass('extended').animate({
			'height': autoHeight
		}, 0, 'easeInOutCirc');

		if (element2) {
			element2.removeClass('angle-closed').addClass('angle-open');
		}
	}

	function closeElement(element, element2) {
		const initialHeight = '0px';

		element.removeClass('extended').animate({
			'height': initialHeight
		}, 0, 'easeInOutCirc');

		if (element2) {
			element2.removeClass('angle-open').addClass('angle-closed');
		}
	}

	function openCloseElement(element) {
		const content = element.find('.content');
		const angle   = content.prev('.icon-arrow-right');

		if (!content.hasClass('extended')) {
			openElement(content, angle);
		} else {
			closeElement(content, angle);
		}
	}

	function runOpenCloseElement() {
		const idea = $('.idea .idea-container');

		idea.click(function() {
			openCloseElement($(this));
		});
	}

	function like(element) {
		if (!element.hasClass('active')) {
			element.addClass('active');
		} else {
			element.removeClass('active');
		}
	}

	function runLikeButton() {
		const likeButton = $('.like-button');

		likeButton.click(function() {
			like($(this));
		});
	}

	function run() {
		runOpenCloseElement();
		runLikeButton();
	}

	return {
		run: run
	};
})();
