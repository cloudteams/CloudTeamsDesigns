/* global $ */

(function() {
	function openCloseComment(element) {
		const currentLinkID          = parseInt(element.attr('id').replace(/[^\d]/g, ''), 10);
		const currentMessageComments = $(`#comments-message-${currentLinkID}`);
		const isActive = currentMessageComments.hasClass('active');

		$(element).toggleClass('active', isActive);
		$(element).toggleClass('passive', !isActive);
	}

	function runOpenCloseComment() {
		const commentTrigger = $('.comment-trigger');

		commentTrigger.click(e => {
			openCloseComment($(e.currentTarget));
		});
	}

	function runReply() {
		$('p.reply').click(e => {
			const $message = $(e.currentTarget).closest('article.message');
			if ($message) {
				const $reply = $message.next('article.reply');
				if ($reply) {
					$reply.toggleClass('active');
				}
			}
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

	$(document).ready(() => {
		runOpenCloseComment();
		runLikeButton();
		runReply();
	});
})();
