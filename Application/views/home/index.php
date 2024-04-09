<?php

use Application\components\HeaderComponent;

$header = new HeaderComponent();


?>
<div>
  <?php echo $header->render(); ?>
  <section>

    <h1 class="h1-home">Selecione um país</h1>
    <div class="grid-container">
      <a href="Countries/show/Brazil">
        <div class="card">
          <img src="https://flagsapi.com/BR/flat/64.png">
          <p>Brasil</p>
          <?php
          $totalMortos = 0;
          $totalCasos = 0;
          foreach ($data['Brazil'] as $country) {
            $totalMortos += $country->Mortos;
            $totalCasos += $country->Confirmados;
          }
          $totalMortos = number_format($totalMortos, 0, ',', '.');
          $totalCasos = number_format($totalCasos, 0, ',', '.');

          echo "<p> 💀 Total de mortos: $totalMortos</p>";
          echo "<p> 😷 Total de casos: $totalCasos</p>";
          ?>
        </div>
      </a>
      <a href="Countries/show/Canada">
        <div class="card">
          <img src="https://flagsapi.com/CA/flat/64.png">
          <p>Canadá</p>
          <?php
          $totalMortos = 0;
          $totalCasos = 0;
          foreach ($data['Canada'] as $country) {
            $totalMortos += $country->Mortos;
            $totalCasos += $country->Confirmados;
          }
          $totalMortos = number_format($totalMortos, 0, ',', '.');
          $totalCasos = number_format($totalCasos, 0, ',', '.');

          echo "<p> 💀 Total de mortos: $totalMortos</p>";
          echo "<p> 😷 Total de casos: $totalCasos</p>";
          ?>
        </div>
      </a>
      <a href="Countries/show/Australia">
        <div class="card">
          <img src="https://flagsapi.com/AU/flat/64.png">
          <p>Austrália</p>
          <?php
          $totalMortos = 0;
          $totalCasos = 0;
          foreach ($data['Australia'] as $country) {
            $totalMortos += $country->Mortos;
            $totalCasos += $country->Confirmados;
          }
          $totalMortos = number_format($totalMortos, 0, ',', '.');
          $totalCasos = number_format($totalCasos, 0, ',', '.');

          echo "<p> 💀 Total de mortos: $totalMortos</p>";
          echo "<p> 😷 Total de casos: $totalCasos</p>";
          ?>
        </div>
      </a>
    </div>

  </section>
</div>