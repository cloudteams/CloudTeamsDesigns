<!-- Pop-up modal: team member full profile -->
<div id="new" class="popup-create-new-persona modal fade" role="dialog">
	<div class="modal-dialog medium">
		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-user"></i>
						<h2 class="header-medium secondary">Create a new persona</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">
				<ul class="menu-subpage">
					<li id="link-to-subpage-1" class="link-to-subpage active">Basic information</li>
					<li id="link-to-subpage-2" class="link-to-subpage">Properties</li>
				</ul>

				<section id="subpage-1" class="subpage active">

					<div class="col-md-6">
						<fieldset class="form-group fieldset-upload">

							<div class="input-container">
								<label class="file-upload-image" for="file-upload">
									<div class="vertical-align">
										<div class="middle">
											<div class="add-image-button">
												<i class="icon icon-plus"></i>
											</div>
											<p class="meta big">Add picture</p>
										</div>
									</div>
								</label>
								<input type="file" name="file-upload" id="file-upload"/>
							</div>
						</fieldset>

					</div>
					<div class="col-md-6">
						
						<fieldset>
							<label for="add-document-name" class="header-medium secondary">Name</label>

							<div class="input-container">
								<input type="text" id="add-document-name"  placeholder="Name your URL"></textarea>
							</div>
						</fieldset>

						<fieldset>
							<label for="tags-document" class="header-medium secondary">Tags</label>

							<div class="input-container">
								<input type="text" id="tags-document" placeholder="Seperate by commas or spaces"></textarea>
							</div>
						</fieldset>

					</div>
					<div class="col-md-12">
						<fieldset class="form-group form-submit">
							<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
							<a href="#nowhere" data-dismiss="modal" class="btn confirm-button" alt="create">Create</a>
						</fieldset>
					</div>
				</section>
			</div>

		</div>
	</div>
</div>