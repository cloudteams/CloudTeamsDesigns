(function() {
	function activeSubMenuItem() {
		var navLink = $('.side-menu > ul > li a[href="developer-dashboard-project-campaigns.php"]');

		navLink.addClass('active');
	}

	$(document).ready(function() {
		activeSubMenuItem();
	});
})();
