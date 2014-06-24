function initialize() {
  var markers = Drupal.settings.key['markers'];
  var array_zoom = parseInt(Drupal.settings.key['zoom']);
  var markerClusterer = null;

  var mapOptions = {
    zoom: array_zoom,
    center: new google.maps.LatLng(-34.60227, -58.386154),
  };

  var bounds = new google.maps.LatLngBounds();

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  for (var i = 0; i < markers.length; i++) {
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(position);

    var marker = new google.maps.Marker({
      position: position,
      animation: google.maps.Animation.DROP,
      map: map,
      icon: Drupal.settings.basePath+Drupal.settings.icon,
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infoWindow.setContent(markers[i][0]);
            infoWindow.open(map, marker);
        }
    })(marker, i));

  map.fitBounds(bounds);

  }

  var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
      var theZoom = map.getZoom();
      this.setZoom(theZoom > 14 ? 14 : theZoom);
      google.maps.event.removeListener(boundsListener);
  });

}


google.maps.event.addDomListener(window, 'load', initialize);
