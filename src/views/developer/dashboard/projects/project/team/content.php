<section class="developer-dashboard-project-team-content">
	<header>
		<!-- <div class="icon" style='background-image: url("[[../../../../../../img/fanta-logo.png]]")'></div> -->
		<div class="icon icon-edit-image"></div>
		<h2 class="header-large secondary">Fanta Design Department</h2>
		<div class="tooltip-container">
			<a href="#nowhere" class="open-tooltip-button"><i class="icon icon-more-options"></i></a>
			<div class="custom-tooltip">
				<ul>
					<li>
						<a href="#">Change team name</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<ul class="menu-subpage">
		<li id="link-to-subpage-1" class="link-to-subpage active">Accepted (6)</li>
		<li id="link-to-subpage-2" class="link-to-subpage">Invited (2)</li>
		<li id="link-to-subpage-3" class="link-to-subpage">Declined (2)</li>
	</ul>

	<section id="subpage-1" class="subpage active">

		<div class="row">

			<?php include("member-new.php"); ?>

			<?php include("member-picture.php"); ?>
			<?php include("member-no-picture.php"); ?>
			<?php include("member-no-picture.php"); ?>
			<?php include("member-picture.php"); ?>
			<?php include("member-picture.php"); ?>
			<?php include("member-no-picture.php"); ?>



		</div>

	</section>

	<section id="subpage-2" class="subpage">

		<div class="row">

			<?php include("member-picture.php"); ?>
			<?php include("member-no-picture.php"); ?>

		</div>
		
	</section>

	<section id="subpage-3" class="subpage">

		<div class="row">

			<?php include("member-picture.php"); ?>
			<?php include("member-no-picture.php"); ?>

		</div>
		
	</section>

	<?php include("member-popup.php"); ?>
	<?php include("member-new-popup.php"); ?>

</section>