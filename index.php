<?php 
require 'dataHospital.php';
?>
<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Sistem Informasi Geografis Rumah Sakit di Magelang</title> 
  <link rel="stylesheet" href="libs/css/index.css">
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB4bemvG0ShtqPnSCeWjwuJgYV7gYYZFSk" 
          type="text/javascript"></script>
</head> 
<body>

  <div id="map"></div>
  <div class="sidebar-right">
  	<p style="text-align: center;">
	  	<b>Sistem Informasi Geografis <br> Rumah Sakit di Kota Magelang</b>
	  	<hr>
  	</p>
  	<table>
  		<tr>
  			<td><b>Nama</b></td>
  			<td>: Ratna Setyaningrum</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>: Eunike Novia Erlambang</td>
  		</tr>
  		<tr>
  			<td><b>NIM</b></td>
  			<td>: 15-22-008</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>: 15-22-007</td>
  		</tr>
  		<tr>
  			<td><b>Tugas</b></td>
  			<td>: SIG</td>
  		</tr>
  		<tr>
  			<td><b>Dosen</b></td>
  			<td>: Pak Wahyu</td>
  		</tr>
  	</table>
  	<hr>
  	<a href="insertdata.php">Tambah Lokasi</a>
  	<a href="update.php">Update Lokasi</a>
  	<a href="hapus_lokasi.php">Hapus Lokasi</a>
  </div>

  <script type="text/javascript">
  // Ini adalah array object lokasi
  <?php    
    echo "var locations =". $data .";";
  ?>
  </script>
  <script>
    // Membuat maps
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(-7.479690, 110.217180),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    // Deklarasi untuk infoWindow
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    // Fetch data dari lokasi, lalu munculkan marker
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i].placeCoorLat, locations[i].placeCoorLng),
        map: map
      });

      // Membuat event click untuk infoWindow pada marker
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {

          var stringContent = '<div class="info"><a href="lihat-details.php?slug='+ locations[i].placeName +'"><h2>' + locations[i].placeName + '</h2></a>' + 
                        '<p>' + locations[i].placeAddress + '<br>' + 'Telp : ' + locations[i].placePhone + ' <br> ' + 
                        'latitude : ' + locations[i].placeCoorLat + '<br> longitude : '+ locations[i].placeCoorLng +'</p>' +
                        '<div class="images"><img src="'+ locations[i].placePhoto +'" width="100%"></div></div>';

          infowindow.setContent(stringContent);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>