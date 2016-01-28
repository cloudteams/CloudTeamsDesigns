<?php include("partials/header.php"); ?>

<section class="page page-developer-dashboard-projects dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/developer-dashboard-side-menu.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-projects.svg]]">
								<h1 class="header-large">Projects</h1>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>6</span></p>
								<p class="project-counter">Projects</p>
							</div>
						</div>
					</header>

					<?php include("partials/developer-dashboard-projects-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/developerdashboardprojects-*.js]]"></script>

<?php include("partials/footer-dashboard-developer.php"); ?>