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
			<article class="block large">

				<header class="article-header">
					<div class="vertical-align">
						<div class="middle">
							<i class="icon icon-folder"></i>
							<h2 class="header-medium secondary">Folder title</h2>
						</div>
						<div class="middle tooltip-container">
							<a href="#nowhere" class="open-tooltip-button"><i class="icon icon-more-options"></i></a>
						<div class="custom-tooltip" id="folder-options-1">
							<ul>
								<li>
									<a href="">Edit</a>
								</li>
								<li>
									<a href="">Delete</a>
								</li>
							</ul>
						</div>
					</div>

				</header>

				<div class="background">

					<div class="content documents">
						<div class="row">
							<article class="document add-item col-lg-5">
								<a href="#nowhere" data-toggle="modal" data-target=".popup-new-document" class="btn" alt="new document">Add document</a>							
							</article>

							<article class="document add-item col-lg-5">
								<a href="#nowhere" data-toggle="modal" data-target=".popup-new-url" class="btn" alt="add url">Add URL</a>
							</article>
						</div>

						<hr>

						<div class="row">
							<article class="document document-row-item document-row-type col-lg-2">
								<p>DOCX</p>
							</article>
							<article class="document document-row-item col-lg-8">
								<p>final_draft_1st_quarter_2016</p>
							</article>

							<article class="document document-row-item col-lg-2">
								<div class="middle tooltip-container icon-container">
									<a href="#nowhere" class="open-tooltip-button"><i class="icon icon-more-options"></i></a>
								</div>
								<div class="icon-container">
									<i class="icon icon-arrow-up"></i>
								</div>
							</article>

						</div>

						<hr>

						<div class="row">
							<article class="document document-row-item document-row-type col-lg-2">
								<p>URL</p>
							</article>
							<article class="document document-row-item col-lg-8">
								<p><a href="">http://booreiland.nl/en/cloudteams</a></p>
							</article>
							<article class="document document-row-item col-lg-2">
								<div class="middle tooltip-container icon-container">
									<a href="#nowhere" class="open-tooltip-button"><i class="icon icon-more-options"></i></a>
								</div>
								<div class="icon-container">
									<i class="icon icon-arrow-up"></i>
								</div>
							</article>
						</div>

						<hr>

						<div class="row">
							<article class="document document-row-item document-row-type col-lg-2">
								<p>PDF</p>
							</article>
							<article class="document document-row-item col-lg-8">
								<p>styleguide_cloudteams</p>
							</article>
							<article class="document document-row-item col-lg-2">
								<div class="middle tooltip-container icon-container">
									<a href="#nowhere" class="open-tooltip-button"><i class="icon icon-more-options"></i></a>
								</div>
								<div class="icon-container">
									<i class="icon icon-arrow-up"></i>
								</div>
							</article>
						</div>

						<hr>

					</div>
				</div>
			</article>
		</section>

		<section id="subpage-2" class="subpage col-md-9">
			
		</section>

		<section id="subpage-3" class="subpage col-md-9">
			
		</section>

		<section id="subpage-4" class="subpage col-md-9">
			
		</section>

		<?php include("new-folder.php"); ?>
		<?php include("new-document.php"); ?>
		<?php include("new-url.php"); ?>
		
	</div>
</section>
