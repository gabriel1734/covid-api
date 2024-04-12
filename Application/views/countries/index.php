<?php

use Application\components\FooterComponent;
use Application\components\HeaderComponent;

$header = new HeaderComponent();
$footer = new FooterComponent();


?>
<?php echo $header->render(); ?>


<h1 class="h1-home">Selecione um país</h1>
<div class="grid-countries">
  <?php
  foreach ($data['countries'] as $country) {
    echo "<a href='Countries/show/" . $country . "'>";
    echo "<div class='card'>";
    echo "<p>$country</p>";
    echo "</div>";
    echo "</a>";
  }
  ?>
</div>
<?php echo $footer->render($data['log']['create_time'], $data['log']['country']); ?>