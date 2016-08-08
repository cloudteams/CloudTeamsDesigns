<form id="create-project">
	<article class="block-line large">
		<div class="content form-section">
			<fieldset class="form-group required">
				<label for="name-project" class="control-label header-medium secondary">Name</label>

				<div class="input-container">
					<input id="name-project" type="text" name="Name of project" placeholder="Project title">
				</div>
			</fieldset>

			<fieldset>
				<label for="description-project" class="header-medium secondary">Description</label>

				<div class="input-container">
					<textarea id="description-project" rows="5" placeholder="Project description"></textarea>
				</div>
			</fieldset>

			<fieldset class="form-group required">

				<label for="category-project" class="control-label header-medium secondary">Category</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="category-project" id="category-project" onchange="" size="1">
						<option value="" disabled="" selected="">Select category</option>
						<option value="Art">Art</option>
						<option value="Business">Business</option>
						<option value="Design">Design</option>
						<option value="Film">Film</option>
						<option value="Food">Food</option>
						<option value="Games">Games</option>
						<option value="Journalism">Journalism</option>
						<option value="Music">Music</option>
						<option value="Photography">Photography</option>
						<option value="Publishing">Publishing</option>
						<option value="Technology">Technology</option>
						<option value="Sport">Sport</option>
					</select>
				</div>
			</fieldset>

			<fieldset>

				<label for="type-project" class="header-medium secondary">Type of project</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="type-project" id="type-project" onchange="" size="1">
						<option value="" disabled="" selected="">Select a type</option>
						<option value="App">App</option>
						<option value="Web Application">Web Application</option>
						<option value="Utility Software">Utility Software</option>
						<option value="System Software">System Software</option>
					</select>
				</div>
			</fieldset>

			<fieldset>
				<label for="tags-project" class="header-medium secondary">Tags</label>

				<div class="input-container">
					<input type="text" id="tags-project" rows="5" placeholder="lorem, ipsum, dolor, sic, amit"></input>
				</div>
			</fieldset>

			<fieldset class="form-group required">
				<label for="team-name-project" class="control-label header-medium secondary">Team name</label>

				<div class="input-container">
					<input type="text" id="team-name-project" rows="5" placeholder="Name your team"></input>
				</div>
			</fieldset>

			<fieldset class="form-group fieldset-radio">
				<label for="visibility-project" class="header-medium secondary">Project visibility</label>

				<div class="row">
					<div class="col-sm-12">
						<div class="input-container">
							<label for="visibility-private"><input type="radio" name="visibility" value='visibility-private' id="visibility-private" checked="checked" required><span></span>Private</label>		
							<label for="visibility-public"><input type="radio" name="visibility" value='visibility-public' id="visibility-public"required><span></span>Public</label>
						</div>
					</div>
				</div>
			</fieldset>		

			<fieldset class="form-group fieldset-upload">
				<label for="upload-project" class="header-medium secondary">Project picture</label>

				<div class="row">
					<div class="col-sm-12">
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
					</div>
				</div>
			</fieldset>

			<hr>

			<fieldset class="form-group form-submit">
				<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
				<a href="#nowhere" class="btn confirm-button" alt="create">Create</a>
			</fieldset>

		</div>
	</article>
</form>