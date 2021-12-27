<?php
$pageTitle="Reports";
  ob_start() ?>
<div class="container">
  <?php ShowReports(); ?>
  </div>
    <?php
$content = ob_get_clean();

include "templates/layout.html.php";
?>
