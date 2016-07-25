/* global $ */

(function() {
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
		const currentLinkID          = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		const currentMessageComments = $('#comments-message-' + currentLinkID);

		if (!currentMessageComments.hasClass('active')) {
			openItem(currentMessageComments);
			active(element);
		} else {
			closeItem(currentMessageComments);
			passive(element);
		}
	}

	function runOpenCloseComment() {
		const commentTrigger = $('.comment-trigger');

		commentTrigger.click(function() {
			openCloseComment($(this));
		});
	}

	function like(element) {
		if (!element.hasClass('active')) {
			active(element);
		} else {
			passive(element);
		}
	}

	function runReply() {
		$('p.reply').click(e => {
			const $message = $(e.currentTarget).closest('article.message');
			console.log($message);
			if ($message) {
				const $reply = $message.next('article.reply');
				if ($reply) {
					$reply.toggleClass('active');
				}
			}
		});
	}

	function runLikeButton() {
		const likeButton = $('.like-button');

		likeButton.click(function() {
			like($(this));
		});
	}

	$(document).ready(function() {
		runOpenCloseComment();
		runLikeButton();
		runReply();
	});
})();
