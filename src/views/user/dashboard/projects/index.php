<?php include("../partials/header.php"); ?>

<section class="page page-user-dashboard-projects dashboard-page user-dashboard-page message">
	<div class="complete-profile active">
		<div class="container">
			<i class="icon icon-approved"></i>
			<p>Tell us more about yourself and complete your profile <a href="/views/user/dashboard/profile" alt="user profile">Go to your profile page</a></p>
			<div class="close-message">
				<i class="icon icon-close"></i>
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
								<i class="icon icon-size-m icon-project"></i>
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