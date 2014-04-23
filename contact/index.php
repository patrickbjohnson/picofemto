<? include("../includes/page-header.php"); ?>

<!-- Nav -->

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
					<form role="form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Full Name</label>
									<input type="text" name="name" id="contact-name" class="form-control" placeholder="Full Name" tabindex="1" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Email</label>
									<input type="text" name="email" id="contact-email" class="form-control" placeholder="Email Address" tabindex="2" required="required">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name">Subject</label>
							<input type="text" name="subject" id="contact-subject" class="form-control" placeholder="Subject" tabindex="3" required="required">
						</div>
						<div class="form-group">
							<label for="name">Message</label>
							<textarea name="message" id="contact-message" class="form-control" placeholder="Message" tabindex="4" required="required"></textarea>
						</div>
						<div class="row center">
							<button class="btn btn-secondary" tabindex="4">submit</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</section>

</div>


<? include("../includes/page-footer.php"); ?>