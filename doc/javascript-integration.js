/* global $ */

// We use imports to import (global) modules. As well as the basic configuration we use.
// This configuration can be transitions, timing, animations, UI, id
import CONFIG from 'core/Config';

// We export modules with the export default method, which exports an IIFE.
export default (function() {
	// We define all 
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
