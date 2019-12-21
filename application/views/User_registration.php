<div class="row">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	<form method= "post" class="form-group" action= "<?php echo base_url(); ?>index.php/user_details/handle_user_registration/">
		<div>
			<label for="user_registration_form_full_name">Enter your full name</label>
			<input type="text" class="form-control" name="user_registration_form_full_name">
		</div>

		<div class="form-group">
			<label for="user_registration_form_email">Enter your Email</label>
			<input type="email" class="form-control" name="user_registration_form_email">
		</div>
		<div>
			<label for="user_registration_form_password">Enter your Password</label>
			<input type="text" class="form-control" name="user_registration_form_password">
		</div>

		<div>
			<label for="user_registration_form_re_password">Re-enter your Password</label>
			<input type="text" class="form-control" name="user_registration_form_re_password">
		</div>

		<div>
			<label for="user_registration_form_address">Enter your Address</label>
			<input type="text" class="form-control" name="user_registration_form_address">
		</div>

		<div>
			<label for="user_registration_form_suburb">Suburb</label>
			<input type="text" class="form-control" name="user_registration_form_suburb">

			<label for="user_registration_form_postcode">Postcode</label>
			<input type="text" class="form-control" name="user_registration_form_postcode">

			<label for="user_registration_form_state">State</label>
			<input type="text" class="form-control" name="user_registration_form_state">
		</div></br>

		<input type="submit" id="submit" value="Submit" class="btn btn-default">

	</form>
</div>
<div class="col-lg-4">
	</div>
</div>
