<?php
require 'libs/database/db.php';
$table = $db->query("SELECT * FROM hospital");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update Lokasi</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		
		<div class="jumbotron" style="text-align: center;background-color: rgb(3, 155, 229);color: white;">
			<h2><i class="glyphicon glyphicon-refresh"></i> Update Lokasi</h2>
		</div>

		<a href="index.php" class="text-info pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Back Home</a>
		<a href="input-data-rumah-sakit.php" class="text-info pull-right">Input Data Rumah Sakit <i class="glyphicon glyphicon-arrow-right"></i></a>
		<br><br>

		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>Nama Lokasi</th>
				<th>Alamat</th>
				<th>No Telp</th>
				<th>Action</th>
			</tr>
			<?php 
			$no = 1;
			while ($data = $table->fetch_assoc()){
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['placeName'] ?></td>
				<td><?= $data['placeAddress'] ?></td>
				<td><?= $data['placePhone'] ?></td>
				<td>
					<a href="halamanUpdate.php?id=<?= $data['hospitalID'] ?>"></i> Update
					</a>
				</td>
			</tr>
			<?php 
		}
		 ?>
		</table>

	</div>

	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>