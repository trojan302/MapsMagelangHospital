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
  <script src="libs/js/index.js"></script>
</body>
</html>