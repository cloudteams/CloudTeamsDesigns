<section class="developer-dashboard-project-blog">
	<article class="block block-line large">
		<header class="article-header">
			<div class="vertical-align">
				<div class="middle">
					<i class="icon icon-user"></i>
					<h2 class="header-medium secondary">Basic information</h2>
				</div>
				<div class="middle">
				</div>
			</div>
		</header>
		<form>
			<div class="content project-choices">
				<fieldset class="form-group required">
					<label for="project-title" class="header-medium secondary control-label">Blog title</label>
					<div class="input-container">
						<i class="icon icon-edit"></i>
						<input id="project-title" type="text" name="project title" value="Project 1" placeholder="Blog title">
					</div>
				</fieldset>

				<fieldset class="form-group required">
					<label for="visibility" class="header-medium secondary control-label">URL</label>
					<div class="input-container">
						<i class="icon icon-edit"></i>
						<input id="project-title" type="text" name="project title" value="Project 1" placeholder="URL">
					</div>
				</fieldset>

				<fieldset class="form-group required">
					<label for="birth-year" class="header-medium secondary control-label">Date of publication</label>
					<div class="row">
						<div class="col-sm-4">
							<div class="select-dropdown">
								<i class="icon icon-arrow-down"></i>
								<select name="birth-year" id="birth-year" onchange="" size="1">
									<option value="" disabled selected>Year</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
									<option value="1997">1997</option>
									<option value="1996">1996</option>
									<option value="1995">1995</option>
									<option value="1994">1994</option>
									<option value="1993">1993</option>
									<option value="1992">1992</option>
									<option value="1991">1991</option>
									<option value="1990">1990</option>
									<option value="1989">1989</option>
									<option value="1988">1988</option>
									<option value="1987">1987</option>
									<option value="1986">1986</option>
									<option value="1985">1985</option>
									<option value="1984">1984</option>
									<option value="1983">1983</option>
									<option value="1982">1982</option>
									<option value="1981">1981</option>
									<option value="1980">1980</option>
									<option value="1979">1979</option>
									<option value="1978">1978</option>
									<option value="1977">1977</option>
									<option value="1976">1976</option>
									<option value="1975">1975</option>
									<option value="1974">1974</option>
									<option value="1973">1973</option>
									<option value="1972">1972</option>
									<option value="1971">1971</option>
									<option value="1970">1970</option>
									<option value="1969">1969</option>
									<option value="1968">1968</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="select-dropdown">
								<i class="icon icon-arrow-down"></i>
								<select name="birth-month" id="birth-month" onchange="" size="1">
									<option value="" disabled selected>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="select-dropdown">
								<i class="icon icon-arrow-down"></i>
								<select name="birth-day" id="birth-day" onchange="" size="1">
									<option value="" disabled selected>Day</option>
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
									<option value="06">6</option>
									<option value="07">7</option>
									<option value="08">8</option>
									<option value="09">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset class="form-group required">
					<label for="project-description" class="header-medium secondary control-label">Article</label>
					<div class="input-container">
						<i class="icon icon-edit"></i>
						<textarea id="project-description" rows="10"></textarea>
					</div>
				</fieldset>

				<div class="row">
					<div class="col-md-12">
						<fieldset class="form-group form-submit">
							<a href="/views/logged-in/projects/project/blogpost" target="_blank" class="preview-link">Preview blogpost</a>
							<a href="/views/developer/dashboard/projects/project/blog/" class="btn-transparent" alt="cancel">Cancel</a>
							<a href="#nowhere" class="btn confirm-button" alt="save">Save</a>
						</fieldset>
					</div>
				</div>

			</div>
		</form>
	</article>
</section>