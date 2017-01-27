<!DOCTYPE html>
<html>
<base href="<?php echo base_url()?>">
<head>
	<title>Belajar</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center><h3>Tambah Mahasiswa</h3></center>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post"  action="belajar/update_data/<?php echo $mahasiswa->id; ?>">
					<div class="form-group">
						<label>NIM :</label>
						<input class="form-control" value="<?php echo $mahasiswa->nim; ?>" type="text" name="nim">
					</div>
					<div class="form-group">
						<label>Nama :</label>
						<input class="form-control" value="<?php echo $mahasiswa->nama; ?>" type="text" name="nama">
					</div>
					<div class="form-group">
						<label>Semester :</label>
						<input class="form-control" value="<?php echo $mahasiswa->semester; ?>" type="text" name="semester">
					</div>
					<button class="btn btn-success" type="submit">Edit</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>