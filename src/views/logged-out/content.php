<section class="public-projects-explanation">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="submenu">
					<div class="container">
						<ul class="menu-subpage public">
							<li id="link-to-subpage-1" class="link-to-subpage active">Users</li>
							<li id="link-to-subpage-2" class="link-to-subpage">Developers</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="subpage-1" class="subpage active">
		<div class="container">
			<div class="row">
				<p>I feel the heat</p>
			</div>
		</div>
	</section>

	<section id="subpage-2" class="subpage">
		<div class="container">
			<div class="row">
				<p>I feel the heat</p>
			</div>
		</div>
	</section>

</section>

<section class="public-projects-logged-in-content">
	<div class="container">
		<header id="latest-projects">
			<h2 class="header-large public">Latest projects</h2>
			<p class="header-small action-text"><a href="/views/logged-out/projects">See all</a></p>

			<div class="filter-container">
				<label for="filter-projects">Filter projects</label>
				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="filter-projects" id="filter-projects" onchange="" size="1">
						<option value="all-projects" selected>All projects</option>
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
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
			<?php include("./partials/project.php"); ?>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="button-end">
					<a href="/views/logged-in/projects" class="btn big">See all projects</a>
				</div>
			</div>
		</div>
	</div>

</section>