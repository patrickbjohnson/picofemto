<?php 
	include("../includes/config.php");
include("../includes/page-header.php");


?>

<!-- Generic page styles -->
<link rel="stylesheet" href="../fileupload/css/style.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="../fileupload/css/jquery.fileupload.css">

<div id="page-join">
	
	<div class="container">
       

       <form id="form-apply" role="form" method="POST" action="../includes/test-mail.php" enctype="multipart/form-data">
         <div class="row">
           <div class="col-md-6">
             <div class="form-group name-group">
               <label for="name">Full Name</label>
               <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" tabindex="1">
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group email-group">
               <label for="name">Email</label>
               <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2">
             </div>
           </div>
         </div>
         <div class="form-group message-group">
           <label for="message">Summary of Background</label>
           <textarea name="message" id="message" class="form-control" placeholder="Message" tabindex="3"></textarea>
         </div>
         <!-- <div class="form-group">
           <label for="name">Upload Resume</label>
             <input type="hidden" name="MAX_FILE_SIZE" value="1000000">  
             <input id="fileupload" type="file" name="fileupload" class="form-control" data-url="../server/php/" placeholder="No File Chosen" tabindex="4">
         </div> -->
         <div class="row center">
           <button type="submit" class="btn btn-secondary" tabindex="4">submit</button>
         </div>
         <div class="message"></div>
       </form>

    </div>
		
    
<? include("../includes/page-footer.php"); ?>