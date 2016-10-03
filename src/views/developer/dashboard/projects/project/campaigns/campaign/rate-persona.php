<!-- Pop-up modal: rate persona to campaign -->
<div class="rate-persona-to-campaign modal fade" role="dialog">
	<a href="#nowhere"></a>

	<div id="new-team-member" class="modal-dialog medium">

		<!-- Modal content-->
		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-user"></i>
						<h2 class="header-medium secondary">Rate this persona</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">
				<div class="row">

					<div class="row">
						<div class="col-md-6 rate-this-persona">
							How would you rate this persona?
						</div>
						<div class="col-md-6 rate-this-persona">
							<div class="select-dropdown">
								<i class="icon icon-arrow-down"></i>
								<select name="rate-this-persona-dropdown" id="rate-persona" onchange="" size="1">
									<option value="" disabled="" selected="">Rate persona</option>
									<option value="Art">Very poor</option>
									<option value="Business">Poor</option>
									<option value="Business">Good</option>
									<option value="Business">Very good</option>
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-12 form-submit">
						<fieldset>
							<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
							<a href="#nowhere" data-dismiss="modal" class="btn confirm-button" alt="add persona">Rate persona</a>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>