<!-- Pop-up modal: add questionnaire -->
<div class="add-questionnaire-popup modal fade" role="dialog">
	<a href="#nowhere"></a>

	<div id="add-questionnaire" class="modal-dialog medium">

		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-folder"></i>
						<h2 class="header-medium secondary">Add question</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">

				<div class="row question-type-row">
					<div class="col-md-6">
						Enter a title to structure your poll:
					</div>
					<div class="col-md-6">
						<div class="select-dropdown">
							<i class="icon icon-arrow-down"></i>
							<select name="options" onchange="" size="1">
								<option value="0">Immediately</option>
								<option value="1">Daily</option>
								<option value="2">Weekly</option>
								<option value="3">Never</option>
							</select>
						</div>
					</div>

				</div>

				<div class="row submit-row">
					<div class="col-md-12">
						<fieldset class="form-group form-submit">
							<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Cancel</a>
							<a href="#nowhere" data-dismiss="modal" class="btn confirm-button" alt="add">Add</a>
						</fieldset>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>