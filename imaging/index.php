<?php 

include("../includes/config.php");
include("../includes/header.php");
include("../includes/nav.php");

?>

<div id="page-imaging">
	<div class="jumbotron pico-imaging">
	  <div class="container">
	    <h1 class="page-title center">Imaging</h1>
	  </div>
	</div>

	<img class="pico-divide" src="../img/divider.svg" alt="">

	<div class="container">
		<section class="page-section">
			<div class="row">
				<div class="container">
					<h1 class="section-header">Cliniscan<sup>SM</sup> Neuro MRI-DTI Analysis</h1>
					<p class="font-24 light">Perhaps no other field of medicine has evolved more over the course of the past two decades than imaging—from fMRI cardiac analysis to DTI neuroimaging.  Radiologists and physicians reviewing these imaging modalities today must have access to a sophisticated array of tools to deal with increasingly complex biomedical data.  At Picofemto, one of our core missions is to revolutionize this area of medicine by providing cloud based visualization and analysis tools that help physicians become more efficient, reduce false negative and positive rates, and to reduce the cost of healthcare delivery.  These are ambitious goals, and to deliver on this vision for imaging, we have assembled a cutting-edge team from physicians to physicists to software developers who each eagerly share in this vision.  We will be releasing our first imaging product, Cliniscan<sup>SM</sup> MR Decision Support, in the latter half of 2014.</p>
				</div>
			</div>
		</section>
		
		<section class="page-section container">
			<div class="row">
				<div class="col-md-6 col-xs-12 colcenter">
					<img class="rounded-lg" src="../img/imaging_mri@2x.jpg" alt="#">
				</div>
				<div class="col-md-6">
					<h1 class="section-header txt-l">The Rise of Imaging</h1>
					<p class="reg-400">MRIs, once relatively expensive and experimental, are already setting the standard in clinical medical imaging, partly driven by demand, high reliability and ever increasing levels of hardware sophistication. More recently, Diffusion Tensor Imaging, also known as DTI, or D-MRI, has grown in popularity - it allows the radiologist to examine the white matter circuitry in the central nervous system (CNS). DTI applications include mild and traumatic brain injury, epileptic manifestations and pre-surgical planning to name but a few.</p>
				</div>
			</div>
		</section>
		
		<section class="page-section container">
			<div class="row">
				<div class="col-md-6 txt-r">
					<h1 class="section-header txt-r">The Problem</h1>
					<p class="reg-400">One can remember the days when the radiologist would be staring at one printed X-ray image on film. These days are fading away. All data are now digitized. The bulk and complexity of medical images does not allow the radiologist to spend as much time on a single slice as before. For example, a brain MRI can consist of a series of 150 2D images. From stacks of 2D images of a biological structure, regions of interest can be isolated offline for 2D, 3D and 4D processing, visualization, anomaly detection and clinical correlation.</p>
				</div>
				<div class="col-md-6 col-xs-12 center">
					<img class="rounded-lg" src="../img/imaging_xray@2x.jpg" alt="#">
				</div>
			</div>
		</section>
		<section class="page-section">
			<div class="row">
				<div class="col-md-6 col-xs-12 center">
					<img class="rounded-lg" src="../img/imaging_mammography@2x.jpg" alt="#">
				</div>
				<div class="col-md-6">
					<h1 class="section-header txt-l">Our Solution</h1>
					<p class="reg-400">One can remember the days when the radiologist would be staring at one printed X-ray image on film. These days are fading away. All data are now digitized. The bulk and complexity of medical images does not allow the radiologist to spend as much time on a single slice as before. For example, a brain MRI can consist of a series of 150 2D images. From stacks of 2D images of a biological structure, regions of interest can be isolated offline for 2D, 3D and 4D processing, visualization, anomaly detection and clinical correlation.</p>
				</div>
			</div>
		</section>

		<section class="page-section container">
			<div class="row sign-up center">
				<p class="bold-700 font-24">Sign up to be the first to know when Cliniscan<sup>SM</sup> Neuro MRI-DTI launches</p>
				<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#pico-imaging-email">Sign Me Up</a>

			</div>
		</section>
	</div>
</div>
<img class="pico-divide" src="../img/divider.svg" alt="">


<? include("../includes/imaging-email.php"); ?>
<? include("../includes/footer.php"); ?>