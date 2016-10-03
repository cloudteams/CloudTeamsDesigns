<!-- Pop-up modal: add reward -->
<div class="add-new-reward-to-project modal fade" role="dialog">
	<a href="#nowhere"></a>

	<div class="modal-dialog medium">

		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-reward"></i>
						<h2 class="header-medium secondary">Add reward</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">
				<section class="entire-section">
					<div class="row">
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
							
							<fieldset class="form-group required">
								<label for="add-reward-title" class="header-medium secondary control-label">Reward title</label>

								<div class="input-container">
									<input type="number" id="add-reward-title"  placeholder="Reward title"></textarea>
								</div>
							</fieldset>

							<fieldset>
								<label for="description-document" class="header-medium secondary">Description</label>

								<div class="input-container">
									<textarea id="description-document" rows="5" placeholder="Project description"></textarea>
								</div>
							</fieldset>

						</div>

					</div>
					<div class="row">

						<div class="col-md-6">
							<fieldset class="form-group required">
								<label for="add-reward-amount" class="header-medium secondary control-label">Amount of rewards</label>

								<div class="input-container">
									<input type="number" id="add-reward-amount"  placeholder="Amount of rewards"></textarea>
								</div>
							</fieldset>
						</div>

						<div class="col-md-6">
							<fieldset class="form-group required">
								<label for="add-reward-price" class="header-medium secondary control-label">Rewards price</label>

								<div class="input-container">
									<input type="number" id="add-reward-price"  placeholder="Rewards price"></textarea>
								</div>
							</fieldset>
						</div>

					</div>
					<div class="row">

						<div class="col-md-12">
							<fieldset class="form-group required">
								<label for="add-reward-amount" class="header-medium secondary control-label">What type of reward is it?</label>

								<div class="select-dropdown">
									<i class="icon icon-arrow-down"></i>
									<select name="category-project" id="category-project" onchange="" size="1">
										<option value="" disabled="" selected="">Select type</option>
										<option value="0">Link</option>
										<option value="1">Coupon</option>
										<option value="2">Other</option>
									</select>
								</div>
							</fieldset>
						</div>

						<div class="col-md-12">
							<fieldset class="form-group required">
								<label for="add-reward-link" class="header-medium secondary control-label">Paste your link here</label>

								<div class="input-container">
									<input type="text" id="add-reward-link"  placeholder="Link to reward"></input>
								</div>
							</fieldset>
						</div>

						<div class="col-md-12">
							<fieldset class="form-group fieldset-checkbox required">
								<div class="input-container">
									<label for="number-the-questions"><input type="checkbox" name="question-numbers" value='1' id="number-the-questions"><span></span>I agree to the <a href="#">terms and conditions</a> of the CloudTeam Trust Policy</label>
								</div>
							</fieldset>
						</div>

					</div>
					<hr>

					<div class="row">
						<div class="col-md-12">
							<fieldset class="form-group form-submit">
								<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
								<a href="#nowhere" class="btn confirm-button" alt="create">Create</a>
							</fieldset>
						</div>
					</div>
				</section>

				<div class="col-md-12">
					<div class="pop-up sending-wrapper" style='display: none;'>
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-reward"></i>
								<p class="meta big">Adding your reward...</p>
							</div>
						</div>
					</div>

					<div class="pop-up confirm-wrapper" style='display: none;'>
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-check"></i>
								<p class="meta big">Reward added</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
</div>