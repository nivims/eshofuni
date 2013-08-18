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
    $bt_nav = BlockType::getByHandle('autonav');
    $bt_nav->controller->displayPages = 'top';
    $bt_nav->controller->orderBy = 'display_asc';
    $bt_nav->controller->displaySubPages = 'none';
    $bt_nav->render('eshofuni_header_menu');
    ?>   

    
  </div><!--/.nav-collapse -->
        </div>
      </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
       <?php
          $a = new Area('Site banner');
          $a->display($c);
          ?>
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