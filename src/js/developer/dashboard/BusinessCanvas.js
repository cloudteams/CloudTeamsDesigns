/* global $ */

(function() {
	function initSubmits() {
		$('.new-option a').click(e => {
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
						</div>`);

				return;
			}
		});
	}

	$(document).ready(() => {
		initSubmits();
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