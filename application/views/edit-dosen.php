<!DOCTYPE html>
<html>
<base href="<?php echo base_url()?>">
<head>
	<title>Belajar</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center><h3>Edit Dosen</h3></center>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post"  action="dosen/update_data/<?php echo $dosen->id; ?>">
					<div class="form-group">
						<label>NIP :</label>
						<input class="form-control" value="<?php echo $dosen->nip; ?>" type="text" name="nip">
					</div>
					<div class="form-group">
						<label>Nama :</label>
						<input class="form-control" value="<?php echo $dosen->nama; ?>" type="text" name="nama">
					</div>
					<div class="form-group">
						<label>Mata Kuliah :</label>
						<input class="form-control" value="<?php echo $dosen->matkul; ?>" type="text" name="matkul">
					</div>
					<button class="btn btn-success" type="submit">Edit</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>