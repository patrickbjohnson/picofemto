<?php include("../includes/page-header.php"); ?>


<!-- Main Navbar -->
<?php include("../includes/page-nav.php"); ?>

<div id="page-contact">
	
	<section class="page-section">
		<div id="map-canvas"></div>
	</section>
	
	<section class="page-section">
		<div class="container">
			<div class="address row">
				<span>708 3rd Avenue, 6th Floor</span>
				<span>New York, NY 10017</span>
				<span>212-502-3770</span>
				<p>Please use this form to contact us and a member of our team will return your message as soon as possible.</p>
			</div>
		</div>
	</section>



	
	<section class="page-section">
		<div class="container">
			<div class="row">
			  <div class=" col-md-8 col-md-offset-2">
					<form method="post" action="#" role="form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group name-group">
									<label for="contact-name">Full Name</label>
									<input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Full Name" tabindex="1" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group email-group">
									<label for="contact-email">Email</label>
									<input type="email" name="contact-email" id="contact-email" class="form-control" placeholder="Email Address" tabindex="2" required="required">
								</div>
							</div>
						</div>
						<div class="form-group subject-group">
							<label for="contact-subject">Subject</label>
							<input type="text" name="contact-subject" id="contact-subject" class="form-control" placeholder="Subject" tabindex="3" required="required">
						</div>
						<div class="form-group message-group">
							<label for="contact-message">Message</label>
							<textarea name="contact-message" id="contact-message" class="form-control" placeholder="Message" tabindex="4" required="required"></textarea>
						</div>
						<div class="row center">
							<button class="btn btn-secondary" name="submit" type="submit" tabindex="4">submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

</div>


<? include("../includes/page-footer.php"); ?>