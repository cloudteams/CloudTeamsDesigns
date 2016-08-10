<div id="new-document" class="popup-edit-url modal fade" role="dialog">
	<div class="modal-dialog medium">

		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-object"></i>
						<h2 class="header-medium secondary">Edit URL</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">
				<div class="col-md-6">

					<fieldset>
						<label for="add-url" class="header-medium secondary">URL</label>

						<div class="input-container">
							<input type="text" id="add-url"  placeholder="http://"></textarea>
						</div>
					</fieldset>

					<fieldset>
						<label for="add-url-name" class="header-medium secondary">Name</label>

						<div class="input-container">
							<input type="text" id="add-url-name"  placeholder="Name your URL"></textarea>
						</div>
					</fieldset>

					<fieldset>
						<label for="description-url" class="header-medium secondary">Description</label>

						<div class="input-container">
							<textarea id="description-url" rows="5" placeholder="Project description"></textarea>
						</div>
					</fieldset>

				</div>
				<div class="col-md-6">
					
					<fieldset class="form-group fieldset-radio">
						<label for="import-option" class="header-medium secondary">Project visibility</label>

						<div class="row">
							<div class="col-sm-12">
						<div class="input-container">
							<label for="import-url"><input type="radio" name="import-option" value='import-url' id="import-url" checked="checked"><span></span>URL link only</label>		
							<label for="fetch-document"><input type="radio" name="import-option" value='fetch-document' id="fetch-document"><span></span>Fetch document from URL</label>
						</div>
							</div>
						</div>
					</fieldset>	

					<fieldset>
						<label for="tags-url" class="header-medium secondary">Tags</label>

						<div class="input-container">
							<input type="text" id="tags-url" placeholder="Seperate by commas or spaces"></textarea>
						</div>
					</fieldset>

				</div>
				<div class="col-md-12">
					<fieldset class="form-group form-submit">
						<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
						<a href="#nowhere" data-dismiss="modal" class="btn confirm-button" alt="create">Create</a>
					</fieldset>
				</div>

			</div>

		</div>
	</div>
</div>