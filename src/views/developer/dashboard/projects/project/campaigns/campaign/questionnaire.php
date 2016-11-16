<nav class="questionnaire-options">
	<ul>
		<li><a class="btn" href="#" data-toggle="modal" data-target=".choose-questionnaire-popup">Choose questionnaire</a></li>
		<li><a class="btn" href="#" data-toggle="modal" data-target=".save-questionnaire-popup">Save questionnaire as</a></li>
	</ul>
</nav>
<div class="questionnaire-meta">
	<h2 class="header-medium secondary">4 question(s) added to this campaign</h2>
	<a class="btn" href="#" data-toggle="modal" data-target=".add-questionnaire-popup">Add a question</a>
</div>

<div class="questionnaire-container">

	<?php include("question.php"); ?>
	<?php include("question.php"); ?>
	<?php include("question.php"); ?>
	<?php include("question.php"); ?>
	<?php include("seperator.php"); ?>
	<?php include("subtitle.php"); ?>

</div>

<div class="save-button">
	<a class="btn" href="#" data-toggle="modal" data-target=".save-questionnaire-popup">Save questionnaire as</a>
</div>