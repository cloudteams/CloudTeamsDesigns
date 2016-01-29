	<section class="user-dashboard-projects-content">
	<div class="row">
		<article class="project add-item col-md-6 col-xs-12">
			<a href="public-projects-logged-in.php" alt="add new project">
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
							<h2 class="header-small secondary">Add new project</h2>
						</div>
					</div>
				</div>
			</a>
		</article>

		<?php include("partials/user-dashboard-project-block.php"); ?>
		<?php include("partials/user-dashboard-project-block.php"); ?>
		<?php include("partials/user-dashboard-project-block.php"); ?>
	</div>

	<div class="recommended-projects">
		<h2 class="header-medium secondary">Recommended projects</h2>

		<div class="row">
			<?php include("partials/public-recommended-project-block.php"); ?>
			<?php include("partials/public-recommended-project-block.php"); ?>
		</div>
	</div>
</section>