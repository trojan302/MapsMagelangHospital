<!DOCTYPE html>
<html>
  <head>
    <title>Insert Data</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="libs/css/main.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>

    <input id="pac-input" class="controls" type="text"
        placeholder="Masukkan Nama Lokasi">
    <div id="type-selector" class="controls">
      <input type="radio" name="type" id="changetype-all" checked="checked">
      <label for="changetype-all">All</label>

      <input type="radio" name="type" id="changetype-establishment">
      <label for="changetype-establishment">Establishments</label>

      <input type="radio" name="type" id="changetype-address">
      <label for="changetype-address">Addresses</label>

      <input type="radio" name="type" id="changetype-geocode">
      <label for="changetype-geocode">Geocodes</label>
    </div>

    <div id="map"></div>

    <div class="box-right">
      <h2>Insert New Data</h2>
      <form action="prosesData.php" method="POST">
        <p>Nama Tempat :</p>
        <input type="text" name="placeName" id="placeName" placeholder="Nama Lokasi">
        <p>Alamat :</p>
        <textarea name="placeAddress" cols="41" rows="5" id="placeAddress" style="resize: none;" placeholder="Alamat"></textarea>
        <p>Nomor Telepon :</p>
        <input type="text" name="placePhone" id="placePhone" placeholder="Nomor Telepon">
        <p>Koordinat Lokasi :</p>
        <input type="text" name="placeCoorLat" id="placeCoorLat" placeholder="Latitude">
        <input type="text" name="placeCoorLng" id="placeCoorLng" placeholder="Longitude">
        <div style="clear: both;"></div>
        <p>URL Photo :</p>
        <input type="text" name="placePhoto" id="placePhoto" placeholder="URL Photo" readonly>
        <br><br>
        <input class="btn btn-block btn-info" type="submit" name="insert" value="Masukkan Data">
      </form>
      
      <br><br>
      <button onclick="location.reload()" class="btn btn-success">
        <i class="glyphicon glyphicon-repeat"></i>
        Reload Page
      </button>

      <button onclick="location.href='index.php'" class="btn btn-danger">
        <i class="glyphicon glyphicon-home"></i>
        Homepage
      </button>
    </div>

    <script src="libs/js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4bemvG0ShtqPnSCeWjwuJgYV7gYYZFSk&libraries=places&callback=initMap"
        async defer></script>
  </body>
</html>