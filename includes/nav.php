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
        <img src="<?php echo BASE_URL; ?>img/pico-logo.svg" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right nav-items">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li ><a href="<?php echo BASE_URL; ?>about">About Us</a></li>
            <li ><a href="<?php echo BASE_URL; ?>team">Team</a></li>
            <li ><a href="<?php echo BASE_URL; ?>join">Join Us!</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="<?php echo BASE_URL; ?>technology">Technology</a>
        </li>
        <li class="dropdown">
          <a href="<?php echo BASE_URL; ?>products">Products</a>
        </li>
        <li><a href="<?php echo BASE_URL; ?>resources">Resources</a></li>
        <li><a class="pico-alert" href="<?php echo BASE_URL; ?>contact">Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse
  </div><!-- /.container-fluid -->
</nav>
