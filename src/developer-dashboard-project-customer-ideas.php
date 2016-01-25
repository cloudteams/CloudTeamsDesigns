<?php include("partials/header.php"); ?>

<section class="page page-developer-dashboard-customer-ideas dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/developer-dashboard-side-menu-extended.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-idea.svg]]">
								<h1 class="header-large">Customer ideas</h1>
								<p class="header-medium secondary">Project title</p>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>20</span></p>
								<p class="project-counter">Ideas</p>
							</div>
						</div>
					</header>

					<?php include("partials/developer-dashboard-project-customer-ideas-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/developerdashboardprojectcustomerideas-*.js]]"></script>

<?php include("partials/footer-developer-dashboard.php"); ?>