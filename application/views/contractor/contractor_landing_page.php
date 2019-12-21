<?php include_once(APPPATH. 'views/template/header.php'); ?>
<?php include_once(APPPATH. 'views/template/nav-bar-normal.php'); ?>
<!-- Some designs -->
<div class="row">
	<div class="col-lg-4">
		<h2> Find job nearby.</h2>
		<p>Search for jobs around your locality.</p>
	</div>
	<div class="col-lg-4">
		<h2>Get connected to your clients.</h2>
		<p>Send chat messages, view phone numbers etc.</p>
	</div>
	<div class="col-lg-4">
		<h2>Read what clients say about you.</h2>
		<p>Do better job to get high ratings.</p>
	</div>
</div>
<br><br>

<!-- Login and Sign up Forms -->
<div class="row">
	<div class= "col-lg-6">

		<?php if ($check != 1): ?>
			
		<div>
			<h2> New Here?</h2>
			<p> Sign up today to grow your business.</p>
		</div>
		<?php include_once(APPPATH. 'views/contractor/contractor_sign_up_page.php'); ?>
			

		<?php endif; ?>

	</div>
	<div class= "col-lg-6">

		<?php if ($check ===1) { ?>

			<div>
			<h2> Account Created.</h2>
			<p> Login using you login details .</p>
		</div>
		
		<?php } else if($check == -1){ ?>
			<div class="d-flex flex-column">
		<div class="p-2 bg-warning">
			Login details incorrect or unregistered.
		</div>
	</div>
		<?php } else { ?>
			<div>
			<h2> Have an account already? </h2>
			<p> Login using you login details .</p>
		</div>
		

		<?php }?>
		
		<div class= "col-lg-4">
			<form method= "post" class="form-group" action= "<?php echo base_url(); ?>index.php/contractor_details/handle_contractor_login/">
		<div>
			<label for="contractor_login_portal_email">Enter your Email</label>
			<input type="text" class="form-control" name="contractor_login_portal_email">
		</div>

		<div class="form-group">
			<label for="contractor_login_portal_password">Enter your Password</label>
			<input type="password" class="form-control" name="contractor_login_portal_password">
		</div>
		</br>

		<input type="submit" id="submit" value="Submit" class="btn btn-default">

	</form>
		</div>
	</div>
</div>
<?php include_once(APPPATH. 'views/template/footer.php'); ?>