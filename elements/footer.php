
<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?> 
<div id="footer">
  <?php Loader::element('footer_required'); ?>
      <div class="container">
        <?php
        $a = new Area('footer');
        $a->display($c);
        ?>
        <p>&copy;<?php  echo date('Y')?> <?php  echo SITE?>  |  <?php echo t('Built with <a href="http://www.concrete5.org/" alt="Free Content Management System" target="_blank">concrete5 - an open source CMS</a>')?></p>
      </div>
  </body>
</html>
