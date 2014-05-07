$(function()
{
	// Variable to store your files
	var files;

	// Add events
	$('input[type=file]').on('change', prepareUpload);
	$('#form-apply').on('submit', uploadFiles);

	// Grab the files and set them to our variable
	function prepareUpload(event){
		files = event.target.files;
	}

	// Catch the form submit and upload the files
	function uploadFiles(event){
		event.stopPropagation();  // Stop stuff happening
    event.preventDefault();   // Totally stop stuff happening

    // START A LOADING SPINNER HERE

    // Create a formdata object and add the files
    var data = new FormData();
    console.log(data);
    $.each(files, function(key, value){
      data.append(key, value);
    });
        
    $.ajax({
      url: 'fileupload.php?files',
      type: 'POST',
      data: data,
      cache: false,
      dataType: 'json',
      processData: false, // Don't process the files
      contentType: false, // Set content type to false as jQuery will tell the server its a query string request
      success: function(data, textStatus, jqXHR){
        if(typeof data.error === 'undefined'){
      		// Success so call function to process the form
          console.log(data);
          submitForm(event, data);
          } else {
      		  // Handle errors here
        		console.log('ERRORS: ' + data.error);
          }
        },
        error: function(jqXHR, textStatus, errorThrown){
        	// Handle errors here
        	console.log('ERRORS: ' + textStatus);
        	// STOP LOADING SPINNER
        }
    });
  }

  function submitForm(event, data){
		// Create a jQuery object from the form
		$form = $(event.target);
		
		// Serialize the form data
		var formData = $form.serialize();
		
		// You should sterilise the file names
		$.each(data.files, function(key, value){
			formData = formData + '&filenames[]=' + value;
		});

		$.ajax({
			url: 'fileupload.php',
      type: 'POST',
      data: formData,
      cache: false,
      dataType: 'json',
      success: function(data, textStatus, jqXHR)
      {
       if(typeof data.error === 'undefined'){
        // Success so call function to process the form
        console.log('SUCCESS: ' + data.success);
        console.log(formData);
        } else {
      		// Handle errors here
      		console.log('ERRORS: ' + data.error);
          console.log('form shit: ' + formData);
        }
      },error: function(jqXHR, textStatus, errorThrown){
      	// Handle errors here
      	console.log('ERRORS: ' + textStatus);
      },complete: function(){
      	// STOP LOADING SPINNER
      }
    });
	}
});