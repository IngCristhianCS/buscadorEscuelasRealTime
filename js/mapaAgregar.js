function anular(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            return (tecla != 13);
     }
  var map;
  var fenway
  function inicializa() {
    var latitudR = parseFloat(document.getElementById('latitud').value);
    var longitudR = parseFloat(document.getElementById('longitud').value);
    var headingR = parseFloat(document.getElementById('heading').value);
    var pitchR = parseFloat(document.getElementById('pitch').value);
    fenway = {lat: latitudR,lng: longitudR };
    map = new google.maps.Map(document.getElementById('map'), {
      center: fenway,
      scrollwheel: false,
      zoom: 12,
      mapTypeControlOptions: {
        position: google.maps.ControlPosition.BOTTOM_LEFT
    }


    });

    var panorama = new google.maps.StreetViewPanorama(
        document.getElementById('pano'), {
          position: fenway,
          zoom:1,
          scrollwheel: false,
          pov: {
            heading: headingR ,
            pitch: pitchR ,
          }
        });
    map.setStreetView(panorama);
    var widgetDiv = document.getElementById('save-widget');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);

    panorama.addListener('pano_changed', function() {
        var panoCell = document.getElementById('pano-cell');
        panoCell.innerHTML = panorama.getPano();
    });

    panorama.addListener('links_changed', function() {
        var linksTable = document.getElementById('links_table');
        while (linksTable.hasChildNodes()) {
          linksTable.removeChild(linksTable.lastChild);
        }
        var links = panorama.getLinks();
        for (var i in links) {
          var row = document.createElement('tr');
          linksTable.appendChild(row);
          var labelCell = document.createElement('td');
          labelCell.innerHTML = '<b>Link: ' + i + '</b>';
          var valueCell = document.createElement('td');
          valueCell.innerHTML = links[i].description;
          linksTable.appendChild(labelCell);
          linksTable.appendChild(valueCell);
        }
    });

    panorama.addListener('position_changed', function() {
        var positionCell = document.getElementById('position-cell');
        positionCell.firstChild.nodeValue = panorama.getPosition() + '';
        document.getElementById('latitud').value = panorama.getPosition().lat();
        document.getElementById('longitud').value = panorama.getPosition().lng();
    });

    panorama.addListener('pov_changed', function() {
        document.getElementById('heading').value = panorama.getPov().heading;
        document.getElementById('pitch').value = panorama.getPov().pitch;
    });
      // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox.setBounds(map.getBounds());
    });
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }

      // For each place, get the icon, name and location.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
        var icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };

        panorama = new google.maps.StreetViewPanorama(
        document.getElementById('pano'), {
          position: place.geometry.location,
          zoom:1,
          scrollwheel: false,
          pov: {
            heading: 0,
            pitch: 0,
          }
        });
        map.setStreetView(panorama);
        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });
}