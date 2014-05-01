<?php 

include("../includes/config.php");
include("../includes/page-header.php");
include("../includes/page-nav.php");

?>


<!-- About Page -->
<div id="page-about">
	<div class="jumbotron pico-about pico-background-sm">
	  <div class="container">
	    <h1 class="page-title">About</h1>
	  </div>
	</div>
	<img class="pico-divide" src="../img/divider.svg" alt="">
	<div class="container about">
		<section class="page-mission">
			<div class="row">
				<h1 class="section-header">We are on a mission to revolutionize healthcare</h1>
			</div>
			<div class="row font-24">
				<p>We’re an NYC-based company conceived in 2011. Our focus is on assisting clinicians and research professionals with our easy-to-use web platform that analyzes raw primary medical data at the point of diagnosis or evaluation. Our flagship cloud-based service is CliniscanSM. This product enables the clinician and researcher to work in the cloud with a wide range of biomedical modalities.</p>
				<p>Today, biomedical professionals are faced with the task of analyzing increasingly diverse and voluminous primary biomedical data, and making decisions based on this data. Our products are the solution to this strenuous task and present a toolbox of biomedical analytics at the point of diagnosis. These analytics can be run instantly, and in parallel, against biomedical data submissions with virtually unlimited scaling capacity. Our services will be provided at an extremely competitive cost.</p>
				<p>The delivery of healthcare and evidence based outcomes are becoming increasingly personalized, in which specific individual information, from physiological to genomic data, are used both in a diagnostic and therapeutic capacity.</p>
				<p>Our first product, CliniscanSM EEG Decision Support, will be released in 2014.  With an emphasis on the open-ended architecture, we expect the number of analytics for each modality to self-proliferate by partnering with imaging groups, hospitals, universities, and research centers. Our subsequent products, addressing complex biomedical modalities such as MRI, PET and CT, are currently under development.</p>
				<p>Through our team of highly experienced software developers, biomedical engineers, and mathematicians we’ve developed this technology on a very aggressive schedule since inception—and we truly believe it’s a game-changer in healthcare technology.</p>
			</div>
		</section>
		<section class="page-cta">
			<div class="row center">
				<h2 class="section-subtitle font-24">Interested in learning more?</h2>
				<a href="<?php echo BASE_URL; ?>/pro" class="btn btn-secondary">See our products</a>
			</div>
		</section>
		<section class="page-inspiration">
			<div class="row center">
				<img class="rounded" src="../img/einstein@2x.jpg" alt="Albert Einstein">
				<h1 class="section-header">Our Inspiration</h1>
				<p class="quote font-24 reg-400">“To raise new questions, new possibilities, to regard old problems from a new angle, requires creative imagination and marks real advance in science.”</p>
				<!-- Could be a UL For attribution and social icon -->
				<ul class="ss-icon">
					<li>Albert Einstein</li>
					<li><a class="ss-icon" href="#">Twitter</a></li>
				</ul>
			</div>
		</section>
		
		<section class="page-mission">
			<div class="row">
				<h1 class="section-header center">Our Misson</h1>
				<div class="col-md-4 center mission-col">
					<img class="rounded" src="../img/mission1.svg" alt="Alt text!">
					<h2 class="section-subtitle font-24 mission-headline">Revolutionize</h2>
					<p class="reg-400">Revolutionize healthcare with an open-architecture medical analytics platform.</p>
				</div>
				<div class="col-md-4 center mission-col">
					<img class="rounded" src="../img/mission2.svg" alt="Alt text!">
					<h2 class="section-subtitle font-24 mission-headline">Enable</h2>
					<p class="reg-400">Enable physicians to retrieve, process and store biomedical data utilizing algorithmic analysis.</p>
				</div>
				<div class="col-md-4 center mission-col">
					<img class="rounded" src="../img/mission3.svg" alt="Alt text!">
					<h2 class="section-subtitle font-24 mission-headline">Change</h2>
					<p class="reg-400">Change the way physicians view, analyze and process biomedical data.</p>
				</div>
			</div>
		</section>
		
		
	</div>
</div>
<img class="pico-divide" src="../img/divider.svg" alt="">




<?php include("../includes/page-footer.php"); ?>