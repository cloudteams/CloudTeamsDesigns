(function() {
	function activeMenuItem() {
		const navLink  = $('.global-nav li a');
		const url      = $(location).attr('href');
		const pageName = url.substr(url.lastIndexOf('/') + 1);

		navLink.each(function() {
			const linkHref = $(this).attr('href');

			if (linkHref === pageName || linkHref === '') {
				$(this).addClass('active');
			}
		});
	}

	function activeSubMenuItem() {
		const navLink  = $('.side-menu > ul > li a');
		const url      = $(location).attr('href');
		const pageName = url.substr(url.lastIndexOf('/') + 1);

		navLink.each(function() {
			const linkHref = $(this).attr('href');
			const parentLinkHref = $(this).parent().parent().prev('a');

			if (linkHref === pageName || linkHref === '') {
				$(this).addClass('active');
				parentLinkHref.addClass('active');
			}
		});
	}

	$(document).ready(function() {
		activeMenuItem();
		activeSubMenuItem();
	});
})();
