/*function initialize() {
  var latitude = Drupal.settings.key[0]['latitude'];
  var longitude = Drupal.settings.key[0]['longitude'];
  var array_zoom = parseInt(Drupal.settings.key[0]['zoom']);
  var maptype = Drupal.settings.key[0]['maptype'];

  var myLatlng = new google.maps.LatLng(latitude, longitude);

  var mapOptions = {
    zoom: array_zoom,
    center: myLatlng,
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Add 5 markers to the map at random locations
  var southWest = new google.maps.LatLng(-31.203405, 125.244141);
  var northEast = new google.maps.LatLng(-25.363882, 131.044922);

  var bounds = new google.maps.LatLngBounds(southWest, northEast);
  map.fitBounds(bounds);

  var lngSpan = northEast.lng() - southWest.lng();
  var latSpan = northEast.lat() - southWest.lat();

  for (var i = 0; i < 5; i++) {
    var position = new google.maps.LatLng(
        southWest.lat() + latSpan * Math.random(),
        southWest.lng() + lngSpan * Math.random());
    var marker = new google.maps.Marker({
      position: position,
      map: map
    });

    marker.setTitle((i + 1).toString());
    attachSecretMessage(marker, i);
  }
}

// The five markers show a secret message when clicked
// but that message is not within the marker's instance data
function attachSecretMessage(marker, num) {
  var message = ['This', 'is', 'the', 'secret', 'message'];
  var infowindow = new google.maps.InfoWindow({
    content: message[num]
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(marker.get('map'), marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
*/
function initialize() {

  var latitude = Drupal.settings.key[0]['latitude'];
  var longitude = Drupal.settings.key[0]['longitude'];
  var array_zoom = parseInt(Drupal.settings.key[0]['zoom']);
  var maptype = Drupal.settings.key[0]['maptype'];
  
  var myLatlng = new google.maps.LatLng(latitude, longitude);
  var mapOptions = {
    zoom: array_zoom,
    center: myLatlng,
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

