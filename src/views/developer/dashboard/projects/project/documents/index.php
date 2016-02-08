<?php include("../../../partials/header.php"); ?>

<section class="page page-developer-dashboard-project-documents dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../../../partials/side-menu-extended.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[../../../../../../img/icons/icon-documents.svg]]">
								<h1 class="header-large">Documents</h1>
								<p class="header-medium secondary">Project title</p>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>5</span></p>
								<p class="project-counter">Documents</p>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("../../../partials/footer-dashboard-developer.php"); ?>