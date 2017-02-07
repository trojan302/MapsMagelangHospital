<?php 

$db = mysqli_connect('localhost','root','','SIG')or die('Unable to connect server database');

if (isset($_POST['insert'])) {
	
	$placeName 	= $_POST['placeName'];
	$placeAddress	= $_POST['placeAddress'];
	$placePhone 	= $_POST['placePhone'];
	$placeCoorLat 	= $_POST['placeCoorLat'];
	$placeCoorLng 	= $_POST['placeCoorLng'];
	$placePhoto 	= $_POST['placePhoto'];

	if ($placePhone == "undefined") {
		$placePhone = NULL;
	}

	$insertData = $db->query("INSERT INTO hospital (`hospitalID`, `placeName`, `placeAddress`, `placePhone`, `placeCoorLat`, `placeCoorLng`, `placePhoto`) VALUES ('','$placeName','$placeAddress','$placePhone','$placeCoorLat','$placeCoorLng','$placePhoto') ");

	if ($insertData) {
		echo "<script>window.location.href = 'index.php'</script>";
	}else{
		echo "Data tidak gagal diinputkan!";
	}



}


?>