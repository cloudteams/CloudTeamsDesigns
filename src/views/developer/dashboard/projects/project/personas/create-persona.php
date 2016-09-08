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
					<li id="link-to-subpage-3" class="link-to-subpage">Persona overview</li>
				</ul>

				<section class="entire-section">
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
								<label for="add-persona-name" class="header-medium secondary">Name</label>

								<div class="input-container">
									<input type="text" id="add-persona-name" placeholder="Persona name"></textarea>
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
										<div class="input-container">
											<label for="fetch-document"><input type="radio" name="privacy-settings" value='fetch-document' id="fetch-document"><span></span>Public</label>
										</div>
									</div>
								</div>
							</fieldset>	

							<fieldset>
								<label for="tags-persona" class="header-medium secondary">Description</label>

								<div class="input-container">
									<input type="text" id="tags-persona" placeholder="Persona description"></textarea>
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

					<section id="subpage-2" class="subpage">

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

					<section id="subpage-3" class="subpage">
						<div class="row">
							<div class="col-md-2 persona-property-column">
								<div class="vertical-align">
									<div class="middle">
										<strong>Device</strong>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="row percentage-wrapper">
									<div style="width:8%" class="persona-percentage-block">
										<div class="persona-percentage-item item-1"></div>
										<div class="persona-percentage-context">Computer</div>
										<div class="persona-block-popup item-1">Computer : 8% (2)</div>
									</div>
									<div style="width:18%" class="persona-percentage-block">
										<div class="persona-percentage-item item-2"></div>
										<div class="persona-percentage-context">Nintendo DS</div>
										<div class="persona-block-popup item-2">Nintendo DS : 18% (4)</div>
									</div>
									<div style="width:29%" class="persona-percentage-block">
										<div class="persona-percentage-item item-3"></div>
										<div class="persona-percentage-context">iPhone</div>
										<div class="persona-block-popup item-3">iPhone : 29% (6)</div>
									</div>
									<div style="width:21%" class="persona-percentage-block">
										<div class="persona-percentage-item item-4"></div>
										<div class="persona-percentage-context">Samsung</div>
										<div class="persona-block-popup item-4">Samsung : 21% (5)</div>
									</div>
									<div style="width:13%" class="persona-percentage-block">
										<div class="persona-percentage-item item-5"></div>
										<div class="persona-percentage-context">Screenreader</div>
										<div class="persona-block-popup item-5">Screenreader : 13% (3)</div>
									</div>
									<div style="width:11%" class="persona-percentage-block">
										<div class="persona-percentage-item item-6"></div>
										<div class="persona-percentage-context">iPad</div>
										<div class="persona-block-popup item-6">iPad  : 11% (3)</div>
									</div>
								</div>															
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 persona-property-column">
								<div class="vertical-align">
									<div class="middle">
										<strong>Gender</strong>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="row percentage-wrapper">
									<div style="width:11%" class="persona-percentage-block">
										<div class="persona-percentage-item item-1"></div>
										<div class="persona-percentage-context">lorem</div>
										<div class="persona-block-popup item-1">I am the lorem ipsum</div>
									</div>
									<div style="width:8%" class="persona-percentage-block">
										<div class="persona-percentage-item item-2"></div>
										<div class="persona-percentage-context">ipsum</div>
										<div class="persona-block-popup item-2">I am the lorem ipsum</div>
									</div>
									<div style="width:30%" class="persona-percentage-block">
										<div class="persona-percentage-item item-3"></div>
										<div class="persona-percentage-context">dolor</div>
										<div class="persona-block-popup item-3">I am the lorem ipsum</div>
									</div>
									<div style="width:21%" class="persona-percentage-block">
										<div class="persona-percentage-item item-4"></div>
										<div class="persona-percentage-context">sic</div>
										<div class="persona-block-popup item-4">I am the lorem ipsum</div>
									</div>
									<div style="width:13%" class="persona-percentage-block">
										<div class="persona-percentage-item item-5"></div>
										<div class="persona-percentage-context">amit</div>
										<div class="persona-block-popup item-5">I am the lorem ipsum</div>
									</div>
									<div style="width:17%" class="persona-percentage-block">
										<div class="persona-percentage-item item-6"></div>
										<div class="persona-percentage-context">omnium</div>
										<div class="persona-block-popup item-6">I am the lorem ipsum</div>
									</div>
								</div>															
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 persona-property-column">
								<div class="vertical-align">
									<div class="middle">
										<strong>Age</strong>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="row percentage-wrapper">
									<div style="width:5%" class="persona-percentage-block">
										<div class="persona-percentage-item item-1"></div>
										<div class="persona-percentage-context">lorem</div>
										<div class="persona-block-popup item-1">I am the lorem ipsum</div>
									</div>
									<div style="width:17%" class="persona-percentage-block">
										<div class="persona-percentage-item item-2"></div>
										<div class="persona-percentage-context">ipsum</div>
										<div class="persona-block-popup item-2">I am the lorem ipsum</div>
									</div>
									<div style="width:18%" class="persona-percentage-block">
										<div class="persona-percentage-item item-3"></div>
										<div class="persona-percentage-context">dolor</div>
										<div class="persona-block-popup item-3">I am the lorem ipsum</div>
									</div>
									<div style="width:18%" class="persona-percentage-block">
										<div class="persona-percentage-item item-4"></div>
										<div class="persona-percentage-context">sic</div>
										<div class="persona-block-popup item-4">I am the lorem ipsum</div>
									</div>
									<div style="width:23%" class="persona-percentage-block">
										<div class="persona-percentage-item item-5"></div>
										<div class="persona-percentage-context">amit</div>
										<div class="persona-block-popup item-5">I am the lorem ipsum</div>
									</div>
									<div style="width:19%" class="persona-percentage-block">
										<div class="persona-percentage-item item-6"></div>
										<div class="persona-percentage-context">omnium</div>
										<div class="persona-block-popup item-6">I am the lorem ipsum</div>
									</div>
								</div>															
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 persona-property-column">
								<div class="vertical-align">
									<div class="middle">
										<strong>Platform</strong>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="row percentage-wrapper">
									<div style="width:21%" class="persona-percentage-block">
										<div class="persona-percentage-item item-1"></div>
										<div class="persona-percentage-context">lorem</div>
										<div class="persona-block-popup item-1">I am the lorem ipsum</div>
									</div>
									<div style="width:11%" class="persona-percentage-block">
										<div class="persona-percentage-item item-2"></div>
										<div class="persona-percentage-context">ipsum</div>
										<div class="persona-block-popup item-2">I am the lorem ipsum</div>
									</div>
									<div style="width:18%" class="persona-percentage-block">
										<div class="persona-percentage-item item-3"></div>
										<div class="persona-percentage-context">dolor</div>
										<div class="persona-block-popup item-3">I am the lorem ipsum</div>
									</div>
									<div style="width:8%" class="persona-percentage-block">
										<div class="persona-percentage-item item-4"></div>
										<div class="persona-percentage-context">sic</div>
										<div class="persona-block-popup item-4">I am the lorem ipsum</div>
									</div>
									<div style="width:13%" class="persona-percentage-block">
										<div class="persona-percentage-item item-5"></div>
										<div class="persona-percentage-context">amit</div>
										<div class="persona-block-popup item-5">I am the lorem ipsum</div>
									</div>
									<div style="width:29%" class="persona-percentage-block">
										<div class="persona-percentage-item item-6"></div>
										<div class="persona-percentage-context">omnium</div>
										<div class="persona-block-popup item-6">I am the lorem ipsum</div>
									</div>
								</div>															
							</div>

						</div>

						<div class="col-md-12 persona-download">
							<a href="#nowhere"><i class="icon icon-download"></i>Download the detailed users profiles file</a>
						</div>
					</section>
				</section>

				<div class="col-md-12">
					<div class="pop-up sending-wrapper" style='display: none;'>
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-user"></i>
								<p class="meta big">Creating your persona</p>
							</div>
						</div>
					</div>

					<div class="pop-up confirm-wrapper" style='display: none;'>
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-check"></i>
								<p class="meta big">Persona created</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>