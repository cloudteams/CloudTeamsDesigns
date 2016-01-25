<?php include("partials/header-user.php"); ?>

<section class="page page-user-dashboard-projects dashboard-page user-dashboard-page message">
	<div class="complete-profile active">
		<div class="container">
			<img class="icon menu-icon svg" src="[[img/icons/icon-check.svg]]">
			<p>Tell us more about yourself and complete your profile <a href="user-dashboard-profile">Go to your profile page</a></p>
			<div class="close-message">
				<img class="icon close-item svg" src="[[img/icons/icon-close.svg]]">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="content">
			<div class="row">
				<?php include("partials/user-dashboard-side-menu.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-projects.svg]]">
								<h1 class="header-large">Projects</h1>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>0</span></p>
								<p class="project-counter">Projects</p>
							</div>
						</div>
					</header>

					<?php include("partials/user-dashboard-projects-content.php"); ?>
				</main>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/userdashboardprojects-*.js]]"></script>

<?php include("partials/footer-dashboard.php"); ?>