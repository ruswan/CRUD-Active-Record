<!DOCTYPE html>
<html>
<head>
	<title>
		Daftar User
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center><h3>Daftar User</h3></center>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-success btn-sm" href="user/add">Tambah</a>
				<a class="btn btn-danger btn-sm" href="login/logout">Keluar</a>
				<hr/>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>
								Nama
							</th>
							<th>
								Mata Kuliah
							</th>
							<th>
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($user as $u) {
							?>
							<tr>
								<td>
									<?php echo $u->username; ?>
								</td>
								<td>
									<?php echo $u->password; ?>
								</td>
								<td>
									<a class="btn btn-xs btn-success" href="User/edit/<?php echo $u->id; ?>">Edit</a>
									<a class="btn btn-xs btn-danger" href="User/delete/<?php echo $u->id; ?>">Delete</a>
								</td>
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