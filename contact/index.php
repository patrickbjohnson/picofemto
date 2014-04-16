<? include("../includes/page-header.php"); ?>

<? include("../includes/nav.php"); ?>

<div class="jumbotron pico-neurology">
  <div class="container">
    <h1 class="section-header">Google Map here</h1>
  </div>
</div>

<div class="container">
	<div class="row center">
		<span>708 3rd Avenue, 6th Floor</span><br>
		<span>New York, NY 10017</span><br>
		<span>212-502-3770</span><br>
	</div>
</div>

<div class="container">
	<div class="row">
		<form class="col-md-8 col-md-offset-2" action="#">
			<div class="row">
				<div class="col-md-6">
					<label for="name">Full Name</label>
					<input type="text" class="col-md-12 form-info" name="name">
				</div>
				<div class="col-md-6">
					<label for="name">Email</label>
					<input type="text" class="col-md-12 form-info" name="email">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<label for="name">Subject</label>
					<input type="text" class="col-md-12 form-subject" name="subject">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<label for="name">Message</label>
					<input type="textarea" class="col-md-12 form-message" name="message">
				</div>
			</div>
			
			<button class="btn">Send</button>
		</form>
	</div>
</div>
<? include("../includes/footer.php"); ?>