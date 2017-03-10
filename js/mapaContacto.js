var marker;
	var marker1;
	var start;
	var end;
	var map;
	var fenway
	function inicializa() {
		var directionsService = new google.maps.DirectionsService;
  		var directionsDisplay = new google.maps.DirectionsRenderer;
		var uAg = navigator.userAgent.toLowerCase();

	  fenway = {lat: 19.3170351, lng: -98.8794555};
	  map = new google.maps.Map(document.getElementById('map'), {
	    center: fenway,
	    scrollwheel: false,
	    zoom: 12,
	    streetViewControl: false,
	    disableDoubleClickZoom: false,
          disableDefaultUI: true,
          zoomControl: false,
	    mapTypeControlOptions: {
        position: google.maps.ControlPosition.BOTTOM_LEFT
    	}

	  });
	  directionsDisplay.setMap(map);
	  var panorama = new google.maps.StreetViewPanorama(
	      document.getElementById('pano'), {
	        position: fenway,
	        zoom:1,
	        scrollwheel: false,
	        disableDoubleClickZoom: false,
	        disableDefaultUI: true,
            zoomControl: false,
	        pov: {
	          heading: 104.93052220567898,
	          pitch: -2.8160690472411276,
	        }
	        ,disableDefaultUI: true
	      });
	  map.setStreetView(panorama);
	  var widgetDiv = document.getElementById('save-widget');
	  map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);


	  marker = new google.maps.Marker({
	    map: map,
	    position: fenway,
	    animation: google.maps.Animation.DROP,
	    title: 'Direccion de Educacion'
	  });
	  marker.addListener('click', function() {
	    map.setZoom(15);
	    map.setCenter(marker.getPosition());
	  });

	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(function(position) {
	      var pos = {
	        lat:position.coords.latitude,
	        lng:position.coords.longitude
	      };
	      marker1 = new google.maps.Marker({
		    map: map,
		    position: pos,
		    draggable: true,
		    animation: google.maps.Animation.DROP,
		    title: 'Mi Ubicacion'
		  });
		   calculateAndDisplayRoute(directionsService, directionsDisplay);
		  document.getElementById('mode').addEventListener('change', function() {
		     calculateAndDisplayRoute(directionsService, directionsDisplay);
		  });

		 marker1.addListener( 'dragend', function() {
		 	calculateAndDisplayRoute(directionsService, directionsDisplay);
	     });

	      infoWindow.setPosition(pos);
	      infoWindow.setContent('Location found.');
	      map.setCenter(pos);
	    }, function() {
	      handleLocationError(true, infoWindow, map.getCenter());
	    });
	  } else {
	    // Browser doesn't support Geolocation
	    handleLocationError(false, infoWindow, map.getCenter());
	  }
	}

	function calculateAndDisplayRoute(directionsService, directionsDisplay) {
	  var selectedMode = document.getElementById('mode').value;
	  end = new google.maps.LatLng(marker.position.lat(),marker.position.lng());
	  start = new google.maps.LatLng(marker1.position.lat(),marker1.position.lng());
	  directionsService.route({
	    origin: start,
	    destination: end,
	    travelMode: google.maps.TravelMode[selectedMode]
	  }, function(response, status) {
	    if (status == google.maps.DirectionsStatus.OK) {
	      directionsDisplay.setDirections(response);
	    } else {
	      window.alert('Directions request failed due to ' + status);
	    }
  	});
	}


	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	  infoWindow.setPosition(pos);
	  infoWindow.setContent(browserHasGeolocation ?
	    'Error: The Geolocation service failed.' :
	    'Error: Your browser doesn\'t support geolocation.');
	}