<article class="persona persona-add-button col-md-12">
	<a href="#nowhere" data-dismiss="modal" class="btn confirm-button" alt="find and add an existing member">Find &amp; add an existing persona</a>		
</article>

<article class="persona create-new-persona col-md-12">

	<div class="row added-persona-container">

		<div class="col-md-4 new-persona add-item added-persona">

			<a href="#nowhere" data-toggle="modal" data-target=".popup-create-new-persona">
				<div class="background">
					<div class="vertical-align">
						<div class="middle">
							<div class="add-project-button">
								<div class="vertical-align">
									<div class="middle">
										<i class="icon icon-plus"></i>
									</div>
								</div>
							</div>
							<h2 class="header-small secondary">Create new persona</h2>
						</div>
					</div>
				</div>
			</a>

		</div>

		<div class="col-md-4 added-persona">
			<header class="added-persona__image">
				<div class="background-image" style='background-image: url("[[../../../../../../img/placeholders/persona.svg]]");'>
			</header>

			<section class="added-persona__body">

				<h3 class="header-medium secondary">Tech savy senior</h3>
				<div class="tooltip-container">
					<a href="#nowhere" class="open-tooltip-button"><i class="icon icon-more-options"></i></a>
					<div class="custom-tooltip">
						<ul>
							<li>
								<a href="#nowhere" alt="edit persona">Edit persona</a>
							</li>
							<li>
								<a href="#" alt="rate persona" data-toggle="modal" data-target=".rate-persona-to-campaign">Rate this persona</a>
							</li>
							<li>
								<a href="#nowhere" alt="delete persona">Delete persona</a>
							</li>
						</ul>
					</div>
				</div>
				<h3 class="header-medium secondary text-left">Public persona</h3>
				<p class="text-left">People with more than 5 years experience in the industry who are familliar with new technology</p>
				<div class="row persona-rating">
					<div class="col-md-6 text-left">Amount:</div>
					<div class="col-md-6"><strong>324</strong></div>
				</div>
				<div class="row persona-rating">
					<div class="col-md-6 text-left">Rating:</div>
					<div class="col-md-6"><strong>Positive</strong></div>
				</div>						
				<a href="#nowhere" class="btn text-center show-persona" alt="show persona" data-toggle="modal" data-target=".show-persona-in-campaign">Show persona</a>
			</section>
		</div>

	</div>
	

	
</article>

<?php include("create-persona.php"); ?>
