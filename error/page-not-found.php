<?php 

include("../includes/config.php");
include("../includes/header.php");
include("../includes/nav.php");

?>

<div id="page-error" class="auth-required">
	
	<section class="page-section page-headline">
		<div class="container center">
			<h1 class="section-header">Page Not Found</h1>
			<p class="font-24 light">Sorry. The page you tried view has been moved or no longer exists.</p>
			<p class="font-24 light">If you feel this was done in error <a href="<?php echo BASE_URL;?>contact">contact us.</a></p>

		</div>
		<div class="container center">
			<a class="btn btn-secondary" href="<?php echo BASE_URL;?>">Return Home</a>
		</div>
		<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="">
	</section>
	

</div>
	
	
<?php include("../includes/footer.php"); ?>