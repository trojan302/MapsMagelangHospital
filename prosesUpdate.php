<?php 

require 'libs/database/db.php';

if (isset($_POST['update'])) {
	
	$placeName 		= $_POST['placeName'];
	$placeAddress 	= $_POST['placeAddress']; 
	$placePhone 	= $_POST['placePhone']; 
	$placePhoto 	= $_POST['placePhoto'];
	$hospitalID 	= $_POST['hospitalID'];  

	$update = $db->query("UPDATE hospital SET placeName='$placeName',placeAddress='$placeAddress',placePhone='$placePhone',placePhoto='$placePhoto' WHERE hospitalID='$hospitalID' ");

	if ($update) {
		echo "Data sudah di Update... kembali ke halaman Daftar Halaman <a href='update.php'>Back</a>";
	}else{
		echo "Data Gagal Diupdate !!!!";
	}

}


?>