<section class="user-settings-content">
	<ul class="menu-subpage">
		<li id="link-to-subpage-1" class="link-to-subpage active">General</li>
		<li id="link-to-subpage-2" class="link-to-subpage">Syncing</li>
	</ul>

	<form>
		<section id="subpage-1" class="subpage active">
			<article class="block-line large">
				<div class="content form-section">
					<fieldset>
						<label for="receiving-notifications" class="header-medium secondary">Receiving notifications</label>

						<div class="row">
							<div class="col-sm-6">
								<div class="select-dropdown">
									<div class="icon-size-s icon-arrowdown"></div>
									<select name="receiving-notifications" id="receiving-notifications" onchange="" size="1">
										<option value="immediately" selected>Immediately</option>
										<option value="2">Option 2</option>
									</select>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset class="fieldset-checkbox">
						<label class="header-medium secondary">Notifications</label>

						<div class="input-container">
							<label for="notifications-when-invited"><input type="checkbox" name="notifications-when" value='notifications-when-invited' id="notifications-when-invited"><span></span>When invited</label>

							<label for="notifications-when-campaign-closing"><input type="checkbox" name="notifications-when" value='notifications-when-campaign-closing' id="notifications-when-campaign-closing"><span></span>Campaign closing</label>
						</div>
					</fieldset>

					<fieldset class="fieldset-radio">
						<label for="notifications-by-email-yes" class="header-medium secondary">Notifications by e-mail</label>

						<div class="input-container">
							<label for="notifications-by-email-yes"><input type="radio" name="notifications-by" value='notifications-by-email-yes' id="notifications-by-email-yes"><span></span>Yes</label>

							<label for="notifications-by-email-after-having-responded"><input type="radio" name="notifications-by" value='notifications-by-email-after-having-responded' id="notifications-by-email-after-having-responded"><span></span>After having responded</label>
					</fieldset>
				</div>
			</article>
		</section>

		<section id="subpage-2" class="subpage">
			<article class="block-line large">
				<div class="content form-section">
					<div class="vertical-align">
						<div class="middle">
							<fieldset>
								<label for="syncing-receiving-notifications" class="header-medium secondary">Receiving notifications</label>

								<div class="select-dropdown">
									<div class="icon-size-s icon-arrowdown"></div>
									<select name="syncing-receiving-notifications" id="syncing-receiving-notifications" onchange="" size="1">
										<option value="facebook" selected>Facebook</option>
										<option value="2">Option 2</option>
									</select>
								</div>
							</fieldset>
						</div>

						<div class="middle">
							<a href="#nowhere" class="btn">Sync service</a>
						</div>
					</div>

					<a href="#nowhere" class="btn-green"><div class="icon-add"></div>Add service</a>
				</div>
			</article>
		</section>
	</form>
</section>