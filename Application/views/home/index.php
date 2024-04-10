<?php

use Application\components\HeaderComponent;
use Application\components\FooterComponent;

$header = new HeaderComponent();
$footer = new FooterComponent();
?>
<?php echo $header->render(); ?>
<section>
  <h1 class="h1-home">Selecione um país</h1>
  <div class="grid-container">
    <a href="Countries/show/Brazil">
      <div class="card">
        <img src="https://flagsapi.com/BR/flat/64.png">
        <p>Brasil</p>
        <?php
        echo "<p> 💀 Total de mortos: ". $data['Brazil']['mortos']."</p>";
        echo "<p> 😷 Total de casos: ". $data['Brazil']['casos']."</p>";
        ?>
      </div>
    </a>
    <a href="Countries/show/Canada">
      <div class="card">
        <img src="https://flagsapi.com/CA/flat/64.png">
        <p>Canadá</p>
        <?php
        echo "<p> 💀 Total de mortos: ". $data['Canada']['mortos'] ."</p>";
        echo "<p> 😷 Total de casos: ". $data['Canada']['casos']."</p>";
        ?>
      </div>
    </a>
    <a href="Countries/show/Australia">
      <div class="card">
        <img src="https://flagsapi.com/AU/flat/64.png">
        <p>Austrália</p>
        <?php
        echo "<p> 💀 Total de mortos: ". $data['Australia']['mortos']."</p>";
        echo "<p> 😷 Total de casos: ". $data['Australia']['casos']."</p>";
        ?>
      </div>
    </a>
  </div>
</section>
<?php echo $footer->render($data['log']['create_time'], $data['log']['country']); ?>