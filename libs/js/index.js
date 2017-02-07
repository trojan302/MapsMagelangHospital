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

      var stringContent = '<div class="info"><a href="single.php?slug="'+ locations[i].placeName +'"><h2>' + locations[i].placeName + '</h2></a>' + 
                    '<p>' + locations[i].placeAddress + '<br>' + 'Telp : ' + locations[i].placePhone + ' <br> ' + 
                    'latitude : ' + locations[i].placeCoorLat + '<br> longitude : '+ locations[i].placeCoorLng +'</p>' +
                    '<div class="images"><img src="'+ locations[i].placePhoto +'" width="100%"></div></div>';

      infowindow.setContent(stringContent);
      infowindow.open(map, marker);
    }
  })(marker, i));
}