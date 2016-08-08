/* global $ */

import CONFIG from 'core/Config';
import LockScroll from 'utils/LockScroll';

export default function(id) {
	const _$modal = $(id);
	const _$modalContent = _$modal.find('.content');

	let _isAnimating = false;

	function start() {
		_$modal.click(hide);
		_$modalContent.click(e => {
			e.stopPropagation();
		});

		_$modal.find('.close-modal').click(e => {
			e.preventDefault();
			e.stopPropagation();

			hide();
		});
	}

	function show() {
		if (_isAnimating) {
			return;
		}
		_isAnimating = true;
		LockScroll.lock();

		_$modal.addClass('active').animate({
			opacity: 1
		}, {
			duration: CONFIG.UI.OVERLAY_FADE_DURATION * 1000,
			easing  : 'easeInOutQuad',
			complete: () => {
				_$modalContent.addClass('active').animate({
					opacity: 1
				}, {
					duration: CONFIG.UI.MODAL_FADE_DURATION * 1000,
					easing  : 'easeInOutQuad',
					complete: onAnimationComplete
				});
			}
		});
	}

	function hide() {
		if (_isAnimating) {
			return;
		}
		_isAnimating = true;

		_$modalContent.addClass('closing').animate({
			opacity: 0
		}, {
			duration: CONFIG.UI.MODAL_FADE_DURATION * 1000,
			easing  : 'easeInOutQuad',
			complete: () => {
				_$modal.animate({
					opacity: 0
				}, {
					duration: CONFIG.UI.OVERLAY_FADE_DURATION * 1000,
					easing  : 'easeInOutQuad',
					complete: () => {
						_$modalContent.removeClass('active closing');
						_$modal.removeClass('active');
						onAnimationComplete();
						LockScroll.unlock();
					}
				});
			}
		});
	}

	function onAnimationComplete() {
		_isAnimating = false;
	}

	$(document).ready(start);

	return {
		show,
		hide
	};
}