<?php
require 'libs/database/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Layanan Kesehatan</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<div class="jumbotron" style="background-color:rgb(3, 155, 229);text-align: center;color:white;">
			<h3><i class="glyphicon glyphicon-plus" style="color:red;"></i> Data Rumah Sakit</h3>
			<p>Sistem Informasi Geografis</p>
		</div>

		<a href="update.php" class="text-info"><i class="glyphicon glyphicon-arrow-left"></i> Back to Update</a>

		<form action="prosesRS.php" method="POST">
			
			<div class="col-md-6">
				<h2>Data Ruangan</h2>
				<div class="form-group">
					<label>Nama Rumah Sakit</label>
					<select name="namaRS" class="form-control" required>
						<option value="">== Pilih Nama Rumah Sakit ==</option>
						<?php 
						// $sql = $db->query("SELECT * FROM hospital");
						// while ($row = $sql->fetch_assoc()) {
						?>
						<option value="1">Rumah Sakit Umum Tidar</option>
						<?php
						// }
						?>
					</select>
				</div>

				<div class="form-group">
					<label>Tipe Kelas</label>
					<input type="text" name="tipeKelas" class="form-control" placeholder="Masukkan Tipe Kelas" required>
				</div>

				<div class="form-group">
					<label>Nama Kelas</label>
					<input type="text" name="namaKelas" class="form-control" placeholder="Masukkan Nama Kelas" required>
				</div>

				<div class="form-group">
					<label>Nama Bangsal</label>
					<input type="text" name="namaBangsal" class="form-control" placeholder="Masukkan Nama Bangsal" required>
				</div>

				<h2>Jadwal Praktek Dokter</h2>
				<div class="form-group">
					<label>Poliklinik</label>
					<input type="text" class="form-control" name="poliklinik" placeholder="Masukkan Nama Poliklinik" required>
				</div>

				<div class="form-group">
					<label>Nama Dokter</label>
					<input type="text" name="namaDokter" class="form-control" placeholder="Masukkan Nama Dokter" required>
				</div>

				<div class="form-group">
					<label>Hari Praktek</label>
					<input type="text" name="hariPraktek" class="form-control" placeholder="Masukkan Hari Praktek" required>
				</div>

			</div>

			<div class="col-md-6">
				
				<h2>Pelayanan</h2>

				<div class="form-group">
					<label>Pelayanan Rawat Jalan</label>
					<textarea placeholder="Masukkan Nama - nama layanan rawat jalan" style="resize: none;" name="rawatJalan" cols="30" rows="10" class="form-control" required></textarea>
				</div>

				<div class="form-group">
					<label>Pelayanan Penunjang</label>
					<textarea placeholder="Masukkan Layanan Penunjang" style="resize: none;" name="layananPenunjang" cols="30" rows="10" class="form-control" required></textarea>
				</div>

			</div>

			<div class="col-md-12">
				
				<h2>Ambulance</h2>
				<div class="col-md-8">
					<label>Tipe Ambulance</label>
					<select name="tipeAmbulance" class="form-control" required>
						<option value="">-- Pilih Tipe Ambulance --</option>
						<option value="jenazah">Jenazah</option>
						<option value="pasien">Pasien</option>
					</select>
				</div>
				<div class="col-md-4">
					<label>Jumlah Ambulance</label>
					<input type="number" name="jumlahAmbulance" placeholder="Masukkan Jumlah Ambulance" min="1" max="20" class="form-control" required>
				</div>
				

				<input style="margin:50px 0px;" type="submit" name="inputDataRumahSakit" value="Input Data Rumah Sakit" class="btn btn-default">

			</div>

		</form>

	</div>
</body>
</html>