<?php 

include("../includes/config.php");
include("../includes/header.php");
include("../includes/nav.php");

?>

<div id="page-genomics">
	<div class="jumbotron pico-genomics">
	  <div class="container">
	    <h1 class="page-title center">Genomics</h1>
	  </div>
	</div>

	<img class="pico-divide" src="../img/divider.svg" alt="">

	<div class="container">
		<section class="page-section">
			<div class="row">
				<h1 class="section-header font-55 light-300 center">Medicine should be personalized.</h1>
				<p class="font-24 light">The newest entrant into the domain of complex biomedical data is genomic data—whole genome sequences, microarray data, and protein expression arrays.  This has only become available in the past ten years as a result of fundamental advances in next-generation sequencing (NGS) and other biochemical methods.  The quantity of data that can be generated from a single patient is astonishing, and the broader area of genomics is expected to complement pre-existing biomedical techniques in the years to come.  At Picofemto, we believe the time is now to develop powerful tools to aid practicing physicians in analyzing patient genomic data.  The market size is enormous, and is expected to balloon even further—and Picofemto will be part of this dynamic transformation with leading genomic tools for the medical community.</p>
			</div>
		</section>
		<section class="page-section">
			<div class="row">
					<img class="col-md-4 col-md-offset-4 img-main" src="../img/genomics.svg" alt="#">
					<h1 class="section-header col-md-8 col-md-offset-2">Unlocking the mysteries of the Human Genome.</h1>
				<p class="reg-400 col-md-12">The crucial barrier to incorporating genomic information into the clinical setting was acquiring the data through sequencing or other sophisticated techniques.  The time – and therefore cost – for performing the study was prohibitive.  Today, thanks to advances in next-generation-sequencing, we are on the cusp of a revolution in which an individual’s genomic data can be acquired within a matter of hours and at a low cost.  The introduction of genomic data into the clinical setting opens an entirely new dimension of personalized medicine that will help improve outcomes.</p>
			</div>
		</section>

		<section class="page-section">
			<h1 class="section-header">Where we are today.</h1>
			<p class="reg-400">Major university hospitals have recently proposed the incorporation of genomic data into electronic health records.  By implementing this, physicians will now have the ability to use that data in an effective way.  This is where our products enter the story. They will help process that data for evaluation by a physician.  Because of the complexity of the data, much of the required behind-the-scenes analytics can only be performed computationally, with sophisticated algorithms.</p>
		</section>

		<section class="page-section">
			<h1 class="section-header">We develop systems to aid with clinical analysis of complex biomedical data. </h1>
			<p class="reg-400 center">The key functionality is providing an automated, cloud-based and parallel processing comparative operation: scanning for biomarkers in known genetic content of known diseases or of predisposition databases.</p>
			<p class="bold-700 center">That's what we're working on.</p>
		</section>
		
		<section class="page-section">
			<div class="row sign-up">
				<p class="reg-400 center font-24">Sign up to be the first to know when our Cliniscan<sup>SM</sup> Genomics product launches</p>
			</div>
			<div class="row center">
				<button class="btn btn-secondary" data-toggle="modal" data-target="#pico-genomics-email">Sign Me Up</button>
			</div>
		</section>

		
	</div>
</div>

<img class="pico-divide" src="../img/divider.svg" alt="">	


<? include("../includes/genomics-email.php"); ?>
<? include("../includes/footer.php"); ?>