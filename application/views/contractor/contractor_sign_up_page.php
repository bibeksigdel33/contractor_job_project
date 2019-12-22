<div class="row">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	<form method= "post" class="form-group" action= "<?php echo base_url(); ?>index.php/contractor_details/handle_contractor_registration/">
		<div>
			<label for="contractor_registration_form_full_name">Enter your full name</label>
			<input type="text" class="form-control" name="contractor_registration_form_full_name">
		</div>

		<div class="form-group">
			
			<label for="contractor_registration_form_email">Enter your Email</label>
			<input type="email" class="form-control" id = "contractor_registration_form_email" name="contractor_registration_form_email">
			<div class="alert alert-danger" id="contractor_registration_form_incorrect_email_banner">
				<strong>Email already registered or incorrect email</strong>
			</div>
		</div>
		<div>
			<label for="contractor_registration_form_password">Enter your Password</label>
			<input type="text" class="form-control" name="contractor_registration_form_password">
		</div>

		<div>
			<label for="contractor_registration_form_re_password">Re-enter your Password</label>
			<input type="text" class="form-control" name="contractor_registration_form_re_password">
		</div>

		<div>
			<label for="contractor_registration_form_address">Enter your Address</label>
			<input type="text" class="form-control" name="contractor_registration_form_address">
		</div>

		<div>
			<label for="contractor_registration_form_suburb">Suburb</label>
			<input type="text" class="form-control" name="contractor_registration_form_suburb">

			<label for="contractor_registration_form_postcode">Postcode</label>
			<input type="text" class="form-control" name="contractor_registration_form_postcode">

			<label for="contractor_registration_form_state">State</label>
			<select class="form-control" name="contractor_registration_form_state">
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="VIC">VIC</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="WA">WA</option>
				<option value="ACT">ACT</option>
				<option value="NT">NT</option>
			</select>
		</div>

		<div>
			<label for="contractor_registration_form_service_category">Enter your Service Category</label>
			<select class="form-control" id="contractor_registration_form_service_category" name= "contractor_registration_form_service_category">
				<option value="">Select Category</option>

				<?php foreach($contractor_categories as $key=> $value):?>

					<option value="<?php echo $value->service_category; ?>"><?php echo $value->service_category; ?></option>
				
				<?php endforeach;?>
			
			</select>
		</div>

		<div>
			<label for="contractor_registration_form_profession">Enter your Profession</label>
			<select class="form-control" id="contractor_registration_form_profession" name="contractor_registration_form_profession">
				<option value="">Select Profession</option>
				
			</select>
		</div>
	</br>

		<input type="submit" id="submit_registration" value="SignUp" class="btn btn-default">

	</form>
</div>
<div class="col-lg-4">
	</div>
</div>
<?php include_once(APPPATH. '/views/template/footer.php');?>
<script src = "<?php echo base_url();?>js/contractor_registration_validation.js"></script>
<script>
	$(document).ready(function() {
		$('#contractor_registration_form_service_category').change(function() {
			var service_category = $('#contractor_registration_form_service_category').val();
			$.ajax({
				url:"<?php echo base_url(); ?>index.php/Job_Controller/get_profession_list",
				method:"POST",
				data:{service_category: service_category},
				success: function(data) {
					$('#contractor_registration_form_profession').html(data);
				}
			})
		});
	});
</script>
