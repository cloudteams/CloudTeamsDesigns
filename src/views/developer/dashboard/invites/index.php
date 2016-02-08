<?php include("../partials/header.php"); ?>

<section class="page page-developer-dashboard-pending-invites dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[../../../../img/icons/icon-pending.svg]]">
								<h1 class="header-large">Pending invites</h1>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>2</span></p>
								<p class="project-counter">Invites</p>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("../partials/footer.php"); ?>