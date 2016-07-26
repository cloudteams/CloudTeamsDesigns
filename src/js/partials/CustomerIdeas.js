/* global $ */

import Modal from 'partials/Modal';

export default (function() {
	const _modalNewIdea = new Modal('#modal-new-idea');

	function runOpenCloseComment() {
		$('.comment-trigger').click(e => {
			const currentLinkID = parseInt($(e.currentTarget).attr('id').replace(/[^\d]/g, ''), 10);
			const $currentMessageComments = $(`#comments-message-${currentLinkID}`);
			$currentMessageComments.toggleClass('active');
			$currentMessageComments.toggleClass('passive', !$currentMessageComments.hasClass('active'));
		});
	}

	function runOpenCloseElement() {
		$('.idea .idea-container').click(e => {
			const $element   = $(e.currentTarget);
			const $content   = $element.find('.content');
			const $angle     = $content.prev('.icon-arrow-right');

			$content.toggleClass('extended');
			const isExtended = $content.hasClass('extended');

			let h;

			if (isExtended) {
				const currentHeight = $content.height();
				const autoHeight = $content.css('height', 'auto').height();
				h = autoHeight;
				$content.height(currentHeight);
			} else {
				h = 0;
			}

			$content
				.toggleClass('extended', isExtended)
				.animate({
					'height': h
				}, 0, 'easeInOutCirc');

			$angle
				.toggleClass('angle-open', isExtended)
				.toggleClass('angle-closed', !isExtended);
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

	function runReply() {
		$('p.reply').click(e => {
			const $message = $(e.currentTarget).closest('article.idea');
			if ($message) {
				const $reply = $message.next('article.reply');
				if ($reply) {
					$reply.toggleClass('active');
				}
			}
		});
	}

	function runModal() {
		$('a[href="#modal-send-idea"]').click(e => {
			e.preventDefault();
			e.stopPropagation();
			_modalNewIdea.show();
		});
	}

	function run() {
		runOpenCloseElement();
		runOpenCloseComment();
		runLikeButton();
		runReply();
		runModal();
	}

	return {
		run
	};
})();
