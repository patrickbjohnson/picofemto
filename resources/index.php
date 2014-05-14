<?php 

require_once("../includes/config.php");
include("../includes/header.php");
include("../includes/nav.php");

?>

<div id="page-resources">
	<section class="page-section">
		<div class="jumbotron pico-resources">
		  <div class="container">
		    <h1 class="page-title center">Resources</h1>
		  </div>
		</div>
	</section>
	<div class="container">
		<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="Picofemto Page Divider">
		<section class="page-section questions">
			<div class="row">
				<div class="container">
					<h1 class="section-header">5 Questions About What We’re Doing</h1>	
				</div>
			</div>
			<div class="row">
				<div class="container">
					<h2>Q: Why does Picofemto use algorithms?</h2>	
					<p><span>A: </span>Both physicians and biomedical data have gotten increasingly sophisticated over the past decade.  Many specialties now regularly deal with complex real-time imaging and a growing array of techniques.  At Picofemto, we wanted to assist physicians deal with this ever-growing sophistication by offering them a set of algorithms designed to help them work with these large data.   Our algorithmic tools help process and visualize complex biomedical data.  Algorithms are efficient – they can process large datasets quickly, they are reliable – they are always available from anywhere in the world, and they are consistent – they operate in the same way all the time.  By using algorithms to help analyze data, we want to help physicians save time.</p>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<h2>Q: What impact do algorithms have on a physician’s diagnosis?</h2>	
					<p><span>A: </span>Physicians perform the analysis and diagnosis; Picofemto’s algorithms just make that easier.  Because the algorithms complement how humans work, there are great benefits for physicians who choose to use them.  Our products – including the algorithms - are considered Clinical Decision Support (CDS) systems.  Using algorithms can help reduce false negatives, decrease false positives, and save time - all good things for a practice.</p>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<h2>Q: What are the advantages of using CliniScan<sup>SM</sup> EEG Decision Support?</h2>	
					<p><span>A: </span>Electroencephalograms are a large market in the field of neurology that can provide critical information regarding an individual’s brain.  In addition to epilepsy, a number of other pathologies can be identified.  At Picofemto, we recognize the benefits of having an extremely powerful, cloud-based product to facilitate the interpretation of EEGs.  We are proud to release CliniScan<sup>SM</sup> EEG Decision Support as the first modality that we're pursuing.</p>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<h2>Q: What are the benefits of using CliniScan<sup>SM</sup> DTI Decision Support?</h2>	
					<p><span>A: </span>The interpretation of DTI (diffusion tensor imaging) can be a long and onerous process.  Given the power of DTI analysis, we want to help facilitate the process for physicians by providing them with automated tools to simplify the process and assist in the interpretation. </p>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<h2>Q: What is CliniScan<sup>SM</sup> Genomics and Personalized Medicine?</h2>	
					<p><span>A: </span>Personalized medicine is a transformative movement in the medical community that aims to deliver extremely customized medicine to individuals based on their background and characteristics of their disease.  Part of this process involves determining the genetic makeup of the individual and or diseased, that may have ramifications for their response to treatment.  By customizing healthcare through personalized medicine, better outcomes can be achieved.  At Picofemto, we recognize this future and want to be a leader in the analysis of genomic information, from a clinical perspective. </p>
				</div>
			</div>
		</section>
		<section class="page-section">
			<div class="row">
				<img src="<?php echo BASE_URL;?>img/resources.svg" alt="Picofemto Resources">
			</div>
		</section>
		<section class="page-section">
			<div class="row">
				<h1 class="section-header">What We’re Reading</h1>
				<ul class="pico-reading center">
					<li><a href="http://techcrunch.com/2012/01/10/doctors-or-algorithms/">Doctors or Algorithms (Techcrunch)</a></li>
					<li><a href="http://techcrunch.com/2013/09/11/vinod-khosla-in-the-next-10-years-data-science-will-do-more-for-medicine-than-all-biological-sciences-combined/">Vinod Khosla: In The Next 10 Years, Data Science Will Do More For Medicine Than All Biological Sciences Combined (Techcrunch)</a></li>
					<li><a href="http://www.theguardian.com/healthcare-network/healthcare-innovation-partner-zone/how-it-will-shape-future-healthcare">How IT will shape the future of healthcare (The Guardian)</a></li>
					<li><a href="http://medcitynews.com/2013/07/5-inspirational-ted-talks-every-healthcare-professional-must-watch/">5 Inspirational TED Talks Every Healthcare Professional Must Watch (MedCity News)</a></li>
				</ul>
			</div>
		</section>
		<section class="page-section">
			<div class="row sign-up center">
				<h1 class="font-24 center">Interested in learning more?</h1>
				<a class="btn btn-secondary" href="<?php echo BASE_URL; ?>contact">Contact Us</a>
			</div>
		</section>
		<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="Picofemto Page Divider">
	</div>
	
</div>

<?php include("../includes/footer.php");?>