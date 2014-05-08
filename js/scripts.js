$(document).ready(function(){

  //
  // Nav resize on scroll
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

  //
  // Form input files styling plugin
  $( 'input[type="file"]' ).prettyFile({text:"Choose File"});
  // Job Application
  $("#form-apply").submit(function(e){
    e.preventDefault();
    $("input, textarea").each(function(){
      var $this = $(this);
      $required = $('input[required]');
      $textarea = $('textarea');
      $inputField = $this.val();
      if ($required && $inputField == "") {
        $this.parent('div').removeClass('has-success');
        $this.parent('div').addClass('has-error');
      } else {
        $this.parent('div').removeClass('has-error');
        $this.parent('div').addClass('has-success');
      }
    });

    var fd = new FormData();
    var file_data = $('input[type="file"]')[0].files; // for multiple files
    for(var i = 0;i<file_data.length;i++){
       fd.append("file_"+i, file_data[i]);
    }
    var other_data = $('#form-apply').serializeArray();
    $.each(other_data,function(key,input){
       fd.append(input.name,input.value);
    });
    $.ajax({
       url: '../includes/form-apply.php',
       data: fd,
       contentType: false,
       processData: false,
       type: 'POST',
       success: function(data){
          if (!(data.success)){
            if (data.errors.name){
              $("#name").parent().addClass('has-error');
              $("#name").attr("placeholder", data.errors.name);
            }

            if (data.errors.email){
              $("#email").parent().addClass('has-error');
              $("#email").attr("placeholder", data.errors.email);
            }

            if (data.errors.message){
              $("#message").parent().addClass('has-error');
              $("#message").attr("placeholder", data.errors.message);
            }

            if (data.errors.file) {
              $("#file_upload").parent().addClass('has-error');
              $("#file_upload, .file_upload").attr("placeholder", data.errors.file);
            }
          } else {
            // else, the form is good to go and send it
            // NOTE this isn't firing. Why? 
            console.log("success!");
          }
       }, 
       error: function(data){
        // This only fires when the application/json headers are in the file....
        console.log(data);
       }
    });
  });  

  

  // Privacy Page Smooth Scroll
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


  // Mailchimp Signup
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
            }
          }
        });
  })


  $("#form-contact").submit(function(e){
      e.preventDefault();
      $form = $("#form-contact");
      var $this = $(this);

      
      $.ajax({
        type: $form.attr('method'),
        url: $form.attr('action'),
        data: $form.serialize(),
        cache       : false,
        dataType    : 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        success: function(data){
          console.log(data)
            // if (!(data.success)){
            //   if (data.errors.name){
            //     $("#name").parent().addClass('has-error');
            //     $("#name").attr("placeholder", data.errors.name);
            //   }

            //   if (data.errors.email){
            //     $("#email").parent().addClass('has-error');
            //     $("#email").attr("placeholder", data.errors.email);
            //   }

            //   if (data.errors.message){
            //     $("#message").parent().addClass('has-error');
            //     $("#message").attr("placeholder", data.errors.message);
            //   }

            //   if (data.errors.file) {
            //     $("#file_upload").parent().addClass('has-error');
            //     $("#file_upload, .file_upload").attr("placeholder", data.errors.file);
            //   }
            // } else {
            //   // else, the form is good to go and send it
            //   // NOTE this isn't firing. Why? 
            //   console.log("success!");
            // }
         }, 
         error: function(data){
          // This only fires when the application/json headers are in the file....
          console.log(data);
         }
      });
    });  

  
  
  
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