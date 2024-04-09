<?php

use Application\components\HeaderComponent;

$header = new HeaderComponent();

?>

<div>
  <?php echo $header->render(); ?>
  <section>
    <h1 class="h1-home">Selecione um país</h1>
    <div class="grid-container">
      <a href="/Countries/show/Brazil">
        <div class="card">
          <img src="https://flagsapi.com/BR/flat/64.png">
          <p>Brasil</p>
        </div>
      </a>
      <div class="card">
        <img src="https://flagsapi.com/CA/flat/64.png">
        <p>Canadá</p>
      </div>
      <div class="card">
        <img src="https://flagsapi.com/AU/flat/64.png">
        <p>Austrália</p>
      </div>
    </div>

  </section>