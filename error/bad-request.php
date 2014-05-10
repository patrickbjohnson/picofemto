<?php 

include("../includes/config.php");
include("../includes/header.php");
include("../includes/nav.php");

?>

<div id="page-error" class="auth-required">
	
	<section class="page-section page-headline">
		<div class="container center">
			<h1 class="section-header">Bad Request</h1>
			<p class="font-24 light">Sorry.  You've reached this page due to a bad request. </p>
			<p class="font-24 light">Have something urgent? Please <a href="<?php echo BASE_URL;?>contact">contact us.</a></p>

		</div>
		<div class="container center">
			<a class="btn btn-secondary" href="<?php echo BASE_URL;?>">Return Home</a>
		</div>
		<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="">
	</section>
	

</div>
	
	
<?php include("../includes/footer.php"); ?>