$(document).ready(function(){

	
	// Google Map Integration
	function googleMap() {
	  var myLatlng = new google.maps.LatLng(40.752671, -73.973618);
	  var mapOptions = {
	    zoom: 15,
	    center: myLatlng,
	    scrollwheel: false
	  }
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	   var infowindow = new google.maps.InfoWindow({
      content: "Hey There! Feel free to come by, we'll buy you lunch!"
  });


	  var marker = new google.maps.Marker({
	      position: myLatlng,
	      animation: google.maps.Animation.DROP,
	      map: map,
	      title: "Picofemto"
	  });

	  google.maps.event.addListener(marker, 'click', function() {
	      infowindow.open(map,marker);
	    });
	}

	// Call the Google Map to display on the site
	google.maps.event.addDomListener(window, 'load', googleMap);

});