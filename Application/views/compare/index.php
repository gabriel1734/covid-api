<?php

use Application\components\FooterComponent;
use Application\components\HeaderComponent;

$header = new HeaderComponent();
$footer = new FooterComponent();

?>
<?php echo $header->render(); ?>
<section>
  <h1 class="h1-home">Selecione dois países para fazer uma comparação</h1>
  <div class="select-div">
    <form action="/Compare/show/" method="get">
      <select name="country1" id="country1">
        <option value="0">Selecione um país</option>
        <?php
        foreach ($data['countries'] as $country) {
          echo "<option value='$country'>$country</option>";
        }
        ?>
      </select>
      <select name="country2" id="country2">
        <option value="0">Selecione um país</option>
        <?php
        foreach ($data['countries'] as $country) {
          echo "<option value='$country'>$country</option>";
        }
        ?>
      </select>
      <button type="submit" id="compare"  class="btn-compare">Comparar</button>
    </form>
  </div>
</section>
<?php echo $footer->render(); ?>