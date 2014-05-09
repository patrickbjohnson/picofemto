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

  // Smooth Scroll for Privacy Page
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

  // Job Application
  $(".career-apply").on('click', 'a', function(e){
    var $this = $(this);
    var $pos = $this.data('position');

    $("#form-apply").find("input[name='position']").val($pos);
  });
  $( 'input[type="file"]' ).prettyFile({text:"Choose File"});
  
  // Job Application Form
  $("#form-apply").submit(function(e){
    e.preventDefault();

    var fd = new FormData();
    var file_data = $('input[type="file"]')[0].files; // for multiple files
    for(var i = 0;i<file_data.length;i++){
       fd.append("file_"+i, file_data[i]);
    }
    var other_data = $('#form-apply').serializeArray();
    $.each(other_data,function(key,input){
       fd.append(input.name,input.value);
    });
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
    $.ajax({
       url: '../includes/form-apply.php',
       data: fd,
       contentType: false,
       processData: false,
       type: 'POST',
    }).done(function(data){
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
        $(".message").html(data.message);
      } else {
        $(".message").html(data.message);
        $("#form-apply")[0].reset();
        $("#name, #email, #message, .file_upload").parent().removeClass('has-success').val("");
      }
    }).fail(function(data){
      console.log(data);
    });// end ajax
  });  


  //
  // Contact Form
  $('#form-contact').submit(function(e){
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
    $.ajax({
      type:$(this).attr('method'),
      url: $(this).attr('action'),
      data: $(this).serialize(),
      dataType: 'json',
    }).done(function(data){
     if (!(data.success)){
        if (data.errors.name){
          $("#name").parent().addClass('has-error');
          $("#name").attr("placeholder", data.errors.name);
        }

        if (data.errors.email){
          $("#email").parent().addClass('has-error');
          $("#email").attr("placeholder", data.errors.email);
        }

        if (data.errors.subject){
          $("#subject").parent().addClass('has-error');
          $("#subject").attr("placeholder", data.errors.subject);
        }

        if (data.errors.message){
          $("#message").parent().addClass('has-error');
          $("#message").attr("placeholder", data.errors.message);
        }
       $(".message").html(data.msg);

      } else {
        // Success message
       $(".message").html(data.msg);
       $("#form-contact")[0].reset();
       $("#name, #email, #subject, #message").parent().removeClass('has-success');
      }
    }).fail(function(data){
      // error message
      $(".message").html(data.msg);
    });
  });
 

  // Demo Request Form
  $('#form-demo').submit(function(e){
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
    $.ajax({
      type:$(this).attr('method'),
      url: $(this).attr('action'),
      data: $(this).serialize(),
      dataType: 'json',
    }).done(function(data){
     if (!(data.success)){
        if (data.errors.name){
          $("#name").parent().addClass('has-error');
          $("#name").attr("placeholder", data.errors.name);
        }

        if (data.errors.email){
          $("#email").parent().addClass('has-error');
          $("#email").attr("placeholder", data.errors.email);
        }

        if (data.errors.company){
          $("#company").parent().addClass('has-error');
          $("#company").attr("placeholder", data.errors.company);
        }

        if (data.errors.message){
          $("#message").parent().addClass('has-error');
          $("#message").attr("placeholder", data.errors.message);
        }
       $(".message").html(data.msg);

      } else {
        // Success message
       $(".message").html(data.msg);
       $("#form-contact")[0].reset();
       $("#name, #email, #subject, #message").parent().removeClass('has-success');
      }
    }).fail(function(data){
      // error message
      $(".message").html(data.msg);
    });
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
          var message = data.msg;
          $('#mce-response').html('<span class="alert">'+message+'</span>');
        } 
        else {
          var message = data.msg;
          $('#mce-response').html('<span class="success">'+message+'</span>');
          $("#mc-embedded-subscribe-form")[0].reset();
          $("#FNAME, #LNAME, #EMAIL").parent().removeClass('has-success');
        }
      }
    });
  })

  // Google Map Integration
  function googleMap() {
    var myLatlng = new google.maps.LatLng(40.752671, -73.973618);
    var mapOptions = {
      zoom: 15,
      center: myLatlng,
      scrollwheel: false,
      draggable: false
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        animation: google.maps.Animation.DROP,
        map: map,
        title: "Picofemto"
    });

  }

  // Call the Google Map to display on the site
  google.maps.event.addDomListener(window, 'load', googleMap);

});