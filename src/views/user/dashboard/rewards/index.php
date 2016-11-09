<?php include("../partials/header.php"); ?>

<section class="page page-user-dashboard-rewards dashboard-page user-dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main>
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-reward"></i>
								<h1 class="header-large">Rewards</h1>
								<p class="header-medium secondary">Project title</p>
							</div>

							<div class="middle">
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[js/user/dashboard/rewards-*.js]]"></script>

<?php include("../partials/footer.php"); ?>