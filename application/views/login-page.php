<?php include_once(APPPATH. '/views/template/header.php');?>
<?php include_once(APPPATH. '/views/template/nav-bar-normal.php');?>

<?php if($check == 1) { ?>

	<div class="d-flex flex-column">
		<div class="p-2 bg-warning">
			Congratulations. You are now registered. Please login using your email and password.
		</div>
	</div>
<?php } ?>

<?php if($check == -1) { ?>

	<div class="d-flex flex-column">
		<div class="p-2 bg-warning">
			Sorry user email and/or password do not exist. Please retry or sign up.
		</div>
	</div>
<?php } ?>

</div>
<div class="row">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	<form method= "post" class="form-group" action= "<?php echo base_url(); ?>index.php/user_details/handle_user_login/">
		<div>
			<label for="user_registration_form_full_name">Enter your Email</label>
			<input type="text" class="form-control" name="user_login_portal_email">
		</div>

		<div class="form-group">
			<label for="user_registration_form_email">Enter your Password</label>
			<input type="password" class="form-control" name="user_login_portal_password">
		</div>
		</br>

		<input type="submit" id="submit" value="Submit" class="btn btn-default">

	</form>
</div>
<div class="col-lg-4">
	</div>
</div>
<?php include_once(APPPATH. '/views/template/footer.php');?>
