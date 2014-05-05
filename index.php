<?php 
require_once("includes/config.php");
include("includes/header.php");
include("includes/nav.php"); 
?>


  <div id="page-main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron pico-home pico-background-bg">
      <div class="container">
        <h1 class="page-title">We are Picofemto, on a mission to revolutionize healthcare.</h1>
        <a class="btn btn-primary" href="#" role="button">See How</a>
      </div>
    </div>
    
    <div class="container">
      <section class="page-mission mission">
        <div class="row mission-statement">
          <p class="font-24 light">Our focus is on assisting clinicians and research professionals with our easy-to-use web-based platform that analyzes primary medical data at the stage of interpretation. Our flagship cloud-based service is Cliniscan<sup>SM</sup>, which enables the clinician and researcher to work in the cloud with a wide range of biomedical modalities.</p>
        </div>
        <img class="pico-divide" src="img/divider.svg" alt="">
        <div class="row mission-statement">
          <h1 class="section-header">Technology is a physician's best friend—it's available and ready to perform around the clock.</h1>
          <p>The delivery of healthcare and evidence-based outcomes are becoming increasingly personalized, in which specific individual information, from physiological to genomic data, are used both in a diagnostic and therapeutic capacity.  Our first product, CliniscanSM EEG Decision Support  utilizes an open-ended architecture as we expect the number of analytics for each modality to grow by partnering with imaging groups, hospitals, universities, and research centers.  Our subsequent products will address complex biomedical modalities such as MRI, PET and CT.</p>
        </div>
      </section>
    
      <section class="page-products">
        <div class="row">
          <div class="col-md-4 col-sm-4 center">
            <img src="img/pico-neurology.svg" alt="#">
            <h2 class="product-headline">Neurology</h2>
            <p>We provide cloud-based neurological analysis software to assist in the visualization of EEG data, and to present a mixed-modality view of neural data acquired from different studies.</p>
          </div>
          <div class="col-md-4 col-sm-4 center">
            <img src="img/pico-imaging.svg" alt="#">
            <h2 class="product-headline">Imaging</h2>
            <p>Our cloud based visualization and analysis tools will help physicians become more efficient, reduce false negative and positive rates, and reduce cost of healthcare delivery.</p>
         </div>
          <div class="col-md-4 col-sm-4 center">
            <img src="img/pico-genomics.svg" alt="#">
            <h2 class="product-headline">Genomics</h2>
            <p>The quantity of data that can be generated from a single patient is astonishing. The time is now to develop powerful tools to aid practicing physicians in analyzing patient genomic data.</p>
          </div>
        </div>
        <div class="row center">
          <a class="btn btn-secondary bl-md" href="#" role="button">Learn More</a>
        </div>
      </section>
      
      <section class="page-team">
        <div class="row">
          <h1 class="section-header">The team that's revolutionizing healthcare through analytics:</h1>
        </div>
        <div class="row team-members center">
          <div class="col-md-4 center team-member">
            <img class="rounded team-photo" src="img/bio/fady_bio@2x.jpg" alt="">
            <h2 class="team-name">Fady A. Rizk</h2>
            <h3 class="team-position">Founder, President &amp; Executive Chairman</h3>
          </div>
          <div class="col-md-4 center team-member">
            <img class="rounded team-photo" src="img/bio/shri_bio@2x.jpg" alt="">
            <h2 class="team-name">Srikant Krishna</h2>
            <h3 class="team-position">Founder & CEO</h3>
          </div>
          <div class="col-md-4 center team-member">
            <img class="rounded team-photo" src="img/bio/andrew_bio@2x.jpg" alt="">
            <h2 class="team-name">Andre Khoury, MD</h2>
            <h3 class="team-position">Founder & Chief Medical Officer</h3>
          </div>
          
          
        </div>
        <div class="row center">
          <a class="btn btn-secondary bl-md" href="#" role="button">Meet the whole team</a>  
        </div>
        
      </section>
    </div> <!-- /container -->

    <img class="pico-divide" src="img/divider.svg" alt="">
    
    <section class="page-section google-map">
      <div id="map-canvas"></div>
    </section>
    <section class="page-address">
      <div class="address center" id="address">
        <span>708 3rd Avenue, 6th Floor</span>
        <span>New York, NY 10017</span>
        <span>212-502-3770</span>
      </div>
    </section>
  </div>

    
    
    

<?php include("includes/footer.php"); ?>
