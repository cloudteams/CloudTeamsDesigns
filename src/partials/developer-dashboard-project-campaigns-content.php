<section class="developer-dashboard-project-campaigns-content">
	<ul class="menu-subpage">
		<li id="link-to-subpage-1" class="link-to-subpage active">Open</li>
		<li id="link-to-subpage-2" class="link-to-subpage">Closed</li>
		<li id="link-to-subpage-3" class="link-to-subpage">Draft</li>
	</ul>

	<section id="subpage-1" class="subpage active">
		<div class="row">
			<article class="campaign add-item col-md-6">
				<a href="developer-dashboard-project-campaign-create.php">
					<div class="background">
						<div class="vertical-align">
							<div class="middle">
								<div class="add-project-button">
									<div class="vertical-align">
										<div class="middle">
											<img class="icon" src="[[../img/icons/icon-add-fill.svg]]">
										</div>
									</div>
								</div>
								<h2 class="header-small secondary">Create new campaign</h2>
							</div>
						</div>
					</div>
				</a>
			</article>

			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
		</div>
	</section>

	<section id="subpage-2" class="subpage">
		<div class="row">
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
		</div>
	</section>

	<section id="subpage-3" class="subpage">

		<div class="row">
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
			<?php include("partials/developer-dashboard-project-campaign-block.php"); ?>
		</div>
	</section>
</section>