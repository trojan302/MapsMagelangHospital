<?php
require 'libs/database/db.php';


if (!isset($_GET['id'])) {
	echo "<script>window.location.href='update.php';</script>";
}

$table 	= $db->query("SELECT * FROM hospital WHERE hospitalID='".$_GET['id']."'");
$data 	= $table->fetch_assoc();

// echo $data['placeName']."<br>";
// echo $data['placeAddress']."<br>";
// echo $data['placePhone']."<br>";
// echo "<img src='".$data['placePhoto']."' width='30%'><br>";
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

		<div class="jumbotron" style="text-align: center;color:white;background-color: rgb(3, 155, 229);">
			<h2><i class="glyphicon glyphicon-map-marker" style="color: red;"></i> <?= $data['placeName'] ?></h2>
		</div>

		<a href="update.php" class="text-info"><i class="glyphicon glyphicon-arrow-left"></i> Back to Update</a>

		<form action="prosesUpdate.php" method="POST" style="width: 80%;margin: auto;">
		  <div class="form-group">
		    <label>Nama Rumah Sakit</label>
		    <input type="text" class="form-control" name="placeName" value="<?= $data['placeName'] ?>">
		  </div>
		  <div class="form-group">
		    <label>Alamat</label>
		    <input type="text" class="form-control" name="placeAddress" value="<?= $data['placeAddress'] ?>">
		  </div>
		  <div class="form-group">
		    <label>No Phone</label>
		    <input type="text" class="form-control" name="placePhone" value="<?= $data['placePhone'] ?>">
		  </div>
		  <div class="form-group">
		    <label>URL Gambar</label>
		    <input type="text" class="form-control" name="placePhoto" value="<?= $data['placePhoto'] ?>">
		    <input type="hidden" name="hospitalID" value="<?= $data['hospitalID'] ?>">
		  </div>
		  <input type="submit" name="update" value="Update Data" class="btn btn-default">
		</form>

	</div>


</body>
</html>