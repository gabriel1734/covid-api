<?php

use Application\components\HeaderComponent;

$header = new HeaderComponent();


?>
<div>
  <?php echo $header->render(); ?>
  <h1>Hello Countries</h1>
</div>