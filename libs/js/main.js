function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -7.479690, lng: 110.217180},
    zoom: 13
  });
  var input = /** @type {!HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || ''),
        (place.address_components[3] && place.address_components[3].short_name || ''),
        (place.address_components[4] && place.address_components[4].short_name || ''),
        (place.address_components[5] && place.address_components[5].short_name || '')
      ].join(' ');
    }

    var phone = place.international_phone_number;
    var photo = place.photos[0].getUrl({ 'maxWidth': 100});

    var stringContent = '<div class="info"><h2>' + place.name + '</h2>' + 
                        '<p>' + address + '<br>' + 'Telp : ' + phone + ' <br> ' + 
                        'Koordinat : ' + place.geometry.location + '</p>' +
                        '<div class="images"><img src="'+ photo +'" width="100%"></div></div>';

    var placeName = document.getElementById('placeName'),
        placeAddress = document.getElementById('placeAddress'),
        placePhone = document.getElementById('placePhone'),
        placeCoorLat = document.getElementById('placeCoorLat'),
        placeCoorLng = document.getElementById('placeCoorLng'),
        placePhoto = document.getElementById('placePhoto');
    
    placeName.setAttribute("value", place.name);
    placeAddress.innerHTML = address;
    placePhone.setAttribute("value", phone);
    placeCoorLat.setAttribute("value", place.geometry.location.lat());
    placeCoorLng.setAttribute("value", place.geometry.location.lng());
    placePhoto.setAttribute("value", photo);


    infowindow.setContent(stringContent);
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    radioButton.addEventListener('click', function() {
      autocomplete.setTypes(types);
    });
  }

  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}