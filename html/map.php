    <style>
    #map-content {
      width: 100%;
    }
      #map {
        width: 100%;
        height: 400px;
        margin-bottom:20px;
      }

    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
       var mapOptions = {
    zoom: 2,
    center: {lat: -33.865427, lng: 151.196123},
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };

  map = new google.maps.Map(document.getElementById('map'),
      mapOptions);

  // Create a <script> tag and set the USGS URL as the source.
  var script = document.createElement('script');

  script.src = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp';
  document.getElementsByTagName('head')[0].appendChild(script);

  map.data.setStyle(function(feature) {
    var magnitude = feature.getProperty('mag');
    return {
      icon: getCircle(magnitude, 'red')
    };
  });
}

function getCircle(magnitude, color) {
  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: iconBase + 'schools_maps.png'
  });
}

function getCircle1(magnitude, color) {
  var circle = {
    path: google.maps.SymbolPath.CIRCLE,
    fillColor: color,
    fillOpacity: .2,
    scale: Math.pow(2, magnitude) / 2,
    strokeColor: 'white',
    strokeWeight: .5
  };
  return circle;
}

function getCircle2(magnitude, color) {
  var circle = {
    path: google.maps.SymbolPath.CIRCLE,
    fillColor: color,
    fillOpacity: .2,
    scale: Math.pow(2, magnitude) / 2,
    strokeColor: 'white',
    strokeWeight: .5
  };
  return circle;
}

function eqfeed_callback(results) {
  map.data.addGeoJson(results);
}
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
