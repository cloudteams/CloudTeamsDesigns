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

		if (content.hasClass('extended')) {
			closeElement(content, angle);
		} else {
			openElement(content, angle);
		}
	}

	function runOpenCloseElement() {
		const idea = $('.idea .idea-container');

		idea.click(e => {
			openCloseElement($(e.currentTarget));
		});
	}

	function runLikeButton() {
		$('.like-button').click(e => {
			const $el = $(e.currentTarget);
			$el.toggleClass('active');

			const isActive = $el.hasClass('active');

			$el.find('i')
				.toggleClass('icon-like', !isActive)
				.toggleClass('icon-like-fill', isActive);
		});
	}

	function run() {
		runOpenCloseElement();
		runLikeButton();
	}

	return {
		run
	};
})();
