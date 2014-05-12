<?php 

include("../includes/config.php");
include("../includes/header.php");
include("../includes/nav.php");

?>

<div id="page-products">
	<div class="container">
		<section class="page-section page-headline">
			<h1 class="section-header">Cliniscan<sup>SM</sup> Cloud Platform</h1>
			<p class="font-24 light">The Cliniscan<sup>SM</sup> platform is designed to provide an infrastructure to aid in rapid algorithm development for distributed programming. This infrastructure allows our quantitative developers to develop scalable, performant, and reliable medical data processing algorithms without the distractions and extra work involved in getting their code to run in the cloud. </p>
		</section>
	</div>
	
	<section class="page-section motivation">
		<div class="jumbotron">
			<div class="container">
				<h1 class="section-header">Motivation</h1>
				<p>Developing scalable, distributed, and reliable systems requires a very different set of development skills from those necessary to create complex medical data algorithms. Picofemto’s goal is to implement an array of best of breed medical algorithms and to make access to these algorithms simple and efficient for clinicians. As such, the CliniscanSM infrastructure was developed to support this goal, allowing our software engineers and our quantitative developers to work together in harmony. </p>
			</div>
		</div>
	</section>
	
	<div class="container">
		<section class="page-section components">
			<div class="row">
				<h1 class="section-header">The Cliniscan <sup>SM</sup> platform provides this functionality with the following components:</h1>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 pico-component center">
					<img src="<?php echo BASE_URL;?>img/cloud-storage-dark.svg" alt="Alt Test">
					<h1>Cliniscan<sup>SM</sup> Cloud Service</h1>
					<p>A cloud service designed to run on the Microsoft Azure cloud platform. It provides scalable processing, scheduling, fault tolerance, load balancing, caching, and data access to algorithmic processing. The cloud service also provides a web interface, file management, visualizations, security, and notifications to the user.</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 pico-component center">
					<img src="<?php echo BASE_URL;?>img/pico-sdk.svg" alt="Alt Test">
					<h1>Cliniscan<sup>SM</sup> Plug-In SDK</h1>
					<p>The Cliniscan<sup>SM</sup> Plug-In SDK (software development kit) provides a toolkit to aid in developing quantitative algorithms. Using this toolkit developers can create plugins that can be loaded dynamically into the cloud service.</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 pico-component center">
					<img src="<?php echo BASE_URL;?>img/data-analysis-dark.svg" alt="Alt Test">
					<h1>Cliniscan<sup>SM</sup> Data Storage</h1>
					<p>Quantitative code using the Cliniscan<sup>SM</sup> Plug-In API can query and retrieve medical data with a flexible query system that provides schema support and arbitrary meta data storage. Algorithmic code can examine data sets to determine whether they can work with the data and can extend the results of other algorithms. The data storage system is optimized for streaming access to data structures and aiding in functional programming.</p>
				</div>
			</div>
		</section>
	</div>
	
	<section class="page-section sdk">
		<div class="jumbotron">
			<div class="container">
				<h1 class="section-header">Benefits of the Plug-In SDK</h1>
				<p>Using the Cliniscan<sup>SM</sup> architecture for development provides a host of advantages that not only make it easier to develop quantitative algorithms, but enable these algorithms to be better and more reliable. By using a common structure for quantitative code, algorithms can be extensively tested and reviewed for accuracy before deployment, using the same acceptance tests that were used during the development process. This is vitally important to providing reliable and well tested code.</p>
			</div>
		</div>
	</section>

	<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="Picofemto Page Divider">
	
	<div class="container">
		<section class="page-section">
				<h1 class="section-header">The Cliniscan<sup>SM</sup> Product Suite</h1>
				<p class="center">(click an icon below to learn more) </p>
				<div class="svg-container">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 853.5 859.6" enable-background="new 0 0 853.5 859.6" xml:space="preserve" xmlns:xml="http://www.w3.org/XML/1998/namespace">
					  <a class="icon" id="pico-page-imaging" xlink:href="<?php echo BASE_URL; ?>products/imaging">
					    <path d="M197.3,416.8c36-17.6,50.9-61,33.3-97c-17.6-35.9-61-50.9-97-33.2c-36,17.6-50.9,61-33.3,97  C117.9,419.5,161.4,434.3,197.3,416.8z" class="linked-circle"/>
					    <g class="icon-group">
					    <rect x="107.7" y="361.2" fill="#FFFFFF" width="69.2" height="6.5"/>
					    <path fill="#FFFFFF" d="M162,347.6c0-4.5,3.7-8.2,8.2-8.2c4.5,0,8.2,3.7,8.2,8.2c0,4.5-3.7,8.2-8.2,8.2   C165.6,355.8,162,352.1,162,347.6z"/>
					    <path fill="#FFFFFF" d="M151.5,339.1H124l-16.3,2.5v14.2l8.2,0c-0.7-1.1-1.1-2.3-1.1-3.6c0-3.8,3.1-6.9,6.9-6.9h15l12.2-2.5   l0.7,3.2l-12.5,2.6h-15.4c-2,0-3.6,1.6-3.6,3.6c0,2,1.6,3.6,3.6,3.6l29.8,0c4.6,0,8.3-3.7,8.3-8.3   C159.8,342.9,156.1,339.1,151.5,339.1z"/>
					    <path fill="#FFFFFF" d="M165.7,385.1c18.3,0,33.2-14.9,33.2-33.2c0-18.3-14.9-33.2-33.2-33.2c-12,0-22.5,6.4-28.3,15.9h13.9   c3.9-3.3,9-5.3,14.5-5.3c12.5,0,22.6,10.1,22.6,22.6c0,12.5-10.1,22.6-22.6,22.6c-3.5,0-6.9-0.8-9.8-2.3h-16.5   C145.5,380,155,385.1,165.7,385.1z"/>
					    <g>
					      <path fill="#FFFFFF" d="M165.7,300.4c-22.7,0-42,14.8-48.7,35.2l6.3-1l10.3,0c6.2-11.4,18.2-19.2,32.1-19.2    c20.2,0,36.5,16.3,36.5,36.5c0,20.2-16.3,36.5-36.5,36.5c-12.7,0-23.8-6.5-30.4-16.2h-16.8c7.9,18.2,26,31,47.1,31    c28.4,0,51.4-23,51.4-51.4C217.1,323.4,194.1,300.4,165.7,300.4z M177.3,312.1c-0.2,0.7-0.8,1.2-1.6,1.2c-0.1,0-0.3,0-0.4-0.1    c-6.3-1.6-12.9-1.6-19.2,0c-0.9,0.2-1.8-0.3-2-1.2c-0.2-0.9,0.3-1.8,1.2-2c6.8-1.7,14-1.7,20.8,0    C177,310.4,177.6,311.2,177.3,312.1z"/>
					    </g>
					  </g>
					  </a>
						<a class="icon" id="pico-page-genomics" xlink:href="<?php echo BASE_URL; ?>products/genomics">
						  <path class="linked-path" d="M655.1,248.3c29.8-14.6,42.1-50.5,27.5-80.3c-14.6-29.8-50.5-42.1-80.3-27.5c-29.8,14.6-42.1,50.5-27.5,80.3  C589.4,250.6,625.3,262.9,655.1,248.3z"/>
						    <g class="icon-group">
						    <path fill="#FFFFFF" d="M620.4,205.7H637c-1.4,2-3.1,3.6-4.6,4.8c-2.6,2-4.8,2.8-4.9,2.9c-0.2,0.1-1.2,0.5-2.7,1.3c0,0,0,0,0,0    c-1.7,0.9-3.9,2.3-6.1,4.4c-4.4,4-8.7,10.4-8.7,20h7.1c0-0.6,0-1.2,0.1-1.8h23.2c0,0.6,0.1,1.2,0.1,1.8h7.1c0-9.6-4.3-16-8.7-20    c-1.7,1.3-3.3,2.3-4.5,2.9l-0.2,0.1c-0.7,0.4-1.3,0.7-1.8,0.9c1.6,1.2,3.2,2.8,4.7,4.9h-16.7c1.4-2.1,3.1-3.7,4.7-4.9    c2.5-1.9,4.7-2.8,4.9-2.9c0.2-0.1,1.2-0.5,2.7-1.3c0,0,0,0,0,0c1.7-0.9,3.9-2.3,6.2-4.4c4.4-4,8.7-10.4,8.7-20    c0-9.6-4.3-16-8.7-20c-2.7,2-5.1,3.3-6.5,3.9c1.6,1.2,3.2,2.8,4.7,4.9h-16.7c1.6-2.4,3.6-4.2,5.4-5.4c0.9-0.6,1.8-1.1,2.4-1.5    l2.4-1.1c1.2-0.5,4-1.9,6.9-4.3c4.8-3.9,10-10.6,10-21.2h-7.1c0,0.7-0.1,1.3-0.1,1.9h-23.1c-0.1-0.6-0.1-1.2-0.1-1.9h-7.1    c0,9.6,4.3,16,8.7,20c2.7-2,5.1-3.3,6.5-3.9c-1.5-1.2-3.2-2.8-4.6-4.8H637c-3.7,5.4-9.1,7.5-9.5,7.7c-0.7,0.3-17.6,6.7-17.6,25.7    c0,9.6,4.3,16,8.7,20c1.4-1.1,2.9-2.1,4.5-2.9c0.8-0.4,1.5-0.8,2-1C623.5,209.4,621.9,207.8,620.4,205.7z M639.9,154.5    c-0.3,1.3-0.7,2.6-1.3,3.7h-19.8c-0.5-1.1-0.9-2.4-1.3-3.7H639.9z M617.6,234.4c0.3-1.3,0.7-2.6,1.2-3.7h19.8    c0.5,1.1,0.9,2.4,1.2,3.7H617.6z M640.3,196.3h-23.1c-0.1-0.6-0.1-1.2-0.1-1.9c0-0.6,0-1.2,0.1-1.8h23.2c0,0.6,0.1,1.2,0.1,1.8    C640.4,195.1,640.3,195.7,640.3,196.3z M638.6,186c0.5,1.1,0.9,2.4,1.2,3.7h-22.3c0.3-1.3,0.7-2.6,1.2-3.7H638.6z M618.8,202.9    c-0.5-1.1-0.9-2.4-1.2-3.7h22.3c-0.3,1.3-0.7,2.6-1.3,3.7H618.8z"/>
						  </g>
						</a>
						<a class="icon" id="pico-page-neurology" xlink:href="<?php echo BASE_URL; ?>products/neurology">
						  <path class="linked-path" d="M753.4,401.2c16.7,34,2.5,75.1-31.5,91.8c-34,16.6-75.1,2.5-91.8-31.5c-16.7-34-2.6-75.1,31.5-91.8  C695.7,353.1,736.8,367.1,753.4,401.2z"/>
						  <g class="icon-group">
						  <path fill="#FFFFFF" d="M697,386.4c0.1-0.4,0.2-0.9,0.5-1.2c0.9-1.2,2.7-1.5,4-0.5c0.9,0.7,1.3,1.7,1.2,2.7L697,386.4z"/>
						  <path fill="#FFFFFF" d="M710.2,391.9c0.4,0.2,0.8,0.4,1.2,0.7c0,1.7,0,3.4,0,5.1c-0.4,0.1-0.7,0.2-0.9,0.4   c-1.5-1.1-2.9-2.2-4.4-3.3c0-0.4,0-0.8-0.2-1.2C707.3,393.1,708.7,392.6,710.2,391.9z"/>
						  <path fill="#FFFFFF" d="M703.6,392.1c-0.1,0-0.2,0-0.3,0c-0.6-1.2-1.2-2.3-1.8-3.4c0.9,0.2,1.8,0.4,2.7,0.7   c1.6,0.5,3.1,1.1,4.4,1.7c-1.2,0.5-2.5,0.9-3.7,1.4C704.6,392.3,704.1,392.1,703.6,392.1z"/>
						  <path fill="#FFFFFF" d="M698.8,388.3c0.3,0,0.7,0.1,1,0.1c0.8,1.4,1.6,2.8,2.3,4.2c-0.3,0.2-0.5,0.5-0.6,0.7   c-1.9-0.3-3.8-0.5-5.6-0.7c0-0.4-0.2-0.8-0.4-1.2C696.7,390.6,697.9,389.5,698.8,388.3z"/>
						  <path fill="#FFFFFF" d="M694.5,390.6c-0.3-0.1-0.6-0.2-1-0.2c-0.4,0-0.7,0.1-1,0.2c-0.9-0.9-1.8-1.7-2.8-2.6   c2.5-0.1,5.1-0.1,7.6,0.1C696.4,389.1,695.5,389.9,694.5,390.6z"/>
						  <path fill="#FFFFFF" d="M683.2,391.5c-0.7,0-1.2,0.3-1.6,0.6c-1.5-0.6-2.9-1.3-4.3-2c1.6-0.6,3.3-1,5-1.3c0.8-0.1,1.7-0.3,2.6-0.4   C684.4,389.4,683.8,390.4,683.2,391.5z"/>
						  <path fill="#FFFFFF" d="M674.4,395.6c0.3-1.5,0.5-3.1,0.8-4.6c0.2-0.1,0.3-0.2,0.5-0.2c1.7,0.9,3.5,1.7,5.3,2.5   c-0.1,0.2-0.1,0.4-0.1,0.6c-1.9,0.8-3.8,1.4-5.5,2.4C675.2,396,674.9,395.7,674.4,395.6z"/>
						  <path fill="#FFFFFF" d="M673.1,395.5c-0.7,0.1-1.3,0.5-1.6,1.1c-1.2-0.2-2.4-0.5-3.7-0.7c1.8-1.6,3.7-3,5.9-4.2   C673.5,393,673.3,394.2,673.1,395.5z"/>
						  <path fill="#FFFFFF" d="M671.5,399.2c-1.3,1.2-2.5,2.4-3.8,3.6c-0.2,0-0.3,0-0.5,0c0,0-0.1,0-0.1,0c-0.4-1.6-0.8-3.2-1.2-4.8   c0.3-0.3,0.6-0.7,0.9-1c1.5,0.3,3,0.5,4.4,0.9C671.2,398.3,671.3,398.8,671.5,399.2z"/>
						  <path fill="#FFFFFF" d="M665.8,403.2c-0.5,0.4-0.8,0.9-0.9,1.5c-1.3,0.3-2.6,0.7-3.8,1.1c1-2.4,2.3-4.5,3.8-6.5   C665.1,400.6,665.5,401.9,665.8,403.2z"/>
						  <path fill="#FFFFFF" d="M665.9,407.4c-0.4,1.8-1.1,3.6-1.8,5.4c-0.1,0-0.2,0-0.4,0c-0.6,0-1,0.2-1.4,0.4c-0.8-1.2-1.7-2.3-2.6-3.5   c0.2-0.8,0.5-1.5,0.7-2.3c1.5-0.5,3-1,4.5-1.3C665,406.6,665.4,407,665.9,407.4z"/>
						  <path fill="#FFFFFF" d="M661.3,415.6c-1,0.6-2,1.4-2.9,2.1c0.1-1.5,0.2-3,0.5-4.6c0.1-0.6,0.2-1.3,0.4-1.9c0.8,1,1.5,2,2.1,3   C661.2,414.7,661.2,415.1,661.3,415.6z"/>
						  <path fill="#FFFFFF" d="M658.4,419.4c1.1-0.9,2.2-1.8,3.4-2.6c0.3,0.3,0.6,0.6,1.1,0.7c0.2,1.9,0.4,3.8,0.8,5.7   c-0.6,0.2-1,0.6-1.2,1.1c-1.2-1-2.6-1.8-3.9-2.7C658.4,420.9,658.4,420.2,658.4,419.4z"/>
						  <path fill="#FFFFFF" d="M660.4,429.8c-0.8-2-1.4-4.2-1.7-6.5c1.2,0.8,2.4,1.6,3.5,2.6c0,0.4,0.2,0.8,0.4,1.1   C661.8,427.9,661.1,428.9,660.4,429.8z"/>
						  <path fill="#FFFFFF" d="M664.5,428c0.6,1.9,1.6,3.5,2.5,5.3c-0.4,0.3-0.6,0.7-0.8,1.2c-1.5-0.5-3-1.2-4.5-1.9   c-0.2-0.4-0.5-0.9-0.7-1.4c0.8-1.1,1.7-2.2,2.5-3.4C663.8,427.9,664.1,428,664.5,428z"/>
						  <path fill="#FFFFFF" d="M666.7,437c-0.5,0.8-0.9,1.6-1.3,2.5c-0.9-1.7-1.8-3.4-2.7-5c1.1,0.5,2.2,1,3.4,1.4   C666.2,436.3,666.4,436.7,666.7,437z"/>
						  <path fill="#FFFFFF" d="M668.5,437.7c0.6,0,1.1-0.2,1.4-0.4c2.2,0.7,4.4,1.2,6.5,2c0,0.1,0,0.2,0,0.4c-1.8,0.4-3.6,1-5.4,1.4   c-1.5,0.3-2.9,0.6-4.4,1c-0.2-0.4-0.3-0.7-0.5-1.1c0.5-1.2,1-2.3,1.7-3.4C668.1,437.7,668.3,437.7,668.5,437.7z"/>
						  <path fill="#FFFFFF" d="M712.7,402.5c1.1,1.3,2,2.9,2.7,4.4c-0.4,0.4-0.6,0.8-0.7,1.4c-3,0-6-0.2-9-0.4c0-0.3-0.1-0.6-0.2-0.9   c1.5-1.7,3.3-3.2,5.1-4.6c0.3,0.2,0.7,0.3,1.2,0.3C712.1,402.6,712.4,402.6,712.7,402.5z"/>
						  <path fill="#FFFFFF" d="M704.7,406c-0.2-0.1-0.4-0.2-0.6-0.3c0-2.9-0.1-5.7-0.1-8.6c0.7-0.1,1.3-0.5,1.6-1c1.4,1,2.7,2,4,3   c-0.3,0.7-0.2,1.6,0.1,2.3C707.9,402.8,706.2,404.3,704.7,406z"/>
						  <path fill="#FFFFFF" d="M701.4,395.7c-1.3,1.1-2.5,2.4-3.7,3.6c-1.2,1.2-2.6,2.1-3.9,3.2c0-2.4,0-4.8,0.3-7.3   c0.8-0.2,1.3-0.7,1.6-1.3c1.9,0.2,3.7,0.5,5.6,0.7C701.2,395,701.3,395.4,701.4,395.7z"/>
						  <path fill="#FFFFFF" d="M682.5,406c0.2-3.2,0.6-6.3,0.7-9.5c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c2.4,2.4,4.8,4.8,7.1,7.4   c-0.1,0.2-0.2,0.4-0.2,0.7c-2.5,0.5-4.8,1.6-7.3,2C682.8,406.3,682.6,406.1,682.5,406z"/>
						  <path fill="#FFFFFF" d="M681.9,396c0,3.1-0.5,6.3-0.7,9.4c-0.1,0-0.2,0-0.3,0c-0.2,0-0.4,0-0.6,0.1c-1.3-2.2-2.8-4.4-4.6-6.2   c0.3-0.5,0.4-1.1,0.3-1.7c1.6-1,3.4-1.7,5.2-2.4C681.3,395.5,681.6,395.8,681.9,396z"/>
						  <path fill="#FFFFFF" d="M674.5,414.7c-0.2,0-0.4,0-0.6,0.1c-1.5-2.7-3.4-5.1-5-7.7c0.1-0.1,0.2-0.2,0.3-0.3   c3.1,0.2,6.2,0.8,9.4,1.1c0,0.5,0.1,0.9,0.3,1.3c-1.3,1.8-2.4,3.7-3.4,5.6C675.1,414.7,674.8,414.7,674.5,414.7z"/>
						  <path fill="#FFFFFF" d="M664.2,417.6c0.7-0.2,1.2-0.6,1.5-1.1c2.1,0.5,4.2,0.9,6.4,1.1c0.1,0.4,0.2,0.7,0.4,1   c-1.9,1.9-4.3,3.2-6.3,5.1c-0.3-0.3-0.7-0.5-1.2-0.6C664.6,421.3,664.4,419.4,664.2,417.6z"/>
						  <path fill="#FFFFFF" d="M673.5,419.4c0.3,0.1,0.6,0.2,0.9,0.2c0.1,2.1,0.3,4.2,0.6,6.3c-0.6,0.3-1,0.8-1.2,1.4   c-2.3-0.5-4.6-0.9-6.9-1.4c0-0.3,0-0.7,0-1C668.8,422.9,671.4,421.5,673.5,419.4z"/>
						  <path fill="#FFFFFF" d="M666.4,427.2c2.4,0.5,4.8,1,7.2,1.5c0,0.3,0.1,0.5,0.2,0.8c-1.4,1.2-2.9,2.4-4.3,3.6   c-0.3-0.2-0.7-0.3-1.1-0.3c-0.1,0-0.2,0-0.3,0c-0.9-1.7-1.9-3.3-2.4-5.1C666,427.6,666.2,427.4,666.4,427.2z"/>
						  <path fill="#FFFFFF" d="M709.1,416.4c-0.3,0-0.5,0-0.7,0.1c-1.4-2-2.5-4.2-4-6.2c0.6-0.3,0.9-0.7,1.2-1.2c3.1,0.3,6.1,0.5,9.2,0.4   c0.1,0.2,0.2,0.5,0.3,0.7c-1.8,2-3.4,4.2-4.9,6.4C709.9,416.5,709.5,416.4,709.1,416.4z"/>
						  <path fill="#FFFFFF" d="M695.7,414.2C695.6,414.2,695.6,414.2,695.7,414.2c-0.5-2.4-1-4.8-1.6-7.2c0.3-0.2,0.5-0.5,0.7-0.8   c2.1,0.7,4.2,1.4,6.3,1.9c0,0.5,0.1,0.9,0.3,1.3c-1.9,1.5-3.5,3.4-5.5,4.8C695.8,414.2,695.7,414.2,695.7,414.2z"/>
						  <path fill="#FFFFFF" d="M693.7,415.2c-3.4-2.3-7.1-4.2-10.8-6c0.2-0.4,0.3-0.9,0.3-1.4c2.4-0.5,4.6-1.5,7-2c0.3,0.9,1,1.7,2.3,1.7   c0.1,0,0.1,0,0.2,0c0.6,2.4,1.1,4.7,1.5,7.1C694.1,414.8,693.9,415,693.7,415.2z"/>
						  <path fill="#FFFFFF" d="M706.7,418.9c0,0.5,0.1,1.1,0.4,1.5c-1.4,2-2.6,4.1-4.2,6c-0.1,0-0.2,0-0.2,0c-0.4,0-0.7,0.1-1,0.2   c-1.3-2.8-2.9-5.4-4.3-8.1c0.4-0.4,0.6-1,0.7-1.5C701,417.4,703.9,418.1,706.7,418.9z"/>
						  <path fill="#FFFFFF" d="M669.4,453.5c-0.2-3.8-1-7.1-2.2-10.1c1.2-0.3,2.4-0.6,3.7-0.8c2.1-0.4,4.1-1.2,6.2-1.6   c0.2,0.2,0.5,0.5,0.8,0.6C675.2,445.6,672.2,449.5,669.4,453.5z"/>
						  <path fill="#FFFFFF" d="M667.8,465.2c-0.4,1.5-2.5,7.1-6.3,12.2h41.3c0.9-4.4,2.5-16.4,6.7-17.6c5.6-1.6,12.8,0.7,14.2-5.1   c0.5-2-0.7-3.3-0.4-5.6c0.2-1.4,3-2.9,0.6-4.7c1.2-0.7,2-1.6,1.7-2.6c-0.1-0.6-0.3-1.7-0.4-2.3c-0.4-1.4,1.6-2.1,2.5-2.4   c0,0,0,0,0,0c0.3-0.1,0.5-0.2,0.7-0.3c2.4-1.3,1.7-3.2,0.4-5l-5.4-8.4c-0.2-0.6-0.4-1.3-0.4-1.9c-0.2-2,1-2.7,1.2-4.3   c0.2-1.9-0.2-3.7-0.8-5.4c-1.6-0.3-3.2-0.7-4.6-1.4c-0.4,0.5-1,0.8-1.8,0.8c-0.3,0-0.6-0.1-0.9-0.2c-1.9,2-3.4,4.2-5,6.5   c0.9,1.5,0.2,3.9-2,3.9c-0.4,0-0.7-0.1-1-0.2c-1.3,1.9-2.5,3.9-3.9,5.7c1.5,1.3,1,4.5-1.5,4.5c-2.2,0-2.9-2.3-2.1-3.8   c-1.3-2.9-3-5.6-4.4-8.4c-0.2,0-0.4,0.1-0.6,0.1c-1.7,0-2.5-1.4-2.4-2.7c-3.6-2.4-7.4-4.4-11.3-6.3c-0.3,0.2-0.7,0.2-1.1,0.2   c-0.4,0-0.8-0.1-1.1-0.2c-1.3,1.8-2.3,3.6-3.3,5.6c0.7,1.1,0.5,2.9-0.8,3.6c0.1,2.1,0.3,4.3,0.6,6.4c2.6,0.2,2.9,4,0.7,4.8   c0.6,2.1,1.2,4.2,1.9,6.2c0,0,0,0,0.1,0c3.1,0,3.2,4.5,0.4,4.9c-3.1,4.9-6.6,9.4-9.9,14.1c0,1.4-0.2,2.9-0.4,4.5   C668.8,462.1,668.2,463.6,667.8,465.2z M681.4,426.5c-0.4-2.5-0.1-4.7,0.8-6.5c0.5-0.9,1.1-1.7,1.8-2.3c0.8-0.6,1.6-1,2.6-1.2   c0.3,0,0.5-0.1,0.8-0.1c0.9,0,1.8,0.3,2.5,0.8c0.7,0.4,1.3,1,1.8,1.8c0.3,0.4,0.5,0.9,0.8,1.4h-2.1c-0.8-1.2-1.8-2.1-3-2.1   c-0.2,0-0.3,0-0.5,0c-2.6,0.4-4.3,3.4-3.6,7.8c0,0.2,0.1,0.3,0.1,0.5c0.3,1.2,0.8,2.4,1.5,3.5c0.1,0.2,0.2,0.3,0.4,0.5   c0.8,0.9,1.6,1.7,2.4,2.6c0.2,0.2,0.3,0.4,0.4,0.6c0.7,1,1.4,2.5,2.8,2.5c0.1,0,0.2,0,0.3,0c0.3,0,0.6-0.1,0.7-0.2   c0.5-0.2,0.4-0.6,0.1-1.2h1.9c0.1,0.5,0.2,1.1-0.1,1.7c-0.2,0.6-0.7,1-1.3,1.3l0,0c-0.2,0.1-0.7,0.3-1.3,0.3c-0.1,0-0.3,0-0.4,0   c-1,0-1.9-0.4-2.7-1.1c-0.5-0.5-0.9-1.1-1.3-1.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.2-0.2-0.3-0.4-0.5c-0.4-0.4-0.8-0.8-1.2-1.3   c-0.4-0.4-0.8-0.8-1.2-1.3l0-0.1l0-0.1c-0.1-0.2-0.3-0.4-0.4-0.6c-0.8-1.3-1.4-2.7-1.7-4.1l0,0l0,0   C681.4,426.9,681.4,426.7,681.4,426.5z"/>
						  <path fill="#FFFFFF" d="M720.5,403.6c0.5,1.2,1,2.5,1.5,3.9c0.3,0.9,0.6,1.9,1,2.9c-1.2-0.3-2.5-0.6-3.6-1.1c0.1-0.7,0-1.4-0.3-2   C719.6,406.1,720,404.8,720.5,403.6z"/>
						  <path fill="#FFFFFF" d="M702.3,410.3c0.2,0.1,0.4,0.2,0.6,0.2c1.7,2.1,2.9,4.5,4.4,6.7c-0.1,0.1-0.2,0.2-0.2,0.3   c-3.1-0.8-6.1-1.6-9.2-2c-0.1-0.3-0.3-0.6-0.6-0.8C699,413.4,700.5,411.7,702.3,410.3z"/>
						  <path fill="#FFFFFF" d="M676.7,438c-2-0.7-4-1.2-6-1.9c0.2-0.7,0.2-1.5-0.2-2.2c1.4-1.2,2.8-2.4,4.2-3.6c0.2,0.1,0.5,0.2,0.8,0.3   c0.6,2.2,1.2,4.3,2,6.5C677.2,437.4,676.9,437.7,676.7,438z"/>
						  <path fill="#FFFFFF" d="M666,415.2c0-0.7-0.3-1.4-0.8-1.9c0.7-1.8,1.5-3.6,1.9-5.5c0,0,0,0,0,0c0.2,0,0.3,0,0.5,0   c1.7,2.6,3.6,5,5.1,7.7c-0.2,0.2-0.4,0.5-0.5,0.8C670.1,416,668.1,415.6,666,415.2z"/>
						  <path fill="#FFFFFF" d="M669.6,405.5c0.1-0.7-0.2-1.5-0.7-2c1.2-1.1,2.3-2.2,3.5-3.3c0.3,0.2,0.7,0.3,1.2,0.3   c0.5,0,0.8-0.1,1.2-0.3c1.7,1.8,3.2,3.8,4.4,6c-0.1,0.1-0.3,0.3-0.3,0.5C675.7,406.3,672.6,405.7,669.6,405.5z"/>
						  <path fill="#FFFFFF" d="M692.8,395.2c-0.3,2.4-0.3,4.8-0.3,7.3c-0.4,0-0.8,0.1-1.1,0.3c-2.1-2.4-4.4-4.6-6.6-6.9   c0.5-0.4,0.8-1,0.9-1.7c1.8-0.3,3.6-0.5,5.5-0.7C691.4,394.4,691.9,395,692.8,395.2z"/>
						  <path fill="#FFFFFF" d="M702.6,396.9c0,2.9,0.1,5.9,0.1,8.8c-0.7,0.2-1.2,0.6-1.4,1.2c-2.1-0.6-4.2-1.3-6.3-2   c0-0.5-0.1-0.9-0.4-1.3c1.2-1,2.5-1.9,3.7-3c1.4-1.3,2.6-2.7,4-3.9C702.4,396.8,702.5,396.9,702.6,396.9z"/>
						  <path fill="#FFFFFF" d="M685.5,393c-0.2-0.5-0.5-0.9-1-1.2c0.7-1.2,1.4-2.4,2-3.6c0.4,0,0.8-0.1,1.3-0.1c1.2,1.1,2.4,2.2,3.6,3.3   c-0.2,0.3-0.3,0.5-0.3,0.8C689.2,392.4,687.4,392.7,685.5,393z"/>
						  <path fill="#FFFFFF" d="M712.6,397.8c0.1-1.4,0-2.8,0-4.3c2.3,1.7,4.2,3.7,5.7,6.1c-1.5-0.3-2.9-0.5-4.4-0.5   C713.7,398.5,713.3,398,712.6,397.8z"/>
						  <path fill="#FFFFFF" d="M717.1,406.3c-0.2,0-0.3,0-0.5,0c-0.8-1.6-1.8-3.2-2.9-4.6c0.3-0.4,0.4-0.8,0.4-1.3   c1.7,0.1,3.4,0.4,5.1,0.7c0.2,0.3,0.4,0.7,0.5,1c-0.7,1.4-1.2,2.9-1.8,4.3C717.8,406.3,717.4,406.3,717.1,406.3z"/>
						  <path fill="#FFFFFF" d="M722.9,403.6l-2.6-5.1c0.4-0.2,0.8-0.3,1.3-0.3c1.5,0,2.8,1.3,2.8,2.9C724.4,402.2,723.8,403.1,722.9,403.6   z"/>
						  <path fill="#FFFFFF" d="M709.2,389.5c0.2-0.4,0.5-0.7,0.9-1c1.3-0.9,3-0.5,3.9,0.9c0.6,0.9,0.6,2.1,0.2,3L709.2,389.5z"/>
						  <path fill="#FFFFFF" d="M684.3,385.4c0.5-1.4,2.2-2.2,3.7-1.6c1,0.4,1.7,1.3,1.9,2.3l-5.7,0.6C684,386.3,684.1,385.9,684.3,385.4z"/>
						  <path fill="#FFFFFF" d="M671.7,388.9c0.1-1.5,1.5-2.7,3.1-2.6c1.1,0.1,2,0.8,2.4,1.7l-5.3,2.2C671.7,389.8,671.6,389.4,671.7,388.9   z"/>
						  <path fill="#FFFFFF" d="M661.9,397.1c-0.5-1.5,0.3-3.1,1.8-3.6c1.1-0.4,2.2-0.1,2.9,0.6l-4,4.1C662.3,397.9,662,397.5,661.9,397.1z   "/>
						  <path fill="#FFFFFF" d="M655.9,410.2c-1.1-1-1.2-2.8-0.1-4c0.8-0.8,1.9-1.1,2.8-0.9l-1.6,5.5C656.7,410.8,656.3,410.5,655.9,410.2z   "/>
						  <path fill="#FFFFFF" d="M653.7,420.3c0.4-1,1.3-1.7,2.3-1.9l0.6,5.7c-0.4,0.1-0.9,0-1.3-0.1C653.9,423.4,653.1,421.8,653.7,420.3z"/>
						  <path fill="#FFFFFF" d="M658.5,430.3l2.1,5.3c-0.4,0.2-0.8,0.2-1.3,0.2c-1.5-0.1-2.6-1.6-2.5-3.1   C656.9,431.6,657.6,430.7,658.5,430.3z"/>
						  <path fill="#FFFFFF" d="M664.4,445.2c-1.5,0-2.7-1.4-2.7-3c0-1.1,0.7-2.1,1.6-2.5l2.4,5.2C665.3,445.1,664.9,445.2,664.4,445.2z"/>
						  </g>
						</a>
						<path opacity="0.5" fill="#C6C6C6" d="M560.3,347.9c-26,12.8-57.5,2-70.2-24.1c-12.7-26-2-57.5,24.1-70.2  c26-12.7,57.5-1.9,70.2,24.1C597.1,303.7,586.3,335.2,560.3,347.9z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M606,76.7c-7.3-14.9-25.2-21.1-40.1-13.8c-14.9,7.3-21.1,25.2-13.8,40.1  c7.3,14.9,25.2,21.1,40.1,13.8C607.2,109.5,613.3,91.6,606,76.7z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M483.6,674.7c28.5-14,40.3-48.4,26.4-76.9c-14-28.5-48.4-40.3-76.9-26.4  c-28.5,13.9-40.3,48.4-26.4,76.9C420.6,676.8,455.1,688.7,483.6,674.7z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M203.1,653.3c23.6-11.5,33.3-40,21.8-63.6c-11.5-23.5-40-33.3-63.5-21.8  c-23.6,11.5-33.3,40-21.8,63.6C151.1,655.1,179.6,664.8,203.1,653.3z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M400.3,831.7c-4.7-9.6-16.3-13.6-25.9-8.9c-9.6,4.7-13.6,16.3-8.9,25.9  c4.7,9.6,16.3,13.6,25.9,8.9C401.1,852.9,405,841.3,400.3,831.7z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M594.3,417.4c15.5-7.6,21.9-26.3,14.3-41.8c-7.6-15.5-26.3-21.9-41.8-14.3  c-15.5,7.6-21.9,26.3-14.4,41.8C560,418.6,578.8,425,594.3,417.4z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M61,581.9c14.1-6.9,19.9-24,13-38.1c-6.9-14.2-23.9-20-38.1-13c-14.1,6.9-20,24-13.1,38.1  C29.8,583,46.9,588.8,61,581.9z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M365.4,96c13-6.4,18.4-22.1,12.1-35.1c-6.4-13-22.1-18.4-35.2-12c-13,6.4-18.4,22.1-12,35.1  C336.7,97,352.4,102.4,365.4,96z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M298.5,159.9c11.2-5.4,15.8-19,10.4-30.1c-5.5-11.2-19-15.8-30.1-10.3  c-11.1,5.5-15.8,19-10.3,30.1C273.8,160.7,287.3,165.3,298.5,159.9z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M608.8,748.5c5.6-2.7,7.9-9.5,5.2-15.1c-2.8-5.6-9.5-7.9-15.1-5.2c-5.6,2.7-7.9,9.4-5.1,15  C596.5,748.9,603.2,751.2,608.8,748.5z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M810.1,608.7c26-12.7,36.8-44.2,24.1-70.2c-12.7-26.1-44.2-36.9-70.2-24.1  c-26.1,12.8-36.9,44.2-24.1,70.2C752.6,610.7,784,621.5,810.1,608.7z"/>
						<path opacity="0.5" fill="#C6C6C6" d="M771.4,238.9c16.1-7.9,22.8-27.4,14.9-43.5c-7.9-16.1-27.4-22.8-43.5-14.9  c-16.1,7.9-22.8,27.4-14.9,43.5C735.8,240.1,755.3,246.7,771.4,238.9z"/>
						<path id="_x23__2_37_" opacity="0.5" fill="#737373" d="M357.9,465.8c-19.4-39.7-3-87.6,36.7-107c39.7-19.4,87.6-3,107,36.7  c19.4,39.7,3,87.6-36.7,107C425.2,521.9,377.3,505.5,357.9,465.8z M297.4,478.7c26.1-12.7,36.9-44.2,24.1-70.2  c-12.7-26.1-44.2-36.8-70.2-24.1c-26,12.7-36.8,44.2-24.1,70.2C239.9,480.7,271.3,491.4,297.4,478.7z M346.9,307  c29.8-14.6,42.1-50.6,27.5-80.3c-14.6-29.8-50.5-42.1-80.3-27.5c-29.8,14.6-42.1,50.5-27.5,80.3C281.2,309.2,317.2,321.5,346.9,307z   M532.6,168.7c-9.1-18.6-31.6-26.3-50.2-17.2c-18.6,9.1-26.3,31.6-17.2,50.2c9.1,18.6,31.6,26.4,50.2,17.2  C534,209.8,541.7,187.3,532.6,168.7z M102.8,476.1c16.1-7.9,22.8-27.3,14.9-43.5c-7.9-16.1-27.3-22.8-43.5-14.9  c-16.1,7.9-22.8,27.4-14.9,43.5C67.2,477.3,86.7,484,102.8,476.1z M82.1,294.6c16.2-7.9,22.8-27.4,14.9-43.6  c-7.9-16.2-27.4-22.9-43.6-14.9c-16.1,7.9-22.8,27.4-14.9,43.6C46.4,295.9,65.9,302.5,82.1,294.6z M721.1,744.6  c14.9-7.3,21.1-25.3,13.8-40.1c-7.3-14.9-25.2-21-40.1-13.7c-14.9,7.3-21,25.2-13.7,40.1C688.3,745.7,706.3,751.8,721.1,744.6z   M377,780.8c25.4-12.5,36-43.1,23.5-68.6c-12.4-25.4-43.1-35.9-68.5-23.5c-25.4,12.4-36,43.1-23.5,68.5  C320.9,782.7,351.6,793.2,377,780.8z M772.1,276.2c-24.8,12.2-35.1,42.1-23,67c12.2,24.8,42.2,35.1,67,23c24.9-12.2,35.1-42.2,23-67  C826.9,274.3,796.9,264,772.1,276.2z M199.2,121.6c10.5-5.1,14.8-17.7,9.7-28.2c-5.1-10.5-17.8-14.8-28.2-9.6  c-10.4,5.1-14.8,17.7-9.7,28.2C176.1,122.3,188.7,126.6,199.2,121.6z M233.2,273.5c10.5-5.2,14.9-17.9,9.7-28.4  c-5.1-10.5-17.9-14.9-28.4-9.7c-10.6,5.2-14.9,17.9-9.8,28.4C209.9,274.3,222.6,278.7,233.2,273.5z M291.3,662.4  c11.1-5.4,15.7-18.8,10.2-29.8c-5.4-11.1-18.8-15.7-29.9-10.3c-11.1,5.4-15.7,18.8-10.3,29.9C266.8,663.3,280.2,667.8,291.3,662.4z"/>
						<path id="_x23__3_37_" opacity="0.5" fill="#2D2D2D" d="M8.4,405.8c-4.9-9.9-0.7-21.9,9.2-26.8c9.9-4.9,21.9-0.7,26.8,9.2  c4.9,9.9,0.7,21.9-9.2,26.8C25.2,419.8,13.2,415.7,8.4,405.8z M649.4,697.6c31.6-15.5,44.7-53.7,29.2-85.3  c-15.5-31.6-53.6-44.7-85.3-29.3c-31.6,15.5-44.7,53.7-29.2,85.3C579.6,699.9,617.8,713,649.4,697.6z M626.7,540.3  c-4.3-8.7-14.7-12.3-23.4-8.1c-8.7,4.3-12.3,14.7-8,23.4c4.3,8.7,14.7,12.2,23.4,8C627.4,559.4,631,548.9,626.7,540.3z M309.2,793.1  c-4.2-8.7-14.8-12.3-23.4-8c-8.7,4.2-12.3,14.7-8,23.4c4.2,8.7,14.7,12.3,23.4,8C309.8,812.2,313.4,801.7,309.2,793.1z M498.4,107.2  c-4.2-8.6-14.7-12.3-23.4-8c-8.6,4.2-12.2,14.8-8,23.4c4.2,8.7,14.7,12.3,23.4,8C499.1,126.3,502.7,115.9,498.4,107.2z M679.9,338.8  c18-8.8,25.4-30.5,16.6-48.5c-8.8-18-30.5-25.4-48.5-16.7c-18,8.8-25.4,30.5-16.6,48.5C640.2,340.2,661.9,347.7,679.9,338.8z   M192,219.8c23-11.2,32.4-39,21.2-61.9c-11.2-22.9-38.9-32.4-61.8-21.2c-23,11.2-32.5,38.9-21.2,61.9  C141.4,221.5,169.1,231,192,219.8z M729.2,277.5c6.9-3.4,9.7-11.6,6.3-18.5c-3.4-6.8-11.6-9.7-18.5-6.3c-6.8,3.4-9.7,11.6-6.3,18.5  C714.1,278,722.4,280.8,729.2,277.5z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M515.7,515.3c-11.2-22.9-1.8-50.7,21.2-61.9c22.9-11.2,50.7-1.7,61.9,21.3  c11.2,22.9,1.7,50.6-21.2,61.9C554.6,547.7,526.9,538.2,515.7,515.3z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M323.1,592.9c22.9-11.2,32.4-38.9,21.2-61.9c-11.2-23-38.9-32.5-61.9-21.2  c-22.9,11.2-32.5,38.9-21.2,61.9C272.4,594.6,300.1,604.1,323.1,592.9z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M550.9,840.4c16.2-7.9,22.8-27.3,14.9-43.5c-7.9-16.1-27.3-22.8-43.5-14.9  c-16.1,7.9-22.8,27.3-14.9,43.5C515.3,841.6,534.8,848.3,550.9,840.4z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M158.2,555.4c21.1-10.3,29.8-35.7,19.5-56.8c-10.3-21.1-35.8-29.8-56.9-19.5  c-21.1,10.3-29.8,35.8-19.5,56.9C111.6,557,137.1,565.7,158.2,555.4z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M111.3,668.9c16.9-8.2,23.9-28.6,15.6-45.5c-8.2-16.9-28.6-23.8-45.5-15.6  c-16.9,8.3-23.9,28.6-15.6,45.5C74,670.1,94.4,677.1,111.3,668.9z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M544.4,753.1c20.5-10,28.9-34.7,18.9-55.2c-10-20.5-34.7-28.9-55.2-18.9  c-20.4,10-28.9,34.7-18.9,55.2C499.2,754.7,524,763.1,544.4,753.1z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M418.9,195.1c22.9-11.2,32.4-38.9,21.2-61.9c-11.2-22.9-38.9-32.4-61.9-21.2  c-22.9,11.2-32.4,38.9-21.2,61.9C368.3,196.8,396,206.4,418.9,195.1z"/>
						<path opacity="0.5" fill="#5E5E5E" d="M484.7,78.2c19.2-9.4,27.1-32.6,17.7-51.8c-9.4-19.2-32.6-27.1-51.8-17.8  c-19.2,9.4-27.1,32.6-17.7,51.8C442.4,79.6,465.6,87.6,484.7,78.2z"/>
						<path id="_x23__5_37_" opacity="0.5" fill="#AFAFAF" d="M418.7,288.5c-6.7-13.6-1-30.1,12.6-36.8c13.7-6.7,30.1-1,36.8,12.6  c6.7,13.6,1,30.1-12.6,36.8C441.8,307.8,425.3,302.2,418.7,288.5z M669.4,135.2c6.7,13.7,23.1,19.3,36.8,12.6  c13.7-6.7,19.3-23.1,12.6-36.8c-6.7-13.6-23.2-19.3-36.8-12.6C668.3,105.1,662.7,121.6,669.4,135.2z M280.9,58.1  c-7.3-14.9-25.2-21-40.1-13.8c-14.9,7.3-21.1,25.2-13.7,40.1c7.3,14.9,25.2,21.1,40.1,13.8C282,91,288.2,73,280.9,58.1z   M694.1,569.9c16.2-7.9,22.8-27.3,14.9-43.5c-7.9-16.1-27.3-22.8-43.5-14.9c-16.1,7.9-22.8,27.4-14.9,43.5  C658.5,571.2,678,577.8,694.1,569.9z M252.9,785.3c32.8-16.1,46.4-55.7,30.4-88.6c-16.1-32.9-55.8-46.5-88.6-30.4  c-32.9,16.1-46.5,55.8-30.4,88.7C180.3,787.8,220,801.4,252.9,785.3z M235.2,533.4c10-4.9,14.1-16.9,9.2-26.9  c-4.9-10-16.9-14.1-26.8-9.2c-10,4.9-14.1,16.9-9.2,26.8C213.2,534.2,225.2,538.3,235.2,533.4z M462.4,790.4  c10.5-5.1,14.9-17.9,9.8-28.4c-5.1-10.6-17.9-14.9-28.4-9.8c-10.5,5.1-14.9,17.9-9.7,28.5C439.2,791.2,451.9,795.6,462.4,790.4z   M365.8,658.2c14.2-7,20.2-24.2,13.2-38.5c-7-14.3-24.2-20.2-38.5-13.2c-14.3,7-20.2,24.2-13.2,38.5  C334.2,659.3,351.5,665.2,365.8,658.2z M263.8,205.6c5.6-2.7,7.9-9.5,5.2-15.1c-2.7-5.6-9.5-7.9-15.1-5.1c-5.6,2.7-7.9,9.5-5.2,15.1  C251.5,206,258.2,208.4,263.8,205.6z M342.7,366.8c12.1-5.9,17.1-20.6,11.2-32.7c-5.9-12.1-20.6-17.2-32.7-11.2S304,343.5,310,355.6  C315.9,367.8,330.6,372.8,342.7,366.8z M645.2,802.7c12.1-5.9,17.2-20.6,11.2-32.7c-5.9-12.2-20.6-17.1-32.7-11.2  c-12.1,5.9-17.1,20.6-11.2,32.7C618.5,803.7,633.1,808.7,645.2,802.7z M391.9,563.5c11.3-5.5,15.9-19.1,10.4-30.3  c-5.5-11.2-19.1-15.9-30.4-10.4c-11.2,5.5-15.9,19.1-10.4,30.4C367.1,564.3,380.7,569,391.9,563.5z"/>
						<path opacity="0.5" fill="#737373" d="M825.2,459.7c16.1-7.9,22.8-27.3,14.9-43.5c-7.9-16.1-27.3-22.8-43.5-14.9  c-16.1,7.9-22.8,27.4-14.9,43.5C789.6,461,809.1,467.6,825.2,459.7z"/>
					</svg>
					<div class="image-map">
						<img src="<?php echo BASE_URL; ?>img/production.png" usemap="#imagemap">
					<map id="imagemap" name="imagemap"><area shape="circle" alt="Picofemto Genomics" title="" coords="707,213,70" href="http://www.picofemto/products/genomics" target="_blank" /><area shape="circle" alt="Picofemto Imaging" title="" coords="180,393,84" href="http://www.picofemto/products/imaging" target="_blank" /><area shape="circle" alt="Picofemto Neurology" title="" coords="778,484,81" href="http://www.picofemto/products/neurology" target="_blank" /></map>
					</div>
					
				</div>
		</section>
	</div>
	

	<img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="Picofemto Page Divider">

</div>

<?php include("../includes/footer.php");?>