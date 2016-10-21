<?php include("./partials/header.php"); ?>

<section class="page public-page no-border">
	<div class="content">
		<main>
			<header class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-1 col-md-10">
							<img src="[[../../img/public-header.svg]]" />
						</div>
					</div>
					<h1 class="header-extra-large public">Cloudteams</h1>
					<p class="public-page-subtitle">Collect rewards for giving feedback</p>
					<div class="choice">
						<a href="/views/logged-out/projects" class="btn big">Join now</a>
					</div>
				</div>

				<div class="incentive">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<p>Are you a developer? <a href="/">Submit your project</a></p>
							</div>
						</div>
					</div>
				</div>
			</header>

			<?php include("content.php"); ?>
		</main>
	</div>
</section>

<?php include("./partials/footer.php"); ?>