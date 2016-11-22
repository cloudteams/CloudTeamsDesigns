<?php include("./partials/header.php"); ?>

<section class="page public-page no-border">
	<div class="content">
		<main>
			<header class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-1 col-md-10">
							<img src="[[../../img/header-image.svg]]" />
						</div>
					</div>

					<div class="row user-type">
						<div class="col-md-12">
							<div class="col-md-6 text-center">
								<a href="#">For users</a>
								<p>Collect rewards<br> for giving feedback</p>
							</div>
							<div class="col-md-6 text-center">
								<a href="#">For developers</a>
								<p>Test your software before<br> it hits the market</p>
							</div>
						</div>
					</div>

					<div class="choice">
						<a href="/views/log-in/choose/" class="btn big">Join now</a>
					</div>
				</div>

				<div class="incentive">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<p>Are you a developer? <a href="/views/log-in/">Submit your project</a></p>
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