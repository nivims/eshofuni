<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
    <div class="container">
         
      <!-- Static navbar -->
       <h2><a href="<?php  echo DIR_REL?>/"><?php $block = Block::getByName('My_Site_Name'); if($block && $block->bID) $block->display(); else echo SITE;?></a></h2>
      <div class="navbar" role="navigation">
        <div class="container">          
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
<?php
          $a = new Area('Custom Header Nav');
          $a->setBlockLimit(1);
          $a->display($c);
          ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
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
<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/footer.php');