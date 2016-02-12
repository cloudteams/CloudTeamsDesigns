<section class="public-projects-logged-in-content">
	<header>
		<h2 class="header-large public">Latest projects</h2>
		<p class="header-small action-text"><a href="#nowhere">See all</a></p>

		<div class="filter-container">
			<label for="filter-projects">Filter projects</label>
			<div class="select-dropdown">
				<div class="icon-size-s icon-arrowdown"></div>
				<select name="filter-projects" id="filter-projects" onchange="" size="1">
					<option value="all-projects" selected>All projects</option>
					<option value="filter-1">Filter 2</option>
					<option value="filter-2">Filter 3</option>
					<option value="filter-3">Filter 4</option>
				</select>
			</div>
		</div>
	</header>

	<div class="row">
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
		<?php include("../partials/project.php"); ?>
	</div>
</section>