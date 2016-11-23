<?php include("./partials/header.php"); ?>

<section class="page public-page no-border">
	<div class="content">
		<main>
			<header class="main-header">
				<div class="container">
					<div class="row image-container">
						<div class="col-md-5">
							<img src="[[../../img/left_image.svg]]" />
							<div class="user-type">
								<a href="#">For users</a>
								<p>Collect rewards<br> for giving feedback</p>
							</div>
						</div>
						<div class="col-md-2">
							<img src="[[../../img/dotted_line.svg]]" />
						</div>
						<div class="col-md-5">
							<img src="[[../../img/right_image.svg]]" />
							<div class="user-type">
								<a href="#">For users</a>
								<p>Collect rewards<br> for giving feedback</p>
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