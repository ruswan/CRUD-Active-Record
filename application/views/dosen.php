<!DOCTYPE html>
<html>
<head>
	<title>
		Daftar Dosen
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center><h3>Daftar Dosen</h3></center>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-success btn-sm" href="dosen/add">Tambah</a>
				<hr/>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>
								NIP
							</th>
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
						foreach ($dosen as $d) {
							?>
							<tr>
								<td>
									<?php echo $d->nip; ?>
								</td>
								<td>
									<?php echo $d->nama; ?>
								</td>
								<td>
									<?php echo $d->matkul; ?>
								</td>
								<td>
									<a class="btn btn-xs btn-success" href="dosen/edit/<?php echo $d->id; ?>">Edit</a>
									<a class="btn btn-xs btn-danger" href="dosen/delete/<?php echo $d->id; ?>">Delete</a>
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