/* global $ */

(function() {
	function initSubmits() {
		$('.new-option a:not(.popup-trigger)').click(e => {
			e.preventDefault();

			const content = $(e.target)
				.closest('.input-container')
				.find('textarea')
				.val();

			const target = $(e.target)
				.closest('section.canvas-content');

			if (content.length) {
				$(target)
					.prepend(
						`<div class="row canvas-content-item">
							<div class="col-md-12">
								<div class="row">
									<div class="block-container pull-left"><div style="background:red;" class="color-block"></div></div>
									<div class="description pull-left"><strong>Bobby</strong></div>
									<div class="tooltip-container pull-right">
										<a href="#nowhere" class="open-tooltip-button" id="open-tooltip-button-10"><i class="icon icon-more-options"></i></a>
										<div class="custom-tooltip" id="custom-tooltip-10">
											<ul>

												<li><a href="">Edit</a></li>
												<li><a href="">Delete</a></li>
											</ul>
										</div>
									</div>
									<div class="timing pull-right">a minute ago</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="pull-left">${content}</div>
								</div>
							</div>
						</div>`);

				return;
			}
		});
	}

	function initEdits() {
		$('.edit-button').click(e => {
			e.preventDefault();
			const $target = $(e.target)
				.closest('.canvas-content-item')
				.find('.content');
			const content = $target.html();

			$target
				.removeClass('pull-left')
				.html(`<textarea>${content}</textarea><a href="#" class="btn submit-changes">Save changes</a>`);

			const $button = $target.find('a.btn.submit-changes');

			$button.click(evt => {
				evt.preventDefault();
				const $save = $(evt.target)
					.closest('.content');

				const changes = $save
					.find('textarea').val();

				$save.addClass('pull-left')
					.html(changes);
			});
		});
	}

	$(document).ready(() => {
		initSubmits();
		initEdits();
	});
})();

/*
<div class="row canvas-content-item">
	<div class="col-md-12">
		<div class="row">
			<div class="block-container pull-left"><div style="background:red;" class="color-block"></div></div>
			<div class="description pull-left"><strong>Bobby</strong></div>
			<div class="tooltip-container pull-right">
				<a href="#nowhere" class="open-tooltip-button" id="open-tooltip-button-1"><i class="icon icon-more-options"></i></a>
				<div class="custom-tooltip" id="custom-tooltip-1">
					<ul>

						<li><a href="">Edit</a></li>
						<li><a href="">Delete</a></li>
					</ul>
				</div>
			</div>
			<div class="timing pull-right">a minute ago</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="pull-left">${content}</div>
		</div>
	</div>
</div>
*/