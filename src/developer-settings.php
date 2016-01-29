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
								<img class="svg" src="[[img/icons/icon-settings.svg]]">
								<h1 class="header-large">Settings</h1>
							</div>
						</div>
					</header>

					<?php include("partials/developer-settings-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("partials/footer-dashboard-developer.php"); ?>