<?php 

require 'libs/database/db.php';

$sql = $db->query("SELECT * FROM hospital");
$json = array();

while ($data = $sql->fetch_assoc()) {
	
	$json[] = array(
		"placeName" => $data['placeName'],
		"placeAddress" => $data['placeAddress'],
		"placePhone" => $data['placePhone'],
		"placeCoorLat" => $data['placeCoorLat'],
		"placeCoorLng" => $data['placeCoorLng'],
		"placePhoto" => $data['placePhoto']
	);

}

$data = json_encode($json, true);


?>