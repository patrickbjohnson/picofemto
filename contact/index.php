<?php 
	include("../includes/config.php");
	include("../includes/header.php");
	include("../includes/nav.php");
?>

<div id="page-contact">
	
	<section class="page-section">
		<div id="map-canvas"></div>
	</section>
	<div class="container">
		<section class="page-section">
			<div class="address row">
					<span>708 3rd Avenue, 6th Floor</span>
				<span>New York, NY 10017</span>
				<span>212-502-3770</span>
				<p>Please use this form to contact us and a member of our team will return your message as soon as possible.</p>
			</div>
		</section>
		<section class="page-section">
			<div class="row">
			  <div class=" col-md-8 col-md-offset-2">
					<form id="form-contact" method="POST" action="../includes/form-contact.php" role="form">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group name-group">
									<label for="name">Full Name</label>
									<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" tabindex="1" >
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group email-group">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" >
								</div>
							</div>
						</div>
						<div class="form-group subject-group">
							<label for="subject">Subject</label>
							<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" tabindex="3" >
						</div>
						<div class="form-group message-group">
							<label for="message">Message</label>
							<textarea name="message" id="message" class="form-control" placeholder="Message" tabindex="4" ></textarea>
						</div>
						<div class="row message center"></div>
						<div class="row center">
							<button class="btn btn-secondary" name="submit" tabindex="4">submit</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
	
</div>



<? include("../includes/footer.php"); ?>
