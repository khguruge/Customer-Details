<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Customer Detaile</title>
	<link rel="stylesheet" href="<?echo base_url('assets/css/main.css');?>"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


</head>
<body>


<div class="container">
	<h1 class="page-header text-center">Customer Details</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url('index.php/Users/addnew') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Contact Number</th>
						<th>Email</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<td><?php echo $user->ID; ?></td>
							<td><?php echo $user->name; ?></td>
							<td><?php echo $user->contact_number; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->address; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/Users/edit/<?php echo $user->ID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->ID; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>