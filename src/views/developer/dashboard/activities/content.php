<section class="developer-dashboard-activities-content">
	<ul class="menu-subpage">
		<li id="link-to-subpage-1" class="link-to-subpage active">Personal</li>
		<li id="link-to-subpage-2" class="link-to-subpage">Team</li>
	</ul>

	<div class="row">
		<div class="col-md-6 legend text-left">
			<div class="select-dropdown">
				<i class="icon icon-arrow-down"></i>
				<select name="options" onchange="" size="1">
					<option value="0">All</option>
					<option value="1">Campaigns</option>
					<option value="2">Rewards</option>
					<option value="3">Team</option>
				</select>
			</div>
		</div>

		<div class="col-md-6 legend text-right">
			<a href="#nowhere" data-toggle="modal" data-target=".popup-adjust-activities" class="btn" alt="adjust notifications">activity settings</a>
		</div>
	</div>

	<section id="subpage-1" class="subpage active">
		<?php include("activity.php"); ?>
		<?php include("activity.php"); ?>
		<?php include("activity.php"); ?>
		<?php include("activity.php"); ?>
		<?php include("activity.php"); ?>
	</section>

	<section id="subpage-2" class="subpage">
		<?php include("activity.php"); ?>
		<?php include("activity.php"); ?>
	</section>

	<section class="content">
		<?php include("adjust-activity.php"); ?>
	</section>
	
</section>