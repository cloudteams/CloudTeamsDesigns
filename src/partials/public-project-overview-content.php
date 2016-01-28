<section class="public-project-overview-content">
	<header class="main-header">
		<div class="vertical-align">
			<div class="middle">
				<h1 class="header-extra-large">Project title</h1>
				<p>Project by <span>team name</span></p>
			</div>
		</div>
	</header>

	<div class="submenu">
		<div class="container">
			<ul class="menu-subpage public">
				<li id="link-to-subpage-1" class="link-to-subpage active">About this project</li>
				<li id="link-to-subpage-2" class="link-to-subpage">Campaigns</li>
				<li id="link-to-subpage-3" class="link-to-subpage">Blog posts</li>
				<li id="link-to-subpage-4" class="link-to-subpage">Customer ideas</li>
			</ul>
		</div>
	</div>

	<section id="subpage-1" class="subpage active">
		<?php include("partials/public-project-overview-data.php"); ?>

		<div class="container">
			<div class="content about">
				<div class="row">
					<div class="col-md-8">
						<header class="content-header">
							<div class="vertical-align">
								<h2 class="header-large secondary">About this project</h2>
								<p class="page-subtitle">Design</p>
								<img class="svg square design" src="[[../img/icons/icon-design.svg]]">
							</div>
						</header>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dolor sit amet.</p>

						<div class="project-images">
							<div class="row">
								<div class="col-sm-3">
									<div class="img-edit-container">
										<img src="[[../img/temp.jpg]]">
									</div>

									<div class="img-edit-container">
										<img src="[[../img/temp.jpg]]">
									</div>

									<div class="img-edit-container">
										<img src="[[../img/temp.jpg]]">
									</div>
								</div>

								<div class="col-sm-9">
									<div class="img-edit-container">
										<img src="[[../img/temp.jpg]]">
									</div>
								</div>
							</div>
						</div>

						<h3 class="header-extra-small">Description</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dolor sit amet.</p>
					</div>
				</div>
			</div>

			<div class="content related-projects">
				<header class="content-header">
					<div class="vertical-align">
						<h2 class="header-large secondary">Related projects</h2>
					</div>
				</header>

				<div class="row">
					<?php include("partials/public-projects-project-block.php"); ?>
					<?php include("partials/public-projects-project-block.php"); ?>
					<?php include("partials/public-projects-project-block.php"); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="subpage-2" class="subpage">
		<header>
			<div class="container">
				<h2 class="header-large secondary">Campaigns</h2>
			</div>
		</header>

		<div class="submenu">
			<div class="container">
				<ul class="menu-subsection public">
					<li id="link-to-subsection-1" class="link-to-subsection active">Invited</li>
					<li id="link-to-subsection-2" class="link-to-subsection">Closed</li>
					<li id="link-to-subsection-3" class="link-to-subsection">Running</li>
				</ul>
			</div>
		</div>

		<section id="subsection-1" class="subsection active">
			<div class="container">
				<div class="content">
					<div class="row">
						<?php include("partials/public-project-campaign-block.php"); ?>
						<?php include("partials/public-project-campaign-block.php"); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="subsection-2" class="subsection">
			<div class="container">
				<div class="content">
					<div class="row">
						<?php include("partials/public-project-campaign-block.php"); ?>
						<?php include("partials/public-project-campaign-block.php"); ?>
						<?php include("partials/public-project-campaign-block.php"); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="subsection-3" class="subsection">
			<div class="container">
				<div class="content">
					<div class="row">
						<?php include("partials/public-project-campaign-block.php"); ?>
						<?php include("partials/public-project-campaign-block.php"); ?>
					</div>
				</div>
			</div>
		</section>
	</section>

	<section id="subpage-3" class="subpage">
		<div class="container">
			<div class="content about">
				<header>
					<h2 class="header-large secondary">Blog posts</h2>
				</header>
			</div>

			<div class="row">
				<?php include("partials/public-project-campaign-blogpost.php"); ?>
				<?php include("partials/public-project-campaign-blogpost.php"); ?>
				<?php include("partials/public-project-campaign-blogpost.php"); ?>
				<?php include("partials/public-project-campaign-blogpost.php"); ?>
				<?php include("partials/public-project-campaign-blogpost.php"); ?>
				<?php include("partials/public-project-campaign-blogpost.php"); ?>
			</div>
		</div>
	</section>

	<section id="subpage-4" class="subpage">
		<div class="container">
			<div class="content about">
				<header>
					<h2 class="header-large secondary">Customer ideas</h2>
					<a href="#nowhere" class="btn" alt="send idea">Send idea</a>
				</header>
			</div>

			<?php include("partials/project-customer-idea.php"); ?>
			<?php include("partials/project-customer-idea.php"); ?>
			<?php include("partials/project-customer-idea.php"); ?>
			<?php include("partials/project-customer-idea.php"); ?>
			<?php include("partials/project-customer-idea.php"); ?>
		</div>
	</section>

	<section id="subpage-5" class="subpage">
		<div class="give-feedback">
			<div class="container">
				<div class="vertical-align">
					<div class="middle">
						<h2 class="header-medium secondary">Give feedback on our homepage and get awesome rewards</h2>
					</div>

					<div class="middle">
						<label>Select an other campaign</label>

						<div class="select-dropdown">
							<i class="fa fa-angle-down"></i>
							<select name="visable-to" id="visable-to" onchange="" size="1">
								<option value="Campaign title" selected>Campaign title</option>
								<option value="Campaign title">Campaign title 2</option>
								<option value="Campaign title">Campaign title 3</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="submenu">
			<div class="container">
				<ul class="menu-subsection public">
					<li id="link-to-subsection-4" class="link-to-subsection active">About campaign</li>
					<li id="link-to-subsection-5" class="link-to-subsection">Rewards</li>
					<li id="link-to-subsection-6" class="link-to-subsection">Results</li>
				</ul>
			</div>
		</div>

		<section id="subsection-4" class="subsection active">
			<?php include("partials/public-project-campaign-closed-data.php"); ?>

			<div class="container">
				<div class="content">
					<h2 class="header-medium secondary">About this campaign</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dolor sit amet.</p>

					<h2 class="header-medium secondary">Expected results</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dolor sit amet.</p>
				</div>
			</div>
		</section>

		<section id="subsection-5" class="subsection">
			<?php include("partials/public-project-campaign-running-data.php"); ?>

			<div class="container">
				<div class="content">
					<header>
						<h2 class="header-medium secondary">Rewards</h2>
					</header>

					<?php include("partials/public-project-campaign-reward.php"); ?>
					<?php include("partials/public-project-campaign-reward.php"); ?>
					<?php include("partials/public-project-campaign-reward.php"); ?>
				</div>
			</div>
		</section>

		<section id="subsection-6" class="subsection">
			<?php include("partials/public-project-campaign-running-data.php"); ?>

			<div class="container">
				<div class="content">
					<header>
						<h2 class="header-medium secondary">Results</h2>
					</header>

					<div class="still-running">
						<div class="vertical-align">
							<div class="middle">
								<img src="[[../img/campaign-results.svg]]" alt="results">

								<h3 class="header-medium secondary">This campaign is still running</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
</section>