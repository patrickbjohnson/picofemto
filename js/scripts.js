$(document).ready(function(){

  // header shrink
  // console.log($(".main-nav").scrollTop());
  // var $shrink = 300
  // $(window).scroll(function(){
  //   var $nav = $(".main-nav");
  //   var $scroll = $(".main-nav").offset().top;
  //   console.log($scroll);
  //   if ($scroll < $shrink){
  //     $nav.addClass('tiny');
  //   } else {
  //     console.log('more!');
  //     $nav.removeClass('tiny').addClass('huge');


  //   }
  // });



  var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getScroll();
      if ( scroll >= shrinkHeader ) {
           $('.main-nav').addClass('shrink');
           $('.navbar-right').addClass('shrink');
        }
        else {
            $('.main-nav').removeClass('shrink');
            $('.navbar-right').removeClass('shrink');
        }
  });

  function getScroll() {
    return window.pageYOffset;
  }

  //smooth scroll for internal links on privacy page
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


  // mailchimp sign up 
  

  // $('#mc-embedded-subscribe').on('click', function(event) {
  //   event.preventDefault();
  //  
  // });
    
  $("#mc-embedded-subscribe-form").on('submit', function(e){
    e.preventDefault();
    var $form = $('#mc-embedded-subscribe-form');

    $("input").each(function(){
      var $this = $(this);
      $required= $('input[required]');
      $inputField = $this.val();
      if ($required && $inputField == "") {
        $this.parent('div').removeClass('has-success');
        $this.parent('div').addClass('has-error');
      } else {
        $this.parent('div').removeClass('has-error');
        $this.parent('div').addClass('has-success');
      }
    });


    $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize(),
          cache       : false,
          dataType    : 'json',
          contentType: "application/json; charset=utf-8",
          error       : function(err) { $('#mce-response').html('<span class="alert">Could not connect to server. Please try again later.</span>'); },
          success     : function(data) {
           
            if (data.result != "success") {
              console.log(data);
              var message = data.msg.substring(4);
              $('#mce-response').html('<span class="alert">'+message+'</span>');
            } 

            else {
              console.log(data);
              var message = data.msg;
              $('#mce-response').html('<span class="success">'+message+'</span>');
              console.log(data);
            }
          }
        });
  })




  // apply form ajax test
  // var $form = $("#form-apply");
  // var $msg  = $(".message");



  // $form.on('submit', function(e){
  //   e.preventDefault();
  //   var $formData = $form.serialize();
  //   console.log($formData);

  //   $.ajax({
  //     type: 'POST',
  //     url: $form.attr('action'),
  //     data: $formData
  //   }).done(function(response){
  //     $msg.removeClass('error').addClass('success');

  //     // set the message text
  //     $msg.text(response);

  //     //clear the form
  //     $("#name").val();
  //     $("#email").val();
  //     $("#message").val();
  //   }).fail(function(data){
  //     // form message has error class
  //     $msg.removeClass('success').addClass('error');

  //     // set the message text
  //     if (data.ressponseText !== ''){
  //       $msg.text(data.ressponseText);
  //     } else {
  //       $msg.text('Opps! An erro occured and your message is not being sent');
  //     }
  //   });

  // });








	// Form input files styling plugin
	// $( 'input[type="file"]' ).prettyFile({text:"Choose File"});
	
	// contact Form submission 
	// $("#form-apply").submit(function(e){
 //  	e.preventDefault();

 //  	// get the form data
 //  	 var formData = {
 //  	 	"name": 		$("input[name='name']").val(),
 //  	 	"email": 		$("input[name='email']").val(),
 //  	 	"message": 	$("textarea[name='message']").val()
 //  	 };

 //  	 $.ajax({
 //  	 	type: "POST", //define the type of HTTP verb we want to use
 //  	 	url: "../includes/form-apply.php",
 //  	 	data: formData, //our data object
 //  	 	dataType: "json",
 //  	 	encode: true
 //  	 }).done(function(data){ //using the done promise callback

 //  	 	// log the data to the console so we can see it
 //  	 	 console.log(data);

 //  	 	if(! data.success){
 //  	 		if (data.errors.name){
 //  	 			$("#name").parent().addClass("has-error");
 //  	 			$(".name-group").append("<div class='help-block'>" + data.errors.name + "</div>");
 //  	 			// $("#name").attr("placeholder", data.errors.name);
 //  	 		}

 //  	 		if(data.errors.email){
 //  	 			$("#email").parent().addClass("has-error");
 //  	 			$(".email-group").append("<div class='help-block'>" + data.errors.email + "</div>");
 //  	 		}

 //  	 		if(data.errors.subject){
 //  	 			$("#subject").parent().addClass("has-error");
 //  	 			$(".subject-group").append("<div class='help-block'>" + data.errors.subject + "</div>");
 //  	 		}

 //  	 		if(data.errors.message){
 //  	 			$("#message").parent().addClass("has-error");
 //  	 			$(".message-group").append("<div class='help-block'>" + data.errors.message + "</div>");
 //  	 		}
 //  	 	} else {
 //  	 		$("#form-contact").prepend("<div class='alert alert-success'>" + data.message + "</div>")
 //  	 		$("input, textarea").val("");
 //  	 	}
 //  	 }).fail(function(data){
 //  	 		$("#form-contact").prepend("<div class='alert alert-danger'>" + data.errors + "</div>");
 //  	 	 console.log(data.error);
 //  	 });
	// });
  
  // process the form
  // $('form').submit(function(event) {

  //   // get the form data
  //   // there are many ways to get this data using jQuery (you can use the class or id also)
  //   var formData = {
  //       "name"    :$("input[name='name']").val(),
  //       "email"   :$("input[name='email']").val(),
  //       "message" :$("textarea[name='message']").val(),
  //       // "upload"  :$("input[name='upload']").val()
  //      };

  //   // process the form
  //   $.ajax({
  //     type    : 'POST',   // define the type of HTTP verb we want to use (POST for our form)
  //     url     : "../includes/form-apply.php",
  //     data    : formData, // our data object
  //     dataType: 'json',   // what type of data do we expect back from the server
  //     encode  : true
  //   })
  //     // using the done promise callback
  //     .done(function(data) {

  //       // log data to the console so we can see
  //       console.log(data); 

  //       // here we will handle errors and validation messages
  //     }).fail(function(data) {

  //     // show any errors
  //     // best to remove for production
  //     console.log(data);
  // });

  //   // stop the form from submitting the normal way and refreshing the page
  //   event.preventDefault();
  // });



    // // Form submission 
    // $("#form-apply").submit(function(e){
    //   e.preventDefault();
      
    //   // get the form data
       
    //    //  console.log(formData);
    //     // console.log(formData.message);

    //    $.ajax({
    //     type: "POST", 
    //     data: formData, 
    //     dataType: "json",
    //     encode: true
    //    }).done(function(data){
    //     if(data.success){
    //       console.log('success!');
    //     } else {
    //       console.log(data.error);
    //       console.log('shit failed');
    //     }
    //    }).fail(function(data){
    //      $("#form-apply").prepend("<div class='alert alert-danger'>" + data.errors + "</div>");
    //      console.log(data);
    //      console.log(data.error);
    //      console.log(data.errors);
    //      console.log(data.error.message);
    //    });
    //     //using the done promise callback

        

    //     // if(! data.success){
    //     //   // console.log('not a success');
    //     //   // if (data.errors.name){
    //     //   //   $("#name").parent().addClass("has-error");
    //     //   //   $(".name-group").append("<div class='help-block'>" + data.errors.name + "</div>");
    //     //   //   // $("#name").attr("placeholder", data.errors.name);
    //     //   // }

    //     //   // if(data.errors.email){
    //     //   //   $("#email").parent().addClass("has-error");
    //     //   //   $(".email-group").append("<div class='help-block'>" + data.errors.email + "</div>");
    //     //   // }

    //     //   // if(data.errors.subject){
    //     //   //   $("#subject").parent().addClass("has-error");
    //     //   //   $(".subject-group").append("<div class='help-block'>" + data.errors.subject + "</div>");
    //     //   // }

    //     //   // if(data.errors.message){
    //     //   //   $("#message").parent().addClass("has-error");
    //     //   //   $(".message-group").append("<div class='help-block'>" + data.errors.message + "</div>");
    //     //   // }
    //     // } else {
    //     //   $(".form-apply").prepend("<div class='alert alert-success'>" + data.message + "</div>")
    //     //   $("input, textarea").val("");
    //     //   console.log('success!');
    //     // }
    //    // }).fail(function(data){
    //    //    $("#form-apply").prepend("<div class='alert alert-danger'>" + data.errors + "</div>");
    //    //  console.log(data.error);
    //    //  console.log('shit failed');
    //    // });
    // });



    // // File Upload plugin test
    // $('#form-apply').fileupload({
    //        dataType: 'json',
    //        url: 'server/php/UploadHandler.php',
    //        done: function (e, data) {
    //            $.each(data.result.files, function (index, file) {
    //                $('<p/>').text(file.name).appendTo(document.body);
    //            });
    //        }
    //    });



	// Google Map Integration
	// function googleMap() {
	//   var myLatlng = new google.maps.LatLng(40.752671, -73.973618);
	//   var mapOptions = {
	//     zoom: 15,
	//     center: myLatlng,
	//     scrollwheel: false
	//   }
	//   var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	//    var infowindow = new google.maps.InfoWindow({
 //      content: "Hey There! Feel free to come by, we'll buy you lunch!"
 //  });

	//   var marker = new google.maps.Marker({
	//       position: myLatlng,
	//       animation: google.maps.Animation.DROP,
	//       map: map,
	//       title: "Picofemto"
	//   });

	//   google.maps.event.addListener(marker, 'click', function() {
	//       infowindow.open(map,marker);
	//     });
	// }

	// // Call the Google Map to display on the site
	// google.maps.event.addDomListener(window, 'load', googleMap);

});