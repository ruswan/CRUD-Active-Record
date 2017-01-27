<!DOCTYPE html>
<html>
<base href="<?php echo base_url()?>">
<head>
	<title>Belajar</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center><h3>Belajar CRUD</h3></center>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-sm btn-success" href="belajar/add">Tambah</a>
				<hr/>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>
								ID
							</th>
							<th>
								NIM
							</th>
							<th>
								Nama
							</th>
							<th>
								Semester
							</th>
							<th>
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($mahasiswa as $m ) {
							?>

							<tr>
								<td>
									<?php echo $m->id;	?>
								</td>
								<td>
									<?php echo $m->nim;	?>
								</td>
								<td>
									<?php echo $m->nama;	?>
								</td>
								<td>
									<?php echo $m->semester;	?>
								</td>
								<td>
									<a class="btn btn-xs btn-success" href="belajar/edit/<?php echo $m->id; ?>">Edit</a>
									<a class="btn btn-xs btn-danger" href="belajar/delete/<?php echo $m->id; ?>">Hapus</a>
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