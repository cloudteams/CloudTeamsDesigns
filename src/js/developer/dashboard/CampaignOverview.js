/* global $ */

(function() {
	function activeSubMenuItem() {
		const navLink = $('.side-menu > ul > li a[href="developer-dashboard-project-campaigns.php"]');

		navLink.addClass('active');
	}

	$(document).ready(() => {
		activeSubMenuItem();
	});
})();
