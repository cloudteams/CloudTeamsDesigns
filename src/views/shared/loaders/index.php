<?php include("../../log-in/partials/header.php"); ?>

<section class="page public-page">
	<div class="content">
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="loader-demo-container loader-demo-container-white">
								<div class="content">
									<div class="loader-general loader-general-gray" id="loader-general-1"></div>
									<p><a href="#loader-general-1">simulate load complete</a></p>
								</div>
							</div>
							<div class="loader-demo-container loader-demo-container-purple">
								<div class="content">
									<div class="loader-general loader-general-purple" id="loader-general-2"></div>
									<p><a href="#loader-general-2">simulate load complete</a></p>
								</div>
							</div>
							<div class="loader-demo-container loader-demo-container-white">
								<div class="content">
									<div class="loader-persona"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
</section>

<script type="text/javascript" src="[[js/shared/loaders-*.js]]"></script>

<?php include("../../log-in/partials/footer.php"); ?>