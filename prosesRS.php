<?php 

$db = mysqli_connect('localhost','root','','SIG')or die('Unable to connect server database');

if (!isset($_POST['inputDataRumahSakit'])) {
	header('Location: input-data-rumah-sakit.php');
}

$namaRS 			= $_POST['namaRS'];
$tipeKelas 			= $_POST['tipeKelas'];
$namaKelas 			= $_POST['namaKelas'];
$namaBangsal 		= $_POST['namaBangsal'];
$poliklinik 		= $_POST['poliklinik'];
$namaDokter 		= $_POST['namaDokter'];
$hariPraktek 		= $_POST['hariPraktek'];
$rawatJalan 		= $_POST['rawatJalan'];
$layananPenunjang 	= $_POST['layananPenunjang'];
$tipeAmbulance 		= $_POST['tipeAmbulance'];
$jumlahAmbulance 	= $_POST['jumlahAmbulance'];

$sql = mysqli_query($db, "INSERT INTO HospitalServices (id,hospitalID,tipeKelas,namaKelas,namaBangsal,namaDokter,poliklinik,hariPraktek,rawatJalan,layananPenunjang,tipeAmbulance,jumlahAmbulance) VALUES ('','$namaRS','$tipeKelas','$namaKelas','$namaBangsal','$namaDokter','$poliklinik','$hariPraktek','$rawatJalan','$layananPenunjang','$tipeAmbulance','$jumlahAmbulance')");

if ($sql) {
	echo "Data Berhasil Di Masukkan <a href='input-data-rumah-sakit.php'>Back</a>";
}else{
	header('Location: input-data-rumah-sakit.php');
}



?>