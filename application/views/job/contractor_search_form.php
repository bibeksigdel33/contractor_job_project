<?php include_once(APPPATH.'views/template/header.php'); ?>
<?php include_once(APPPATH.'views/template/nav-bar-user.php'); ?>
<div class="row">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
		<form method="post" action="<?php echo base_url();?>index.php/Job_Controller/search_contractor">
			<div>
				<label for="contractor_search_form_service_category">Select Category</label><br>
				<select class="form-control" name="contractor_search_form_service_category" id="contractor_search_form_service_category">
					<option value="">Select Category</option>
					<?php foreach ($service_category as $key => $value):
						
						echo '<option value="'.$value->service_category.'">'.$value->service_category.'</option>'; 
					 
					 endforeach; ?>
				</select>
			</div>
			<div>
				<label for ="contractor_search_form_service_profession">Select Profession</label><br>
				<select class="form-control" name="contractor_search_form_service_profession" id="contractor_search_form_service_profession">
					<option value="">Select Profession</option>
				</select>
			</div>
			<div>
				<label for = "suburb_postcode">Suburb</label>
				<input class="form-control" name="contractor_search_form_suburb">
			</div>
			<br><br>
			<submit class="btn btn-primary" name="submit" value="submit">Search</submit>
		</form>
	</div>
	<div class="col-lg-4">

	</div>
</div>

<?php include_once(APPPATH.'views/template/footer.php'); ?>
<script>
$(document).ready(function() {
	$('#contractor_search_form_service_category').change(function() {
		var service_category = $('#contractor_search_form_service_category').val();
		$.ajax({
			url: "<?php echo base_url(); ?>index.php/Job_Controller/get_profession_list",
			method: "POST",
			data: {service_category: service_category},
			success: function(data) 
			{

				$('#contractor_search_form_service_profession').html(data);
			}
		})
	});
});
</script>