<?php include("../partials/header.php"); ?>

<section class="page page-user-dashboard-cloudcoins dashboard-page user-dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main>
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-cloudcoins"></i>
								<h1 class="header-large">cloudcoins</h1>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>2</span></p>
								<p class="project-counter">cloudcoins</p>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/developer/dashboard/cloudcoins-*.js]]"></script>

<?php include("../partials/footer.php"); ?>