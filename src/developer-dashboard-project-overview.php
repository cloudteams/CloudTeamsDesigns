<?php include("partials/header.php"); ?>

<section class="page page-developer-dashboard-project-overview dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/developer-dashboard-side-menu-extended.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-seen.svg]]">
								<h1 class="header-large">Overview</h1>
							</div>
						</div>
					</header>

					<?php include("partials/developer-dashboard-project-overview-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("partials/footer-developer-dashboard.php"); ?>