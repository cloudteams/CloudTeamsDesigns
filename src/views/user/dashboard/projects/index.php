<?php include("../partials/header.php"); ?>

<section class="page page-user-dashboard-projects dashboard-page user-dashboard-page message">
	<div class="complete-profile active">
		<div class="container">
			<div class="icon-approved"></div>
			<p>Tell us more about yourself and complete your profile <a href="user-profile.php" alt="user profile">Go to your profile page</a></p>
			<div class="close-message">
				<div class="icon-close"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="content">
			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<div class="icon-big icon-dashboard-project"></div>
								<h1 class="header-large">Projects</h1>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>0</span></p>
								<p class="project-counter">Projects</p>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/user/dashboard/projects-*.js]]"></script>

<?php include("../partials/footer.php"); ?>