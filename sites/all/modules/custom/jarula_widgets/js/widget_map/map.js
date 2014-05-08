/*
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
*/

//var latitude = Drupal.settings.key[0]['latitude'];
//var longitude = Drupal.settings.key[0]['longitude'];
//var maptype = Drupal.settings.key[0]['maptype'];

function initialize() {
  var markers = Drupal.settings.key['markers'];
  var array_zoom = parseInt(Drupal.settings.key['zoom']);

  var mapOptions = {
    zoom: array_zoom,
    center: new google.maps.LatLng(-34.60227, -58.386154),
  };

  var bounds = new google.maps.LatLngBounds();

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  for (var i = 0; i < markers.length; i++) {
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    var infoWindowContent = markers[i][0];
    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(position);
    var marker = new google.maps.Marker({
      position: position,
      map: map,
      title: infoWindowContent,
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infoWindow.setContent(infoWindowContent);
            infoWindow.open(map, marker);
        }
    })(marker, i));

  }

  map.fitBounds(bounds);
  
  var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
      this.setZoom(14);
      google.maps.event.removeListener(boundsListener);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);
