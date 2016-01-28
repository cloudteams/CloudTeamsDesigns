(function() {
	function activeMenuItem() {
		var navLink  = $('.global-nav li a');
		var url      = $(location).attr('href');
		var pageName = url.substr(url.lastIndexOf('/') + 1);

		navLink.each(function() {
			var linkHref = $(this).attr('href');

			if (linkHref === pageName || linkHref === '') {
				$(this).addClass('active');
			}
		});
	}

	function activeSubMenuItem() {
		var navLink  = $('.side-menu > ul > li a');
		var url      = $(location).attr('href');
		var pageName = url.substr(url.lastIndexOf('/') + 1);

		navLink.each(function() {
			var linkHref = $(this).attr('href');
			var parentLinkHref = $(this).parent().parent().prev('a');

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
