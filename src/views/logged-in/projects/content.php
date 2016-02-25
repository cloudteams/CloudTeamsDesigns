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
					<p>Design <i class="icon icon-arrow-down"></i></p>
					<div class="list">
						<ul>
							<li><i class="icon icon-art"></i> art</li>
							<li><i class="icon icon-city"></i> business</li>
							<li><i class="icon icon-design"></i> design</li>
							<li><i class="icon icon-film"></i> film</li>
							<li><i class="icon icon-food"></i> food</li>
							<li><i class="icon icon-games"></i> games</li>
							<li><i class="icon icon-journalism"></i> journalism</li>
							<li><i class="icon icon-music"></i> music</li>
							<li><i class="icon icon-photography"></i> photography</li>
							<li><i class="icon icon-publishing"></i> publishing</li>
							<li><i class="icon icon-technology"></i> technology</li>
							<li><i class="icon icon-sport"></i> sport</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<header>
			<div class="filter-container">
				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="filter-projects" id="filter-projects" onchange="" size="1">
						<option value="all-projects" selected>Latest</option>
						<option value="filter-1">Filter 2</option>
						<option value="filter-2">Filter 3</option>
						<option value="filter-3">Filter 4</option>
					</select>
				</div>
				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
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