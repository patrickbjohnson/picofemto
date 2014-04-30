$(document).ready(function(){

  //smooth scroll for internal links
  // really only on the privacy page
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      var $navHeight = $('nav').outerHeight() + 20;
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - $navHeight
        }, 1000);
        return false;
      }
    }
  });

	// Form input files styling plugin
	$( 'input[type="file"]' ).prettyFile({
		text : "Choose File"
	});
	
	// contact Form submission 
	$("form").submit(function(e){
  	e.preventDefault();

  	// get the form data
  	 var formData = {
  	 	"name": 		$("input[name='name']").val(),
  	 	"email": 		$("input[name='email']").val(),
  	 	"subject": 		$("input[name='subject']").val(),
  	 	"message": 	$("textarea[name='message']").val()
  	 };

  	 $.ajax({
  	 	type: "POST", //define the type of HTTP verb we want to use
  	 	url: "../includes/contact-form.php",
  	 	data: formData, //our data object
  	 	dataType: "json",
  	 	encode: true
  	 }).done(function(data){ //using the done promise callback

  	 	// log the data to the console so we can see it
  	 	console.log(data);

  	 	if(! data.success){
  	 		if (data.errors.name){
  	 			$("#name").parent().addClass("has-error");
  	 			$(".name-group").append("<div class='help-block'>" + data.errors.name + "</div>");
  	 			// $("#name").attr("placeholder", data.errors.name);
  	 		}

  	 		if(data.errors.email){
  	 			$("#email").parent().addClass("has-error");
  	 			$(".email-group").append("<div class='help-block'>" + data.errors.email + "</div>");
  	 		}

  	 		if(data.errors.subject){
  	 			$("#subject").parent().addClass("has-error");
  	 			$(".subject-group").append("<div class='help-block'>" + data.errors.subject + "</div>");
  	 		}

  	 		if(data.errors.message){
  	 			$("#message").parent().addClass("has-error");
  	 			$(".message-group").append("<div class='help-block'>" + data.errors.message + "</div>");
  	 		}
  	 	} else {
  	 		$("form").prepend("<div class='alert alert-success'>" + data.message + "</div>")
  	 		$("input, textarea").val("");
  	 	}
  	 }).fail(function(data){
  	 		$("form").prepend("<div class='alert alert-danger'>" + data.errors + "</div>");
  	 	console.log(data);
  	 });
	});

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