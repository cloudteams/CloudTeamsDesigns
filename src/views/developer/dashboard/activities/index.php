<?php include("../partials/header.php"); ?>

<section class="page page-developer-dashboard-activities dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main>
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-activity"></i>
								<h1 class="header-large">Activities</h1>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[js/developer/dashboard/activities-*.js]]"></script>

<?php include("../partials/footer.php"); ?>