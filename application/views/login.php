<!DOCTYPE html>
<html>
<base href="<?php echo base_url()?>">
<head>
	<title>Belajar</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<div class="container">
	<div class="row">
	<div class="col-md-4">
		
	</div>
		<div class="col-md-4 ">
			<div class="panel panel-success">
				<div class="panel-heading">
					Login
				</div>
				<div class="panel-body">
					<form method="post" action="login/do_login">
						<div class="form-group">
							<label>Usrname :</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password :</label>
							<input type="text" name="password" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-sm">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>
</html>