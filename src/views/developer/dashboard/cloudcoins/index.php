<?php include("../partials/header.php"); ?>

<section class="page page-developer-dashboard-project-cloudcoins dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main>
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-cloudcoins"></i>
								<h1 class="header-large">CloudCoins</h1>
							</div>
						</div>
					</header>

					<div class="row information-block">

						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-1">
									<i class="icon icon-cloudcoins"></i>
								</div>
								<div class="col-lg-8">
									<p class="meta-big">Available CloudCoins</h1>
								</div>
								<div class="col-lg-2">
									<strong>9600</strong>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-1">
									<i class="icon icon-cloudcoins"></i>
								</div>
								<div class="col-lg-8">
									<p class="meta-big">Total CloudCoins given</h1>
								</div>
								<div class="col-lg-2">
									<strong>9600</strong>
								</div>
							</div>
						</div>

					</div>

					<hr>

					<?php include("content.php"); ?>

				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/developer/dashboard/cloudcoins-*.js]]"></script>

<?php include("../partials/footer.php"); ?>