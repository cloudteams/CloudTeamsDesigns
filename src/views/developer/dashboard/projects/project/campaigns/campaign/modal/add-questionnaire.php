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
						What type of question do you want to add?
					</div>
					<div class="col-md-6">
						<div class="select-dropdown">
							<i class="icon icon-arrow-down"></i>
							<select id="question-type" name="options" onchange="" size="1">
								<option value="" selected disabled>Choose a type</option>
								<option value="single-question">Single</option>
								<option value="multiple-question">Multiple</option>
								<option value="yes-no-question">Yes / No</option>
								<option value="rating-question">Rating</option>
								<option value="text-question">Text</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row question-type-option single-question">
				
					<div class="col-md-8">
						<fieldset class="form-group required">
							<label for="question" class="control-label header-medium secondary">Question</label>

							<div class="input-container">
								<input id="question" type="text" name="Name of project" placeholder="What do you think about?..">
							</div>
						</fieldset>
					</div>					

					<div class="col-md-8">
						<fieldset class="form-group">
							<label for="description" class="header-medium secondary">Description to better explain the question</label>

							<div class="input-container">
								<textarea id="description" type="text" name="Name of project" placeholder="What do you think about?.."></textarea>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="form-group required">
							<label for="description" class="control-label header-medium secondary">Answers</label>
							<div class="row answer-options">
								<div class="col-md-1 text-right">
									<span>A.</span>
								</div>
								<div class="col-md-9">
									<div class="input-container">
										<input type="text" name="answer" placeholder="What could be the answer?">
									</div>
								</div>
								<div class="col-md-2 text-right">
									<a href="#"><i class="icon icon-moving"></i></a>
									<a href="#"><i class="icon icon-close"></i></a>
								</div>
							</div>
							<div class="row answer-options">
								<div class="col-md-1 text-right">
									<span>B.</span>
								</div>
								<div class="col-md-9">
									<div class="input-container">
										<input type="text" name="answer" placeholder="What could be the answer?">
									</div>
								</div>
								<div class="col-md-2 text-right">
									<a href="#"><i class="icon icon-moving"></i></a>
									<a href="#"><i class="icon icon-close"></i></a>
								</div>
							</div>
							<div class="row answer-options inactive">
								<div class="col-md-1 text-right">
									<span>C.</span>
								</div>
								<div class="col-md-9">
									<div class="input-container">
										<input type="text" name="answer" placeholder="What could be the answer?">
									</div>
								</div>
								<div class="col-md-2 text-right">
									<a href="#"><i class="icon icon-moving"></i></a>
									<a href="#"><i class="icon icon-close"></i></a>
								</div>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="other-option"><input type="checkbox" name="other-option" value='other-option' id="other-option"><span></span>When invited<span> (Allow the user to write their own answer)</span></label>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="required-option"><input type="checkbox" name="required-option" value='required-option' id="required-option"><span></span>Answer required</label>
						</fieldset>
					</div>

				</div>

				<div class="row question-type-option multiple-question">

					<div class="col-md-8">
						<fieldset class="form-group required">
							<label for="question" class="control-label header-medium secondary">Question</label>

							<div class="input-container">
								<input id="question" type="text" name="Name of project" placeholder="What do you think about?..">
							</div>
						</fieldset>
					</div>					

					<div class="col-md-8">
						<fieldset class="form-group">
							<label for="description" class="header-medium secondary">Description to better explain the question</label>

							<div class="input-container">
								<textarea id="description" type="text" name="Name of project" placeholder="What do you think about?.."></textarea>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="form-group required">
							<label for="description" class="control-label header-medium secondary">Answers</label>
							<div class="row answer-options">
								<div class="col-md-1 text-right">
									<span>A.</span>
								</div>
								<div class="col-md-9">
									<div class="input-container">
										<input type="text" name="answer" placeholder="What could be the answer?">
									</div>
								</div>
								<div class="col-md-2 text-right">
									<a href="#"><i class="icon icon-moving"></i></a>
									<a href="#"><i class="icon icon-close"></i></a>
								</div>
							</div>
							<div class="row answer-options">
								<div class="col-md-1 text-right">
									<span>B.</span>
								</div>
								<div class="col-md-9">
									<div class="input-container">
										<input type="text" name="answer" placeholder="What could be the answer?">
									</div>
								</div>
								<div class="col-md-2 text-right">
									<a href="#"><i class="icon icon-moving"></i></a>
									<a href="#"><i class="icon icon-close"></i></a>
								</div>
							</div>
							<div class="row answer-options inactive">
								<div class="col-md-1 text-right">
									<span>C.</span>
								</div>
								<div class="col-md-9">
									<div class="input-container">
										<input type="text" name="answer" placeholder="What could be the answer?">
									</div>
								</div>
								<div class="col-md-2 text-right">
									<a href="#"><i class="icon icon-moving"></i></a>
									<a href="#"><i class="icon icon-close"></i></a>
								</div>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="other-option"><input type="checkbox" name="other-option" value='other-option' id="other-option"><span></span>When invited<span> (Allow the user to write their own answer)</span></label>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="required-option"><input type="checkbox" name="required-option" value='required-option' id="required-option"><span></span>Answer required</label>
						</fieldset>
					</div>

				</div>

				<div class="row question-type-option yes-no-question">

					<div class="col-md-8">
						<fieldset class="form-group required">
							<label for="question" class="control-label header-medium secondary">Question</label>

							<div class="input-container">
								<input id="question" type="text" name="Name of project" placeholder="What do you think about?..">
							</div>
						</fieldset>
					</div>					

					<div class="col-md-8">
						<fieldset class="form-group">
							<label for="description" class="header-medium secondary">Description to better explain the question</label>

							<div class="input-container">
								<textarea id="description" type="text" name="Name of project" placeholder="What do you think about?.."></textarea>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="other-option"><input type="checkbox" name="other-option" value='other-option' id="other-option"><span></span>When invited<span> (Allow the user to write their own answer)</span></label>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="required-option"><input type="checkbox" name="required-option" value='required-option' id="required-option"><span></span>Answer required</label>
						</fieldset>
					</div>

				</div>

				<div class="row question-type-option rating-question">

					<div class="col-md-8">
						<fieldset class="form-group required">
							<label for="question" class="control-label header-medium secondary">Question</label>

							<div class="input-container">
								<input id="question" type="text" name="Name of project" placeholder="What do you think about?..">
							</div>
						</fieldset>
					</div>					

					<div class="col-md-8">
						<fieldset class="form-group">
							<label for="description" class="header-medium secondary">Description to better explain the question</label>

							<div class="input-container">
								<textarea id="description" type="text" name="Name of project" placeholder="What do you think about?.."></textarea>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-8">
						<fieldset class="form-group required">
							<label for="maximum" class="control-label header-medium secondary">Range of ratings</label>
							<div class="select-dropdown">
								<i class="icon icon-arrow-down"></i>
								<select id="question-type" name="options" onchange="" size="1">
									<option value="" selected disabled>Choose a range</option>
									<option value="3">3 ranges</option>
									<option value="4">4 ranges</option>
									<option value="5">5 ranges</option>
									<option value="6">6 ranges</option>
									<option value="7">7 ranges</option>
									<option value="8">8 ranges</option>
									<option value="9">9 ranges</option>
									<option value="10">10 ranges</option>
								</select>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="other-option"><input type="checkbox" name="other-option" value='other-option' id="other-option"><span></span>When invited<span> (Allow the user to write their own answer)</span></label>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="required-option"><input type="checkbox" name="required-option" value='required-option' id="required-option"><span></span>Answer required</label>
						</fieldset>
					</div>

				</div>

				<div class="row question-type-option text-question">

					<div class="col-md-8">
						<fieldset class="form-group required">
							<label for="question" class="control-label header-medium secondary">Question</label>

							<div class="input-container">
								<input id="question" type="text" name="Name of project" placeholder="What do you think about?..">
							</div>
						</fieldset>
					</div>					

					<div class="col-md-8">
						<fieldset class="form-group">
							<label for="description" class="header-medium secondary">Description to better explain the question</label>

							<div class="input-container">
								<textarea id="description" type="text" name="Name of project" placeholder="What do you think about?.."></textarea>
							</div>
						</fieldset>
					</div>	

					<div class="col-md-8">
						<fieldset class="form-group required">
							<label for="maximum" class="control-label header-medium secondary">Answer maximum number of lines</label>

							<div class="input-container">
								<input id="maximum" type="number" name="Name of project">
							</div>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="other-option"><input type="checkbox" name="other-option" value='other-option' id="other-option"><span></span>When invited<span> (Allow the user to write their own answer)</span></label>
						</fieldset>
					</div>	

					<div class="col-md-12">
						<fieldset class="checkbox-option">
							<label for="required-option"><input type="checkbox" name="required-option" value='required-option' id="required-option"><span></span>Answer required</label>
						</fieldset>
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