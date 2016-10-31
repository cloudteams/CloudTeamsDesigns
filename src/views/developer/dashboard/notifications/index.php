<?php include("../partials/header.php"); ?>

<section class="page page-developer-dashboard-notification dashboard-page user-dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main>
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-notification"></i>
								<h1 class="header-large">Notification</h1>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/developer/dashboard/notifications-*.js]]"></script>

<?php include("../partials/footer.php"); ?>