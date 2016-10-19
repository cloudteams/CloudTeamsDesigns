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
									<textarea id="tags-persona" placeholder="Persona description"></textarea>
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

							<fieldset class="form-group required">
								<label for="persona-gender-select" class="header-medium secondary control-label">Gender</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-gender-select">
										<option>Male</option>
										<option>Female</option>
										<option>Apache AH64 Helicopter</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-gender-select-holder"></div>
							</fieldset>

							<fieldset class="form-group required">
								<label for="persona-tech-level-select" class="header-medium secondary control-label">Tech level</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-tech-level-select">
										<option>Very unexperienced</option>
										<option>Inexperienced</option>
										<option>Experienced</option>
										<option>Very experienced</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-tech-level-select-holder"></div>
							</fieldset>

							<fieldset class="form-group required">
								<label for="persona-platform-select" class="header-medium secondary control-label">Platform</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-platform-select">
										<option>Windows</option>
										<option>Apple</option>
										<option>Linux</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-platform-select-holder"></div>
							</fieldset>

							<fieldset class="form-group required">
								<label for="persona-age-select" class="header-medium secondary control-label">Age</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-age-select">
										<option value="18..24">18-24</option>
										<option value="25..34">25-34</option>
										<option value="35..54">35-54</option>
										<option value="55..64">55-64</option>
										<option value="65..">65 or older</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-age-select-holder"></div>
							</fieldset>

							<fieldset class="form-group required">
								<label for="persona-business-select" class="header-medium secondary control-label">Business sector</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-business-select">
										<option value="Advertising/Public Relations">Advertising/Public Relations</option>                        
										<option value="Aerospace, Defense Contractors">Aerospace, Defense Contractors</option>                        
										<option value="Agribusiness">Agribusiness</option>                        
										<option value="Agricultural Services &amp; Products">Agricultural Services &amp; Products</option>                        
										<option value="Agriculture">Agriculture</option>                        
										<option value="Air Transport">Air Transport</option>                        
										<option value="Airlines">Airlines</option>                        
										<option value="Alcoholic Beverages">Alcoholic Beverages</option>                        
										<option value="Alternative Energy Production &amp; Services">Alternative Energy Production &amp; Services</option>                        
										<option value="Architectural Services">Architectural Services</option>                        
										<option value="Attorneys/Law Firms">Attorneys/Law Firms</option>                        
										<option value="Auto Dealers">Auto Dealers</option>                        
										<option value="Auto Manufacturers">Auto Manufacturers</option>                        
										<option value="Automotive">Automotive</option>                        
										<option value="Banking, Mortgage">Banking, Mortgage</option>                        
										<option value="Banks, Commercial">Banks, Commercial</option>                        
										<option value="Banks, Savings &amp; Loans">Banks, Savings &amp; Loans</option>                        
										<option value="Bars &amp; Restaurants">Bars &amp; Restaurants</option>                        
										<option value="Books, Magazines &amp; Newspapers">Books, Magazines &amp; Newspapers</option>                        
										<option value="Broadcasters, Radio/TV">Broadcasters, Radio/TV</option>                        
										<option value="Builders">Builders</option>                        
										<option value="Building Materials &amp; Equipment">Building Materials &amp; Equipment</option>                        
										<option value="Business Services">Business Services</option>                        
										<option value="Cable &amp; Satellite TV Production &amp; Distribution">Cable &amp; Satellite TV Production &amp; Distribution</option>                        
										<option value="Casinos / Gambling">Casinos / Gambling</option>                        
										<option value="Cattle Ranchers/Livestock">Cattle Ranchers/Livestock</option>                        
										<option value="Chemical &amp; Related Manufacturing">Chemical &amp; Related Manufacturing</option>                        
										<option value="Chiropractors">Chiropractors</option>                        
										<option value="Civil Servants/Public Officials">Civil Servants/Public Officials</option>                        
										<option value="Clergy &amp; Religious Organizations ">Clergy &amp; Religious Organizations </option>                        
										<option value="Clothing Manufacturing">Clothing Manufacturing</option>                        
										<option value="Coal Mining">Coal Mining</option>                        
										<option value="Colleges, Universities &amp; Schools">Colleges, Universities &amp; Schools</option>                        
										<option value="Commercial TV &amp; Radio Stations">Commercial TV &amp; Radio Stations</option>                        
										<option value="Communications/Electronics">Communications/Electronics</option>                        
										<option value="Computer Software">Computer Software</option>                        
										<option value="Construction">Construction</option>                        
										<option value="Construction Services">Construction Services</option>                        
										<option value="Construction Unions">Construction Unions</option>                        
										<option value="Credit Unions">Credit Unions</option>                        
										<option value="Crop Production &amp; Basic Processing">Crop Production &amp; Basic Processing</option>                        
										<option value="Cruise Ships &amp; Lines">Cruise Ships &amp; Lines</option>                        
										<option value="Dairy">Dairy</option>                        
										<option value="Defense">Defense</option>                        
										<option value="Defense Electronics">Defense Electronics</option>                        
										<option value="Defense/Foreign Policy Advocates">Defense/Foreign Policy Advocates</option>                        
										<option value="Dentists">Dentists</option>                        
										<option value="Doctors &amp; Other Health Professionals">Doctors &amp; Other Health Professionals</option>                        
										<option value="Drug Manufacturers">Drug Manufacturers</option>                        
										<option value="Education ">Education </option>                        
										<option value="Electric Utilities">Electric Utilities</option>                        
										<option value="Electronics Manufacturing &amp; Equipment">Electronics Manufacturing &amp; Equipment</option>                        
										<option value="Electronics, Defense Contractors">Electronics, Defense Contractors</option>                        
										<option value="Energy &amp; Natural Resources">Energy &amp; Natural Resources</option>                        
										<option value="Entertainment Industry">Entertainment Industry</option>                        
										<option value="Environment ">Environment </option>                        
										<option value="Finance / Credit Companies">Finance / Credit Companies</option>                        
										<option value="Finance, Insurance &amp; Real Estate">Finance, Insurance &amp; Real Estate</option>                        
										<option value="Food &amp; Beverage">Food &amp; Beverage</option>                        
										<option value="Food Processing &amp; Sales">Food Processing &amp; Sales</option>                        
										<option value="Food Products Manufacturing">Food Products Manufacturing</option>                        
										<option value="Food Stores">Food Stores</option>                        
										<option value="Forestry &amp; Forest Products">Forestry &amp; Forest Products</option>                        
										<option value="Funeral Services">Funeral Services</option>                        
										<option value="Garbage Collection/Waste Management">Garbage Collection/Waste Management</option>                        
										<option value="Gas &amp; Oil">Gas &amp; Oil</option>                        
										<option value="General Contractors">General Contractors</option>                        
										<option value="HMOs &amp; Health Care Services">HMOs &amp; Health Care Services</option>                        
										<option value="Hedge Funds">Hedge Funds</option>                        
										<option value="Home Builders">Home Builders</option>                        
										<option value="Hospitals &amp; Nursing Homes">Hospitals &amp; Nursing Homes</option>                        
										<option value="Hotels, Motels &amp; Tourism">Hotels, Motels &amp; Tourism</option>                        
										<option value="Human Rights ">Human Rights </option>                        
										<option value="Industrial Unions ">Industrial Unions </option>                        
										<option value="Insurance">Insurance</option>                        
										<option value="Labor">Labor</option>                        
										<option value="Lawyers / Law Firms">Lawyers / Law Firms</option>                        
										<option value="Livestock">Livestock</option>                        
										<option value="Logging, Timber &amp; Paper Mills">Logging, Timber &amp; Paper Mills</option>                        
										<option value="Manufacturing">Manufacturing</option>                        
										<option value="Marine Transport">Marine Transport</option>                        
										<option value="Meat processing &amp; products">Meat processing &amp; products</option>                        
										<option value="Medical Supplies">Medical Supplies</option>                        
										<option value="Mining">Mining</option>                        
										<option value="Mortgage Bankers &amp; Brokers">Mortgage Bankers &amp; Brokers</option>                        
										<option value="Motion Picture Production &amp; Distribution">Motion Picture Production &amp; Distribution</option>                        
										<option value="Music Production">Music Production</option>                        
										<option value="Natural Gas Pipelines">Natural Gas Pipelines</option>                        
										<option value="Newspaper, Magazine &amp; Book Publishing">Newspaper, Magazine &amp; Book Publishing</option>                        
										<option value="Nurses">Nurses</option>                        
										<option value="Nursing Homes/Hospitals">Nursing Homes/Hospitals</option>                        
										<option value="Nutritional &amp; Dietary Supplements">Nutritional &amp; Dietary Supplements</option>                        
										<option value="Oil &amp; Gas">Oil &amp; Gas</option>                        
										<option value="Other">Other</option>                        
										<option value="Pharmaceuticals / Health Products">Pharmaceuticals / Health Products</option>                        
										<option value="Phone Companies">Phone Companies</option>                        
										<option value="Physicians &amp; Other Health Professionals">Physicians &amp; Other Health Professionals</option>                        
										<option value="Postal Unions">Postal Unions</option>                        
										<option value="Power Utilities">Power Utilities</option>                        
										<option value="Printing &amp; Publishing">Printing &amp; Publishing</option>                        
										<option value="Private Equity &amp; Investment Firms">Private Equity &amp; Investment Firms</option>                        
										<option value="Professional Sports, Sports Arenas &amp; Related Equipment &amp; Services">Professional Sports, Sports Arenas &amp; Related Equipment &amp; Services</option>                        
										<option value="Railroads">Railroads</option>                        
										<option value="Restaurants &amp; Drinking Establishments">Restaurants &amp; Drinking Establishments</option>                        
										<option value="Retail Sales">Retail Sales</option>                        
										<option value="Retired ">Retired </option>                        
										<option value="Software development">Software development</option>                        
										<option value="Stock Brokers/Investment Industry">Stock Brokers/Investment Industry</option>                        
										<option value="Telecom Services &amp; Equipment">Telecom Services &amp; Equipment</option>                        
										<option value="Tobacco">Tobacco</option>                        
										<option value="Transportation">Transportation</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-business-select-holder"></div>
							</fieldset>

						</div>

						<div class="col-md-6">

							<fieldset class="form-group required">
								<label for="persona-activity-select" class="header-medium secondary control-label">Activity</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-activity-select">
										<option value="">Passive</option>
										<option value="">Active</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-activity-select-holder"></div>
							</fieldset>

							<fieldset class="form-group required">
								<label for="persona-device-select" class="header-medium secondary control-label">Device</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-device-select">
										<option value="Laptop">Laptop</option>
										<option value="Mobile phone">Mobile phone</option>
										<option value="PC">PC</option>
										<option value="Tablet">Tablet</option>
										<option value="Wearable">Wearable</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-device-select-holder"></div>
							</fieldset>

							<fieldset class="form-group required">
								<label for="persona-influence-select" class="header-medium secondary control-label">Influence</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-influence-select">
			                            <option value="Advertisement">Advertisement</option>                        
			                            <option value="Blogs">Blogs</option>                        
			                            <option value="Co-workers">Co-workers</option>                        
			                            <option value="Family &amp; relatives">Family &amp; relatives</option>                        
			                            <option value="Friends &amp; social circle">Friends &amp; social circle</option>                        
			                            <option value="Other">Other</option>                        
			                            <option value="TV &amp; Media">TV &amp; Media</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-influence-select-holder"></div>
							</fieldset>

							<fieldset class="form-group required">
								<label for="persona-activity-time-select" class="header-medium secondary control-label">Activity time</label>
								<div class="select-dropdown">
									<select multiple="multiple" id="persona-activity-time-select">
										<option value="">Morning</option>
										<option value="">Afternoon</option>
										<option value="">Evening</option>
									</select>
								</div>
								<div class="dropdown-holder" id="persona-activity-time-select-holder"></div>
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