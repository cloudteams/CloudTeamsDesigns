<form id="create-scenario">
	<article class="block-line large">
		<header class="article-header">
			<div class="vertical-align">
				<div class="middle">
					<i class="icon icon-profile"></i>
					<h2 class="header-medium secondary">Create a new scenario</h2>
				</div>
			</div>
		</header>

		<div class="content form-section">
			<fieldset class="form-group required">
				<label for="name-project" class="control-label header-medium secondary">Title</label>

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

				<label for="category-project" class="control-label header-medium secondary">Tags</label>

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

			<hr>

			<fieldset class="form-group form-submit">
				<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
				<a href="#nowhere" class="btn confirm-button" alt="create">Create</a>
			</fieldset>

		</div>
	</article>
</form>