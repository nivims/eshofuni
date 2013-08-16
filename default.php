<!DOCTYPE html>
<html lang="en">
  <head>
    <?php Loader::element('header_required'); ?>
    <link rel="stylesheet" type="text/css" href="<?php print $this->getStyleSheet('bootstrap/css/bootstrap.css'); ?>" />
  </head>
  <body>   
    <!-- Wrap all page content here -->
    <div id="wrap">
    <!-- Begin page content -->
    <div class="container">
         
      <!-- Static navbar -->
      <div class="navbar">
        <div class="container">          
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
              <li class="active"><a href="/navbar/">Default</a></li>
              <li><a href="/navbar-static-top/">Static top</a></li>
              <li><a href="/navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->



        </div>
      </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>Nice and simple blank canvas page start for a Concrete5 theme using Bootstrap.<br />
          Features a navbar and sticky footer.</p>
        </p>
      </div>
    <div class="main-content-area">
    <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
    </div>
    </div> <!-- /container -->
</div>
</div>
<div id="footer">
  <?php Loader::element('footer_required'); ?>
      <div class="container">
        <?php
        $a = new Area('footer');
        $a->display($c);
        ?>
<?php print date('Y') . ' ' . SITE;
        ?>
      </div>
  </body>
</html>
