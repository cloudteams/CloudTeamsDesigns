<!-- Pop-up modal: transfer cloudcoins -->
<div class="transfer-cloudcoins-to-project modal fade" role="dialog">
	<a href="#nowhere"></a>

	<div class="modal-dialog medium">

		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-cloudcoins"></i>
						<h2 class="header-medium secondary">Transfer CloudCoins</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">

				<div class="row">

					<div class="col-md-6">
						<fieldset class="form-group required">
							<label for="add-from-amount" class="header-medium secondary control-label">From</label>
							<div class="select-dropdown">
								<i class="icon icon-arrow-down"></i>
								<select name="from-project" id="from-project" onchange="" size="1">
									<option value="" disabled="" selected="">Select project</option>
									<option value="0">Project 1</option>
									<option value="1">Project 2</option>
									<option value="2">Project 3</option>
								</select>
							</div>
						</fieldset>
					</div>

					<div class="col-md-6">
						<fieldset class="form-group required">
							<label for="add-reward-price" class="header-medium secondary control-label">To</label>
							<div class="select-dropdown">
								<i class="icon icon-arrow-down"></i>
								<select name="to-project" id="to-project" onchange="" size="1">
									<option value="" disabled="" selected="">Select type</option>
									<option value="0">Project 1</option>
									<option value="1">Project 2</option>
									<option value="2">Project 3</option>
								</select>
							</div>
						</fieldset>
					</div>

				</div>

				<div class="row">

					<div class="col-md-6">
						<p class="meta">How many CloudCoins would you like to transfer?</p>
					</div>

					<div class="col-md-6">
						<fieldset class="form-group required">
							<div class="input-container">
								<input type="number" id="add-reward-price"  placeholder="Write a number"></textarea>
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
			</div>

		</div>
	</div>
	
</div>