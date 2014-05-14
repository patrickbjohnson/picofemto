<?php 
require_once("includes/config.php");
include("includes/header.php");
include("includes/nav.php");

?>

      



      <nav class="home-nav navbar navbar-default navbar-fixed-top main-nav" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand pic" href="/">
            
              <img src="/img/picofemto-logo.svg">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right nav-items">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li ><a href="/about">About Us</a></li>
                  <li ><a href="/team">Team</a></li>
                  <li ><a href="/join">Join Us!</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="/technology">Technology</a>
              </li>
              <li class="dropdown">
                <a href="/products">Products</a>
              </li>
              <li><a href="/resources">Resources</a></li>
              <li><a class="pico-alert" href="/contact">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>

<div class="page-main">
 <div id="page-main">
     <div class="jumbotron pico-home">
       <div class="container">
         <h1 class="page-title">We are Picofemto, on a mission to revolutionize healthcare.</h1>
         <a class="btn btn-primary" href="/products" role="button">See How</a>
       </div>
     </div>
  
</div>

  <div id="page-main">
    <div class="jumbotron pico-home pico-background-bg">
      <div class="container">
        <h1 class="page-title">We are Picofemto, on a mission to revolutionize healthcare.</h1>
        <a class="btn btn-primary" href="<?php echo BASE_URL; ?>products" role="button">See How</a>
      </div>
    </div>
    
    <div class="container">
      <section class="page-mission mission container">
        <div class="row mission-statement">
          <p class="font-24 light">Our focus is on assisting clinicians and research professionals with our easy-to-use web-based platform that analyzes primary medical data at the stage of interpretation. Our flagship cloud-based service is Cliniscan<sup>SM</sup>, which enables the clinician and researcher to work in the cloud with a wide range of biomedical modalities.</p>
        </div>
        <img class="pico-divide" src="<?php echo BASE_URL;?>img/divider.svg" alt="Picofemto Page Divider">
        <div class="row mission-statement">
          <h1 class="section-header">Technology is a physician's best friend—it's available and ready to perform around the clock.</h1>
          <p>The delivery of healthcare and evidence-based outcomes are becoming increasingly personalized, in which specific individual information, from physiological to genomic data, are used both in a diagnostic and therapeutic capacity.  Our first product, Cliniscan<sup>SM</sup> EEG Decision Support  utilizes an open-ended architecture as we expect the number of analytics for each modality to grow by partnering with imaging groups, hospitals, universities, and research centers.  Our subsequent products will address complex biomedical modalities such as MRI, PET and CT.</p>
        </div>
      </section>
    
      <section class="page-products container">
        <div class="row">
          <div class="col-md-4 col-sm-4 center">
            <img src="<?php echo BASE_URL; ?>img/pico-neurology.svg" alt="Picofemto Neurology - We provide cloud-based neurological analysis software to assist in the visualization of EEG data, and to present a mixed-modality view of neural data acquired from different studies.">
            <h2 class="product-headline">Neurology</h2>
            <p>We provide cloud-based neurological analysis software to assist in the visualization of EEG data, and to present a mixed-modality view of neural data acquired from different studies.</p>
          </div>
          <div class="col-md-4 col-sm-4 center">
            <img src="<?php echo BASE_URL; ?>img/pico-imaging.svg" alt="Picofemto Imaging - Our cloud based visualization and analysis tools will help physicians become more efficient, reduce false negative and positive rates, and reduce cost of healthcare delivery.">
            <h2 class="product-headline">Imaging</h2>
            <p>Our cloud based visualization and analysis tools will help physicians become more efficient, reduce false negative and positive rates, and reduce cost of healthcare delivery.</p>
         </div>
          <div class="col-md-4 col-sm-4 center">
            <img src="<?php echo BASE_URL; ?>img/pico-genomics.svg" alt="Picofemto Genomics - The quantity of data that can be generated from a single patient is astonishing. The time is now to develop powerful tools to aid practicing physicians in analyzing patient genomic data.">
            <h2 class="product-headline">Genomics</h2>
            <p>The quantity of data that can be generated from a single patient is astonishing. The time is now to develop powerful tools to aid practicing physicians in analyzing patient genomic data.</p>
          </div>
        </div>
        <div class="row center">
          <a class="btn btn-secondary bl-md" href="<?php echo BASE_URL; ?>products" role="button">Learn More</a>
        </div>
      </section>
      
      <section class="page-team container">
          <div class="row">
            <h1 class="section-header">The team that's revolutionizing healthcare through analytics:</h1>
          </div>
          <div class="row team-members center">
            <div class="col-md-4 col-sm-4 center team-member">
              <img class="rounded team-photo" src="<?php echo BASE_URL; ?>img/team/fady@2x.jpg" alt="Fady A. Rizk">
              <h2 class="team-name">Fady A. Rizk</h2>
              <h3 class="team-position">Founder &amp; President; Board Member</h3>
            </div>
            <div class="col-md-4 col-sm-4 center team-member">
              <img class="rounded team-photo" src="<?php echo BASE_URL; ?>img/team/shri@2x.jpg" alt="Srikant Krishna">
              <h2 class="team-name">Srikant Krishna</h2>
              <h3 class="team-position">Founder &amp; CEO; Board Member</h3>
            </div>
            <div class="col-md-4 col-sm-4 center team-member">
              <img class="rounded team-photo" src="<?php echo BASE_URL; ?>img/team/andre@2x.jpg" alt="Andre Khoury, MD">
              <h2 class="team-name">Andre Khoury, MD</h2>
              <h3 class="team-position">Founder &amp; Chief Medical Officer</h3>
            </div>
          </div>
          <div class="row center">
            <a class="btn btn-secondary bl-md" href="<?php echo BASE_URL; ?>team" role="button">Meet the whole team</a>  
          </div>
          <img class="row pico-divide" src="<?php echo BASE_URL; ?>img/divider.svg" alt="Picofemto Page Divider">
      </section>
    </div> <!-- /container -->    
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
<?php include("includes/footer.php");?>