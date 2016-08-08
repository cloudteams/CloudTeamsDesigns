/* global $ */

(function() {
	function activeMenuItem() {
		const navLink  = $('.global-nav li a');
		const url      = $(location).attr('href');
		const pageName = url.substr(url.lastIndexOf('/') + 1);

		navLink.each((i, el) => {
			const linkHref = $(el).attr('href');

			if (linkHref === pageName || linkHref === '') {
				$(el).addClass('active');
			}
		});
	}

	function activeSubMenuItem() {
		const navLink  = $('.side-menu > ul > li a');
		const url      = $(location).attr('href');
		const pageName = url.substr(url.lastIndexOf('/') + 1);

		navLink.each((i, el) => {
			const linkHref = $(el).attr('href');
			const parentLinkHref = $(el).parent().parent()
				.prev('a');

			if (linkHref === pageName || linkHref === '') {
				$(el).addClass('active');
				parentLinkHref.addClass('active');
			}
		});
	}

	$(document).ready(() => {
		activeMenuItem();
		activeSubMenuItem();
	});
})();
