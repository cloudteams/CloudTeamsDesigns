(function() {
	// function openElement(element, element2) {
	// 	var curHeight  = element.height();
	// 	var autoHeight = element.css('height', 'auto').height();

	// 	element.height(curHeight).addClass('extended').animate({
	// 		'height': autoHeight
	// 	}, 150, 'easeInOutCirc');

	// 	if (element2) {
	// 		element2.removeClass('angle-closed').addClass('angle-open');
	// 	}
	// }

	// function closeElement(element, element2) {
	// 	var initialHeight = '100px';

	// 	element.removeClass('extended').animate({
	// 		'height': initialHeight
	// 	}, 150, 'easeInOutCirc');

	// 	if (element2) {
	// 		element2.removeClass('angle-open').addClass('angle-closed');
	// 	}
	// }

	// function openCloseElement(element) {
	// 	var content = element.find('.content');
	// 	var angle   = content.prev('.fa-angle-right');

	// 	if (!content.hasClass('extended')) {
	// 		openElement(content, angle);
	// 	} else {
	// 		closeElement(content, angle);
	// 	}
	// }

	// function runOpenCloseElement() {
	// 	var idea = $('.idea');

	// 	idea.click(function() {
	// 		openCloseElement($(this));
	// 	});
	// }


	function openItem(item) {
		item.removeClass('passive').addClass('active');
	}

	function closeItem(item) {
		item.removeClass('active').addClass('passive');
	}

	function active(item) {
		item.addClass('active');
	}

	function passive(item) {
		item.removeClass('active');
	}


	function openCloseComment(element) {
		var currentLinkID          = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		var currentMessageComments = $('#comments-message-' + currentLinkID);

		if (!currentMessageComments.hasClass('active')) {
			openItem(currentMessageComments);
			active(element);
		} else {
			closeItem(currentMessageComments);
			passive(element);
		}
	}

	function runOpenCloseComment() {
		var commentTrigger = $('.comment-trigger');

		commentTrigger.click(function() {
			openCloseComment($(this));
		});
	}


	$(document).ready(function() {
//		runOpenCloseElement();
		runOpenCloseComment();
	});
})();
