<?php include_once(APPPATH. 'views/template/nav-bar-contractor.php'); ?>
<div class="row">
	<?php foreach($result_array as $key => $value): ?>
	<?php echo "Welcome! ".$value->contractor_full_name; ?>
	<?php endforeach; ?>
</div>
<?php include_once(APPPATH. 'views/template/footer.php'); ?>