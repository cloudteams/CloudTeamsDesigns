<?php include("partials/header.php"); ?>

<section class="page page-developer-dashboard-project-campaigns dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/developer-dashboard-side-menu-extended.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-campaigns.svg]]">
								<h1 class="header-large">Campaigns</h1>
								<p class="header-medium secondary">Project title</p>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>2</span></p>
								<p class="project-counter">Campaigns</p>
							</div>
						</div>
					</header>

					<?php include("partials/developer-dashboard-project-campaigns-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("partials/footer-developer-dashboard.php"); ?>