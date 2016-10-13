/* global $ */

import CONFIG from 'core/Config';

export default (function() {
	let _$el;

	function setHide($el) {
		_$el = $el;
		_$el.click(() => {
			_$el.hide();
		});
	}

	function bar() {
		const foo = $(CONFIG.UI.ELEMENT.ID);
		setHide(foo);
	}

	$('document').ready(() => {
		bar();
	});

	return {
		setHide
	};
})();
