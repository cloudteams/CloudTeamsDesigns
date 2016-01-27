<?php include("partials/header.php"); ?>

<section class="page page-developer-dashboard-messaging dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/developer-dashboard-side-menu-extended.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-messaging.svg]]">
								<h1 class="header-large">Messaging</h1>
								<p class="header-medium secondary">Project title</p>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>67</span></p>
								<p class="project-counter">Messages</p>
							</div>
						</div>
					</header>

					<?php include("partials/developer-dashboard-project-messaging-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[./js/developerdashboardprojectmessaging-*.js]]"></script>

<?php include("partials/footer-dashboard-developer.php"); ?>