<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<center><h1>Admin Log In </h1></center>
			
		</div>
		
		<div class="form-group">
			<label for="name" class="control-label col-md-4">User Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
				
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4"></label>
			<div class="col-md-4">
				
				 <input type="submit" name="submit" class="btn btn-primary">
			</div>
		</div>
		
	</form>

