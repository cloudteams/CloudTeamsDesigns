<form id="create-scenario">
	<article class="block-line large">
		<header class="article-header">
			<div class="vertical-align">
				<div class="middle">
					<i class="icon icon-profile"></i>
					<h2 class="header-medium secondary">Create a new story</h2>
				</div>
			</div>
		</header>

		<div class="content form-section">

			<fieldset class="form-group required">

				<label for="select-progress" class="control-label header-medium secondary">Related persona</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="select-progress" id="select-progress" onchange="" size="1">
						<option value="" disabled="" selected="">Select persona</option>
						<option value="Lorem">Lorem</option>
						<option value="Ipsum">Ipsum</option>
					</select>
				</div>
			</fieldset>

			<fieldset class="form-group required">
				<label for="title-project" class="control-label header-medium secondary">Title</label>

				<div class="input-container">
					<input id="title-project" type="text" name="Title of project" placeholder="Story title">
				</div>
			</fieldset>

			<fieldset class="fieldset-radio">
				<label for="gender-female" class="header-medium secondary">Type</label>

				<div class="row">
					<div class="col-sm-12">
						<div class="input-container">
							<label for="gender-female"><input type="radio" checked="true" name="gender" value='gender-female' id="gender-female" required><span></span>User story</label>

							<label for="gender-male"><input type="radio" name="gender" value='gender-male' id="gender-male" required><span></span>Idea/Prototype</label>

							<label for="gender-undefined"><input type="radio" name="gender" value='gender-undefined' id="gender-undefined" required><span></span>Epic</label>
						</div>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<label for="description-project" class="header-medium secondary">As a</label>

				<div class="input-container">
					<textarea id="description-project" rows="5" placeholder="Project description"></textarea>
				</div>
			</fieldset>

			<fieldset>
				<label for="description-project" class="header-medium secondary">I want to</label>

				<div class="input-container">
					<textarea id="description-project" rows="5" placeholder="Project description"></textarea>
				</div>
			</fieldset>

			<fieldset>
				<label for="description-project" class="header-medium secondary">So that</label>

				<div class="input-container">
					<textarea id="description-project" rows="5" placeholder="Project description"></textarea>
				</div>
			</fieldset>

			<fieldset>
				<label for="description-project" class="header-medium secondary">Acceptence criteria</label>

				<div class="input-container">
					<textarea id="description-project" rows="5" placeholder="Project description"></textarea>
				</div>
			</fieldset>

			<fieldset class="form-group">

				<label for="select-progress " class="control-label header-medium secondary">Priority</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="select-progress" id="select-progress" onchange="" size="1">
						<option value="" disabled="" selected="">Select priority</option>
						<option value="Lorem">Lorem</option>
						<option value="Ipsum">Ipsum</option>
					</select>
				</div>
			</fieldset>

			<fieldset class="form-group">

				<label for="select-progress" class="control-label header-medium secondary">Estimate (#days)</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="select-progress" id="select-progress" onchange="" size="1">
						<option value="" disabled="" selected="">Select estimate</option>
						<option value="Lorem">Lorem</option>
						<option value="Ipsum">Ipsum</option>
					</select>
				</div>
			</fieldset>

			<fieldset class="form-group">

				<label for="select-progress" class="control-label header-medium secondary">State</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="select-progress" id="select-progress" onchange="" size="1">
						<option value="" disabled="" selected="">Select state</option>
						<option value="Lorem">Lorem</option>
						<option value="Ipsum">Ipsum</option>
					</select>
				</div>
			</fieldset>

			<hr>

			<fieldset class="form-group form-submit">
				<a href="/views/developer/dashboard/projects/project/requirements/" class="btn-transparent" alt="cancel">Cancel</a>
				<a href="/views/developer/dashboard/projects/project/requirements/" class="btn confirm-button" alt="create">Create</a>
			</fieldset>

		</div>
	</article>
</form>