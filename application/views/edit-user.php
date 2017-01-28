<!DOCTYPE html>
<html>
<base href="<?php echo base_url()?>">
<head>
	<title>Belajar</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center><h3>Edit User</h3></center>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post"  action="user/update_data/<?php echo $user->id; ?>">
					<div class="form-group">
						<label>Username :</label>
						<input class="form-control" value="<?php echo $user->username; ?>" type="text" name="username">
					</div>
					<div class="form-group">
						<label>Password :</label>
						<input class="form-control"  type="text" name="password">
					</div>
					
					<button class="btn btn-success" type="submit">Edit</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>