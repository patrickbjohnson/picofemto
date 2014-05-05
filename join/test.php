<?php 
	include("../includes/page-header.php");
	include("../includes/career-modal.php");

	  ini_set('display_errors', 'On');
	  error_reporting(E_ALL | E_STRICT);

?>

<div id="page-join">
	
	<div class="container">
		
    <form id="form-apply" role="form" method="POST" enctype="multipart/form-data" data-url="/path/to/upload/handler.json">
      <div class="form-group">
        <label for="name">Upload Resume</label>
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000">  
          <input id="fileupload" type="file" name="fileupload" class="form-control" data-url="../server/php/" placeholder="No File Chosen" tabindex="4">
      </div>
      <div class="row center">
        <button type="submit" class="btn btn-secondary" tabindex="4">submit</button>
      </div>

	</div>
</div>
<img class="pico-divide" src="../img/divider.svg" alt="">	


<?php include("../includes/page-footer.php");?>