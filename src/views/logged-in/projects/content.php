<section class="public-projects-logged-in-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="category-selector">
					<div class="categories">
						<div class="box1"></div>
						<div class="box2"></div>
						<div class="box3">
							<div class="icon icon-design"></div>
						</div>
					</div>
					<p>Design <i class="icon icon-arrowdown"></i></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<header>
			<div class="filter-container">
				<div class="select-dropdown">
					<i class="icon icon-size-s icon-arrowdown"></i>
					<select name="filter-projects" id="filter-projects" onchange="" size="1">
						<option value="all-projects" selected>Latest</option>
						<option value="filter-1">Filter 2</option>
						<option value="filter-2">Filter 3</option>
						<option value="filter-3">Filter 4</option>
					</select>
				</div>
				<div class="select-dropdown">
					<i class="icon icon-size-s icon-arrowdown"></i>
					<select name="filter-projects" id="filter-projects" onchange="" size="1">
						<option value="all-projects" selected>Most popular</option>
						<option value="filter-1">Filter 2</option>
						<option value="filter-2">Filter 3</option>
						<option value="filter-3">Filter 4</option>
					</select>
				</div>
			</div>
		</header>
	</div>

	<div class="container">
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
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="button-end">
					<a href="/views/logged-in/projects" class="btn big">Load more</a>
				</div>
			</div>
		</div>
	</div>

</section>