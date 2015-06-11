<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/bootstrap.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/bootstrap.min.css' ?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
					   <form action="<?php echo base_url().'user/register' ?>" method="POST" role="form">
					   	<legend>Form Register</legend>
					   
					   	<div class="form-group">
					   		<label for="">Username</label>
					   		<input type="text" name="username" class="form-control" id="" placeholder="Input field">
					   	</div>

					   	<div class="form-group">
					   		<label for="">Password</label>
					   		<input type="password" name="password" class="form-control" id="" placeholder="Input field">
					   	</div>

					   	<input type="submit" name="ok" class="btn btn-primary" value="Submit">

					   </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>