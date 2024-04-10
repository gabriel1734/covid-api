<?php

use Application\components\FooterComponent;
use Application\components\HeaderComponent;

$header = new HeaderComponent();
$footer = new FooterComponent();


?>
<div>
  <?php echo $header->render(); ?>
  <h1>Hello Countries</h1>
</div>