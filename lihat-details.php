<?php 

require 'libs/database/db.php';

$slug = "Rumah Sakit Umum Tidar";

if (!isset($slug)) {
	header('Location: index.php');
}

$cek = $db->query("SELECT * FROM hospital WHERE placeName='$slug'");
$exists = mysqli_num_rows($cek);

if ($exists < 1) {
	echo "<h1>Not Found!</h1>";
	die();
}

$data = $cek->fetch_assoc();
$hospitalID = $data['hospitalID'];

$results = $db->query("SELECT * FROM HospitalServices WHERE hospitalID='$hospitalID'");
$getData = $results->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Layanan Kesehatan - <?= $data['placeName'] ?></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<div class="jumbotron" style="background-color:rgb(3, 155, 229);text-align: center;color:white;">
			<h3><i class="glyphicon glyphicon-plus" style="color:red;"></i> <?= $data['placeName'] ?></h3>
		</div>

		<a href="update.php" class="text-info"><i class="glyphicon glyphicon-arrow-left"></i> Back to Update</a>

		<div class="row">
			<div class="col-md-4">
				<img src="<?= $data['placePhoto'] ?>" alt="<?= $data['placeName'] ?>" style="width: 100%;margin:5px;">
			</div>
			<div class="col-md-8">
				<h2><?= $data['placeName']; ?></h2>
				<hr>
				<p class="text-justify" style="text-indent: 50px;"><span>Hallo Bebek!.</span>
				<span>Porro inventore libero quo quis quas, excepturi natus amet, dolor. Non commodi, recusandae cumque distinctio et aperiam, dolorum rem aliquam illum necessitatibus ratione quidem libero accusantium ducimus eos. Aspernatur, sed!</span>
				<span>Nemo, expedita quo aliquam odio numquam reiciendis minus minima eius consectetur pariatur dolore nobis aliquid aperiam esse labore perferendis illum incidunt? Aut, temporibus. Esse reprehenderit porro autem unde soluta magni.</span>
				<span>Tempora saepe repudiandae enim vero, fugiat, et similique. Accusamus similique non eligendi ab modi eos a quasi sit sequi animi. Alias consequuntur nostrum numquam ullam autem quae ratione natus atque.</span>
				<span>Aspernatur, ea! Laborum saepe assumenda quo! Molestias asperiores commodi autem est, ea assumenda, ipsa porro quisquam, perspiciatis totam iste tempora dolor minima, sit velit quod odit iure incidunt. Ex, aut?</span></p>

				<table class="table">
					<tr>
						<th style="width: 20%">Tipe Kelas</th>
						<td>: <?= $getData['tipeKelas'] ?></td>
					</tr>
					<tr>
						<th style="width: 20%">Nama Kelas</th>
						<td>: <b><?= $getData['namaKelas'] ?></b></td>
					</tr>
					<tr>
						<th style="width: 20%">Nama Bangsal</th>
						<td>: <b><?= $getData['namaBangsal'] ?></b></td>
					</tr>
				</table>

				<h2>Polikinik</h2>
				<hr>
				<b>Daftar Polikinik :</b>
				<ul class="list-unstyled">
					<li>Poliklinik 1</li>
					<li>Poliklinik 2</li>
					<li>Poliklinik 3</li>
					<li>Poliklinik 4</li>
					<li>Poliklinik 5</li>
					<li>Poliklinik 6</li>
					<li>Poliklinik 7</li>
					<li>Poliklinik 8</li>
					<li>Poliklinik 9</li>
					<li>Poliklinik 10</li>
				</ul>

			</div>
		</div>

	</div>
</body>
</html>