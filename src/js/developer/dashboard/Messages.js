/* global $ */

(function() {
	const runOpenCloseComment = () => {
		$('.comment-trigger').click(e => {
			const currentLinkID = parseInt($(e.currentTarget).attr('id').replace(/[^\d]/g, ''), 10);
			const $currentMessageComments = $(`#comments-message-${currentLinkID}`);
			$currentMessageComments.toggleClass('active');
			$currentMessageComments.toggleClass('passive', !$currentMessageComments.hasClass('active'));
		});
	};

	const runReply = () => {
		$('p.reply').click(e => {
			const $message = $(e.currentTarget).closest('article.message');
			if ($message) {
				const $reply = $message.next('article.reply');
				if ($reply) {
					$reply.toggleClass('active');
				}
			}
		});
	};

	const runLikeButton = () => {
		$('.like-button').click(e => {
			const $el = $(e.currentTarget);
			$el.toggleClass('active');

			const isActive = $el.hasClass('active');

			$el.find('i')
				.toggleClass('icon-like', !isActive)
				.toggleClass('icon-like-fill', isActive);
		});
	};

	$(document).ready(() => {
		runOpenCloseComment();
		runLikeButton();
		runReply();
	});
})();
