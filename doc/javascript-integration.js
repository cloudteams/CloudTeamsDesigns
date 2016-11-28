/* global $ */

// We use imports to import (global) modules. As well as the basic configuration we use.
// This configuration can be transitions, timing, animations, UI, id
import CONFIG from 'core/Config';

// We export modules with the export default method, which exports an IIFE.
export default (function() {
	// We define all variables at the top
	// Underscores means public variables, dollar signs mean jQuery objects.
	let _$el;

	// Create a discriptive function name
	function setHide($el) {
		// Private variables have an underscore, jQuery objects start with a $
		_$el = $el;

		// We follow the ECMAScript 6 way of coding as much as possible.
		_$el.click(e => {
			e.preventDefault();
			_$el.hide();
		});
	}

	function bar() {
		// Using basic CONFIG variables allow use to globally change transition durations (etc) without adjusting the files individually.
		const foo = $(CONFIG.UI.ELEMENT.ID);
		setHide(foo);
	}

	// Execute the main functions when the document is ready.
	$(document).ready(() => {
		bar();
	});

	// Return a function to make it publicly accessable for other functions
	return {
		setHide
	};
})();
