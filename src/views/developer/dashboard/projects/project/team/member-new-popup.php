<!-- Pop-up modal: team member add user -->
<div class="popup-team-member-add-new modal fade" role="dialog">
	<a href="#nowhere"></a>

	<div id="new-team-member" class="modal-dialog medium">

		<!-- Modal content-->
		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-team"></i>
						<h2 class="header-medium secondary">Invite new team member</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">
				<div class="row">
					<ul class="menu-subpage">
						<li id="link-to-subpage-1" class="link-to-subpage active">Manually</li>
						<li id="link-to-subpage-2" class="link-to-subpage">Address book</li>
						<li id="link-to-subpage-3" class="link-to-subpage">Search</li>
					</ul>
					<hr>
					<section id="subpage-1" class="subpage active">
						<div class="subpage-wrapper">
							<form id="manual-invite">
								<fieldset class="form-group required">
									<label for="new-member-name" class="control-label header-medium secondary">New team member name </label>

									<div class="input-container">
										<input id="new-member-name" type="text" name="Name of new team member" placeholder="E.g. Rick Astley">
									</div>
								</fieldset>

								<fieldset class="form-group required">
									<label for="new-member-name" class="control-label header-medium secondary">New team member email </label>

									<div class="input-container">
										<input id="new-member-name" type="text" name="Email of new team member" placeholder="E.g. nevergonnagive@you.up">
									</div>
								</fieldset>

								<fieldset class="form-group required">
									<label for="new-member-name" class="control-label header-medium secondary">New team member role </label>

									<div class="select-dropdown">
										<i class="icon icon-arrow-down"></i>
										<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
											<option value="" disabled="" selected="">Member role</option>
											<option value="front">Front-end Developer</option>
											<option value="back">Back-end Developer</option>
											<option value="manager">Project Manager</option>
											<option value="content">Content Manager</option>
											<option value="interaction">Interaction Designer</option>
											<option value="visual">Visual Interface Designer</option>
											<option value="marketing">Online Marketeer</option>
										</select>
									</div>
								</fieldset>

								<hr class="form-group">

								<fieldset class="form-group form-submit">
									<a href="#nowhere" data-dismiss="modal" class="btn-transparent" alt="cancel">Skip</a>
									<a href="#nowhere" class="btn confirm-button" alt="submit invite">Send invite</a>
								</fieldset>

								<div class="pop-up sending-wrapper" style='display: none;'>
									<div class="vertical-align">
										<div class="middle">
											<i class="icon icon-team"></i>
											<p class="meta big">Sending your invitation</p>
										</div>
									</div>
								</div>

								<div class="pop-up confirm-wrapper" style='display: none;'>
									<div class="vertical-align">
										<div class="middle">
											<i class="icon icon-check"></i>
											<p class="meta big">Your invite has been send</p>
										</div>
									</div>
								</div>
							</form>							
						</div>
					</section>

					<section id="subpage-2" class="subpage">
						<div class="row">
							<section class="team-member-invite">
								<div class="vertical-align">
									<div class="middle">
										<div class="img-circle" style='background-image: url("[[../../../../../../img/profile-picture-small.jpg]]")'></div>
									</div>

									<div class="middle member-name">
										<h2 class="header-medium secondary">Elly Borough</h2>
									</div>

									<div class="middle">
										<div class="select-dropdown">
											<i class="icon icon-arrow-down"></i>
											<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
												<option value="" disabled="" selected="">Member role</option>
												<option value="front">Front-end Developer</option>
												<option value="back">Back-end Developer</option>
												<option value="manager">Project Manager</option>
												<option value="content">Content Manager</option>
												<option value="interaction">Interaction Designer</option>
												<option value="visual">Visual Interface Designer</option>
												<option value="marketing">Online Marketeer</option>
											</select>
										</div>
									</div>

									<div class="middle">
										<a href="#nowhere" class="btn invite-button" alt="submit invite">Send invite</a>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="team-member-invite">
								<div class="vertical-align">
									<div class="middle">
										<div class="img-circle" style='background-image: url("[[../../../../../../img/profile-picture-small.jpg]]")'></div>
									</div>

									<div class="middle member-name">
										<h2 class="header-medium secondary">Bob Davids</h2>
									</div>

									<div class="middle">
										<div class="select-dropdown">
											<i class="icon icon-arrow-down"></i>
											<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
												<option value="" disabled="" selected="">Member role</option>
												<option value="front">Front-end Developer</option>
												<option value="back">Back-end Developer</option>
												<option value="manager">Project Manager</option>
												<option value="content">Content Manager</option>
												<option value="interaction">Interaction Designer</option>
												<option value="visual">Visual Interface Designer</option>
												<option value="marketing">Online Marketeer</option>
											</select>
										</div>
									</div>

									<div class="middle">
										<a href="" class="btn invite-button" alt="submit invite">Send invite</a>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="team-member-invite">
								<div class="vertical-align">
									<div class="middle">
										<div class="img-circle" style='background-image: url("[[../../../../../../img/profile-picture-small.jpg]]")'></div>
									</div>

									<div class="middle member-name">
										<h2 class="header-medium secondary">David Hamilton</h2>
									</div>

									<div class="middle">
										<div class="select-dropdown">
											<i class="icon icon-arrow-down"></i>
											<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
												<option value="" disabled="" selected="">Member role</option>
												<option value="front">Front-end Developer</option>
												<option value="back">Back-end Developer</option>
												<option value="manager">Project Manager</option>
												<option value="content">Content Manager</option>
												<option value="interaction">Interaction Designer</option>
												<option value="visual">Visual Interface Designer</option>
												<option value="marketing">Online Marketeer</option>
											</select>
										</div>
									</div>

									<div class="middle">
										<a href="" class="btn invite-button" alt="submit invite">Send invite</a>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="team-member-invite">
								<div class="vertical-align">
									<div class="middle">
										<div class="img-circle" style='background-image: url("[[../../../../../../img/profile-picture-small.jpg]]")'></div>
									</div>

									<div class="middle member-name">
										<h2 class="header-medium secondary">Helena van der Bergen</h2>
									</div>

									<div class="middle">
										<div class="select-dropdown">
											<i class="icon icon-arrow-down"></i>
											<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
												<option value="" disabled="" selected="">Member role</option>
												<option value="front">Front-end Developer</option>
												<option value="back">Back-end Developer</option>
												<option value="manager">Project Manager</option>
												<option value="content">Content Manager</option>
												<option value="interaction">Interaction Designer</option>
												<option value="visual">Visual Interface Designer</option>
												<option value="marketing">Online Marketeer</option>
											</select>
										</div>
									</div>

									<div class="middle">
										<a href="" class="btn invite-button" alt="submit invite">Send invite</a>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<div class="vertical-align">
								<div class="middle">
									<a href="#nowhere"><h2 class="header-medium secondary load-more">Load more contacts</h2></a>
								</div>
							</div>
						</div>
					</section>

					<section id="subpage-3" class="subpage">
						<fieldset class="form-group form-search">
							<div class="vertical-align">
								<label for="new-member-name" class="control-label header-medium secondary">Search for a member</label>
							</div>
							<div class="vertical-align">
								<div class="middle">
									<div class="input-container search-member-container">
										<input class="input-search" value="Jen" id="new-member-name" type="text" name="Name of new team member" placeholder="Type a name">
									</div>								
								</div>
								<div class="middle">
									<a href="" class="btn" alt="submit invite">Search</a>
								</div>
							</div>
						</fieldset>
						<hr>
						<div class="row">
							<section class="team-member-invite">
								<div class="vertical-align">
									<div class="middle">
										<div class="img-circle" style='background-image: url("[[../../../../../../img/profile-picture-small.jpg]]")'></div>
									</div>

									<div class="middle member-name">
										<h2 class="header-medium secondary">Helena van der Bergen</h2>
									</div>

									<div class="middle">
										<div class="select-dropdown">
											<i class="icon icon-arrow-down"></i>
											<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
												<option value="" disabled="" selected="">Member role</option>
												<option value="front">Front-end Developer</option>
												<option value="back">Back-end Developer</option>
												<option value="manager">Project Manager</option>
												<option value="content">Content Manager</option>
												<option value="interaction">Interaction Designer</option>
												<option value="visual">Visual Interface Designer</option>
												<option value="marketing">Online Marketeer</option>
											</select>
										</div>
									</div>

									<div class="middle">
										<a href="" class="btn invite-button" alt="submit invite">Send invite</a>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="team-member-invite middle">
								<div class="vertical-align">
									<div class="middle">
										<div class="img-circle" style='background-image: url("[[../../../../../../img/profile-picture-small.jpg]]")'></div>
									</div>

									<div class="middle member-name">
										<h2 class="header-medium secondary">Francis Potter</h2>
									</div>

									<div class="middle">
										<div class="select-dropdown">
											<i class="icon icon-arrow-down"></i>
											<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
												<option value="" disabled="" selected="">Member role</option>
												<option value="front">Front-end Developer</option>
												<option value="back">Back-end Developer</option>
												<option value="manager">Project Manager</option>
												<option value="content">Content Manager</option>
												<option value="interaction">Interaction Designer</option>
												<option value="visual">Visual Interface Designer</option>
												<option value="marketing">Online Marketeer</option>
											</select>
										</div>
									</div>

									<div class="middle">
										<a href="" class="btn invite-button" alt="submit invite">Send invite</a>
									</div>
								</div>
							</section>
						</div>
					</section>			
				</div>
			</div>
		</div>
	</div>
</div>