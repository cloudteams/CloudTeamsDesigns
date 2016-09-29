<!-- Pop-up modal: show persona full profile -->
<div id="new" class="show-persona-in-campaign modal fade" role="dialog">
	<div class="modal-dialog medium">
		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-user"></i>
						<h2 class="header-medium secondary">Show persona</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">

				<ul class="menu-subsection">
					<li id="link-to-subsection-1" class="link-to-subsection active">Basic information</li>
					<li id="link-to-subsection-2" class="link-to-subsection">Properties</li>
				</ul>

					<section id="subsection-1" class="subsection active">
						<div class="col-md-6 image-container">
							<img src="http://unsplash.it/250/">
						</div>
						<div class="col-md-6">
							
							<fieldset>
								<label for="add-persona-name" class="header-medium secondary">Name</label>

								<div class="input-container">
									<p>Lorem ipsum</p>
								</div>
							</fieldset>

							<fieldset class="form-group fieldset-radio">
								<label for="privacy-settings" class="header-medium secondary">Persona profile settings</label>

								<div class="row">
									<div class="col-sm-6">
										<div class="input-container">
											<label for="import-url"><input type="radio" name="privacy-settings" value='import-url' id="import-url" checked="checked"><span></span>Private</label>	
										</div>
									</div>
									<div class="col-sm-6">

									</div>
								</div>
							</fieldset>	

							<fieldset>
								<label for="tags-persona" class="header-medium secondary">Description</label>

								<div class="input-container">
									<p>Lorem ipsum et dolor sic amit</p>
								</div>
							</fieldset>

						</div>
			    		
						<div class="col-md-12">
							<fieldset class="form-group form-submit">
								<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
								<a href="#nowhere" class="btn confirm-button" alt="create">Create</a>
							</fieldset>
						</div>
					</section>

					<section id="subsection-2" class="subsection">

						<div class="col-md-12 inform-block">
						Define some or all of the properties below to describe this persona
						</div>

						<div class="col-md-6">

							<fieldset>
								<label for="persona-gender" class="header-medium secondary">Gender</label>

								<div class="input-container">
									<input type="text" id="persona-gender" placeholder="Persona gender"></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="persona-tech-level" class="header-medium secondary">Tech level</label>

								<div class="input-container">
									<input type="text" id="persona-tech-level" placeholder="Tech level of persona"></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="persona-platform" class="header-medium secondary">Platform</label>

								<div class="input-container">
									<input type="text" id="persona-platform" placeholder=""></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="persona-age" class="header-medium secondary">Age</label>

								<div class="input-container">
									<input type="number" id="persona-age" placeholder=""></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="persona-sector" class="header-medium secondary"> Business sector</label>

								<div class="input-container">
									<input type="text" id="persona-sector" placeholder=""></textarea>
								</div>
							</fieldset>

						</div>

						<div class="col-md-6">

							<fieldset>
								<label for="persona-activity" class="header-medium secondary">Activity</label>

								<div class="input-container">
									<input type="text" id="persona-activity" placeholder="Persona activity"></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="persona-device" class="header-medium secondary">Device</label>

								<div class="input-container">
									<input type="text" id="persona-device" placeholder=""></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="persona-influence" class="header-medium secondary">Influence</label>

								<div class="input-container">
									<input type="text" id="persona-influence" placeholder=""></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="persona-activity-time" class="header-medium secondary">Activity time</label>

								<div class="input-container">
									<input type="text" id="persona-activity-time" placeholder=""></textarea>
								</div>
							</fieldset>

						</div>

						<div class="col-md-12">
							<fieldset class="form-group form-submit">
								<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
								<a href="#nowhere" class="btn confirm-button" alt="create">Create</a>
							</fieldset>
						</div>

					</section>

			</div>
		</div>
	</div>
</div>