<?php 
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/nav.php");
?>

<div id="page-neurology">
	<div class="jumbotron pico-neurology">
	  <div class="container">
	    <h1 class="page-title center">Neurology</h1>
	  </div>
	</div>
		
	<section class="page-section container">
		<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="Picofemto Page Divider">	
			<div class="row">
				<h1 class="section-header font-55 light-300 center">Cliniscan EEG<sup>SM</sup> Decision Support</h1>
				<p class="light-300 font-24">Cliniscan<sup>SM</sup> is a clinical decision support system for medical metadata, such as EEG, ECG and medical imaging. </p>
			</div>
	</section>
		
	<section class="page-section features">
		<div class="jumbotron jumbtron-bg">
			<div class="row">
				<div class="col-md-4 center pico-feature">
					<img src="<?php echo BASE_URL;?>img/visualizer.svg" alt="#">
					<h1 class="font-30 bold-700">Visualizer</h1>
					<p>Custom interface that allows user to explore the results of a data analysis</p>
				</div>
				<div class="col-md-4 center pico-feature">
					<img src="<?php echo BASE_URL;?>img/data-analysis.svg" alt="#">
					<h1 class="font-30 bold-700">Data Analysis</h1>
					<p>Process that analyzes data files and produces an output result</p>
				</div>
				<div class="col-md-4 center pico-feature">
					<img src="<?php echo BASE_URL;?>img/cloud-storage.svg" alt="#">
					<h1 class="font-30 bold-700">Cloud Storage</h1>
					<p>Proprietary, secure and scalabale cloud-based biomedical engine</p>
				</div>
			</div>
		</div>
	</section>

	<section class="page-section container">
		<div class="row">
			<div class="col-md-6 devices">
				<img src="<?php echo BASE_URL;?>img/devices.svg" alt="#">
			</div>
			<div class="col-md-6">
				<h1 class="section-header txt-l">Visualizer</h1>
				<p>The Cliniscan<sup>SM</sup> EEG visualizer allows for EEG analytic data to be displayed with a dashboard feel. The screen is arranged in three sections: the Time bar, the wave display and the analytic toolbox. The tools from the analytic toolbox are arranged in preconfigured bundles accessible at the bottom left pane of the screen. Given our flexible plug-in open architecture, the array of analytical tools can also be expanded and modified given the needs and preferences of the physician in a relatively painless operation compared to rigid and embedded software.</p>
				<p>Our Visualizer features Fast Fourier Transforms of any two channels simultaneously and decomposition of any channel into frequency subbands, the Density Spectral Map and a combination of FFT Power Spectrum, Coherence and Independent Component Analysis.</p>
			</div>
		</div>
	</section>
	<section class="page-section">
		<div class="jumbotron jumbtron-bg">
			<div class="container">
				<div class="row">
					<h1 class="section-header txt-l">Feature set:</h1>
					<div class="col-md-6">
						<ul>
							<li>Time Bar</li>
							<li>EEG Signal Display</li>
							<li>Power Tab</li>
							<li>Wavelet Subband Decomposistion</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>Density Spectral Map Tab</li>
							<li>Coherence Calculations</li>
							<li>Independent Component Analysis</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
		<section class="page-section container">
			<div class="row sign-up center">
				<h1 class="font-24 reg-400 ">Want to see it in action?</h1>
				<a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#demo-request">Request a demo</a>
			</div>
		</section>
		<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="Picofemto Page Divider">
	</div>
</div>
<?php include("../../includes/demo-modal.php");?>
<?php include("../../includes/footer.php");?>