<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<div class="container">
	<h1>User Details</h1>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>UserName</td>
			<td>Password</td>
			<td>Age</td>
		</tr>
	
		<?php foreach($user_array as $key => $value):?>
		
		<tr>
			<td><?php echo $value->id; ?></td>
			<td><?php echo $value->username; ?></td>
			<td><?php echo $value->password; ?></td>
			<td><?php echo $value->age; ?></td>
		</tr>

	<?php endforeach; ?>

</div>
