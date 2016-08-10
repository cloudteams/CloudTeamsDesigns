<section class="developer-dashboard-project-documents-content">
	<div class="row">
		<aside class="col-lg-3">
			<header>
				<a href="#nowhere" data-toggle="modal" data-target=".popup-new-folder" class="btn" alt="new folder">New folder</a>
			</header>

			<ul class="menu-subpage sidebar">
				<li id="link-to-subpage-1" class="link-to-subpage active">
					<i class="icon icon-folder"></i>
					Folder title
					<span>5</span>
				</li>

				<li id="link-to-subpage-2" class="link-to-subpage">
					<i class="icon icon-folder"></i>
					Folder title
					<span>3</span>
				</li>

				<li id="link-to-subpage-3" class="link-to-subpage">
					<i class="icon icon-folder"></i>
					Folder title
					<span>2</span>
				</li>

				<li id="link-to-subpage-4" class="link-to-subpage">
					<i class="icon icon-folder"></i>
					Folder title
					<span>1</span>
				</li>
			</ul>
		</aside>

		<section id="subpage-1" class="subpage col-lg-9 active">

			<?php include("folder-content.php"); ?>

		</section>

		<section id="subpage-2" class="subpage col-md-9">

			<?php include("folder-content.php"); ?>

		</section>

		<section id="subpage-3" class="subpage col-md-9">

			<?php include("folder-content.php"); ?>

		</section>

		<section id="subpage-4" class="subpage col-md-9">

			<?php include("folder-content.php"); ?>
		
		</section>

		<?php include("new-folder.php"); ?>
		<?php include("new-document.php"); ?>
		<?php include("new-url.php"); ?>

	</div>
</section>
