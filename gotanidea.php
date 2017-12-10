<div class="content" style="">

	<img class='hero' src="/static/img/footer-logo.svg" style="max-width: 300px; margin-top: 0rem; margin-bottom: 4.5rem;">
	<div class="our-focus">
		<p>OUR TEAM LOVES NOTHING MORE THAN HEARING NEW IDEAS, AND TURNING THEM INTO REALITY! WE’D LOVE TO HEAR YOUR IDEA!</p>
	</div>

	<form class="form" action="https://formspree.io/Yair@AltmarkVentures.com" method="POST">
	<div class="form-group row">
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">First name</label>
			<input required class="form-control" name="First" type="text" value="" placeholder="Jane">
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">Last name</label>
			<input required class="form-control" name="Last" type="text" value="" placeholder="Doe">
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">email</label>
			<input required class="form-control" name="Email" type="text" value="" placeholder="jane@example.com">
		</div>

		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">company name</label>
			<input required class="form-control" name="Company" type="text" value="" placeholder="Example">
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">company website</label>
			<input required class="form-control" name="Website" type="text" value="" placeholder="example.com">
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">city</label>
			<input required class="form-control" name="City" type="text" value="" placeholder="New York">
		</div>

		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">short pitch</label>
			<input required class="form-control" name="Pitch" type="text" value="" placeholder="Fill in">
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">sector</label>
			<select required class="form-control" name="Sector">
				<option value="">Select One</option>
				<option>Blockchain Tech</option>
				<option>Algorithmic Trading</option>
				<option>Human Trading</option>
				<option>Mining</option>
				<option>Cryptocurrency</option>
				<option>Other</option>
			</select>
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">Who reffered you? <small>(Optional)</small></label>
			<input class="form-control" name="Referred by" type="text" value="" placeholder="Satoshi Nakamoto">
		</div>

		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">Capital $ Desired</label>
			<input required class="form-control" name="Capital Desired" type="number" value="" placeholder="50000">
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">Stage</label>
			<select required class="form-control" name="Stage">
				<option value="">Select One</option>
				<option>Pre Seed</option>
				<option>Seed</option>
				<option>Series A</option>
				<option>Series B</option>
				<option>Series C</option>
			</select>
		</div>
		
		<div class="col-md-4" class="form-col">
			<label class="form-label" style="text-align: left;">Upload Deck <small>(Optional)</small></label>
			<input type="hidden" role="uploadcare-uploader" name="Deck" data-multiple="true" />
		</div>


		<button type="submit" class="btn btn-default">Submit</button>

	</div>
</form>

</div>

<script>
  UPLOADCARE_LOCALE = "en";
  UPLOADCARE_TABS = "file url gdrive dropbox flickr";
  UPLOADCARE_PUBLIC_KEY = "b65e6bdd29585b0a8280";
</script>
<script charset="utf-8" src="//ucarecdn.com/libs/widget/3.2.1/uploadcare.full.min.js"></script>

