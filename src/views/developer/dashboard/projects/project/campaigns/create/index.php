<?php include("../../../../partials/header.php"); ?>

<section class="page page-developer-dashboard-project-campaign-create dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../../../../partials/side-menu-extended.php"); ?>

				<main>
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<a href="/views/developer/dashboard/projects/project/campaigns/"><i class="icon icon-reply"></i></a>
								<h1 class="header-large">Campaigns</h1>
								<p class="header-medium secondary">Project title</p>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>2</span></p>
								<p class="project-counter">Campaigns</p>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript" src="[[js/developer/dashboard/campaign-overview-*.js]]"></script>
<script type="text/javascript" src="[[js/developer/dashboard/campaign-create-*.js]]"></script>

<?php include("../../../../partials/footer.php"); ?>