/* global $ */

require('cookieconsent');

module.exports = (function() {
	let $cookieBar;
	let $mainWrap;
	let $mainNav;

	function init() {
		// console.log(CookieConsent);

		window.cookieconsent.initialise({
			content: {
				message: '<span>This website uses cookies to ensure you get the best experience while browsing.</span>',
				dismiss: 'Ok',
				allow  : 'Ok',
				deny   : 'Decline',
				link   : 'Read our cookie policy',
				href   : '/data.html'
			},
			elements: {
				dismiss: '<a aria-label="dismiss cookie message" tabindex="0" class="cc-btn cc-dismiss btn btn-info btn-outline btn-sm">{{dismiss}}</a>',
				allow  : '<a aria-label="allow cookies" tabindex="0" class="cc-btn cc-allow btn btn-info btn-outline btn-sm">{{allow}}</a>',
				deny   : '<a aria-label="deny cookies" tabindex="0" class="cc-btn cc-deny btn btn-sm">{{deny}}</a>'
			},
			compliance: {
				'opt-out': '<div class="cc-compliance cc-highlight">{{dismiss}}{{deny}}</div>'
			},
			type   : 'opt-out',
			layout : 'bootstrap',
			layouts: {
				'bootstrap': '<div class="container"><div class="row">{{messagelink}}{{compliance}}</div></div>'
			},
			cookie: {
				name      : 'eu_cookie_status',
				domain    : getHostname(),
				expiryDays: 30
			},
			position   : 'top',
			theme      : 'cloudteams',
			onPopupOpen: function() {
				pushDownWrap(this.element.clientHeight);
			},
			onPopupClose  : () => pushDownWrap(0),
			onStatusChange: function() {
				const type       = this.options.type;
				const didConsent = this.hasConsented();

				if (type === 'opt-in' && didConsent) {
					// enable cookies
				}
				if (type === 'opt-out' && !didConsent) {
					// disable cookies
				}
			},
			onRevokeChoice: function() {
				const type = this.options.type;
				if (type === 'opt-in') {
					// disable cookies
				}
				if (type === 'opt-out') {
					// enable cookies
				}
			}
		});
	}

	function pushDownWrap(height) {
		console.log('hello world');
		$mainWrap = $('.wrap');
		$mainNav = $('.wrap .navbar');
		$mainWrap.css('margin-top', height + 'px');
		$mainNav.css('top', height + 'px');
	}

	function onScroll() {
		$cookieBar = $('div.cc-banner.cc-top');
		const $cookieBarHeight = $cookieBar.outerHeight();

		if (!$cookieBar.hasClass('cc-invisible')) {
			pushDownWrap($cookieBarHeight);
		}
	}

	function getHostname() {
		return window.location.hostname;
	}

	$(document).ready(() => {
		$(window).on('scroll', onScroll);
		$(window).on('resize', onScroll);
		init();
	});
})();