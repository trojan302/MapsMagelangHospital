<?php

require 'libs/database/db.php';

$table = $db->query("SELECT * FROM hospital");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hapus Lokasi</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		
		<div class="jumbotron" style="background-color: #2980b9;color:white;text-align: center;">
			<h2><i class="glyphicon glyphicon-trash"></i> Hapus Lokasi</h2>
			<p>Sistem Informasi Geografis Rumah Sakit di Magelang</p>
		</div>

		<a href="index.php" class="text-info"><i class="glyphicon glyphicon-arrow-left"></i> Back Home</a>
		<br><br>

		<table class="table table-striped table-hover">
			<tr style="background-color: #2c3e50;color: white;">
				<th>No</th>
				<th>Nama Lokasi</th>
				<th>Action</th>
			</tr>

			<?php 
			$no = 1;
			while ($data = $table->fetch_assoc()){
			?>

			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['placeName'] ?></td>
				<td>
				<a href="?id=<?= $data['hospitalID'] ?>" class="btn btn-sm btn-danger">
				<i class="glyphicon glyphicon-trash"></i> Hapus
				</a>
				</td>
			</tr>

			<?php 
			}

			if (isset($_GET['id'])) {
			 	
			 	$del = $db->query("DELETE FROM hospital WHERE hospitalID = '".$_GET['id']."'");

			 	if ($del) {
			 		echo "<script>alert('Data Berhasil dihapus')</script>";
			 		echo "<script>window.location.href='index.php';</script>";
			 	}

			 } 

			?>
		</table>

	</div>


	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>