<?php include_once(APPPATH. '/views/template/header.php');?>

<?php include_once(APPPATH. '/views/template/nav-bar-user.php');?>

<?php foreach($result_array as $key => $value):?>

	<?php echo $value->user_full_name; ?>
	<div class= "row">
		<a href="<?php echo base_url(); ?>index.php/User_details/show_contractor_search_form">Search Local Contractor</a>
	</div>

<?php endforeach;?>

<?php include_once(APPPATH. '/views/template/footer.php');?>