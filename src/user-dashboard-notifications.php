<?php include("partials/header-user.php"); ?>

<section class="page page-user-dashboard-notifications dashboard-page user-dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/user-dashboard-side-menu.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-notifications.svg]]">
								<h1 class="header-large">Notifications</h1>
							</div>
						</div>
					</header>

					<?php include("partials/user-dashboard-notifications-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("partials/footer-dashboard-user.php"); ?>