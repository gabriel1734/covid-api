<?php

use Application\components\HeaderComponent;

$header = new HeaderComponent();

?>

<div>
  <?php echo $header->render(); ?>
  <section class="country-show">
    <table class="country-table">
      <thead>
        <th>Provincia/Estado</th>
        <th>Confirmados</th>
        <th>Mortos</th>
        <th>Taxa de Letalidade</th>
      </thead>
      <tbody>
        <?php
        foreach ($data['country'] as $country) {
          $taxaMorte = $taxaMorte = number_format(($country->Mortos / $country->Confirmados) * 100, 2, ',', '.');
          echo "<tr>";
          echo "<td>$country->ProvinciaEstado</td>";
          echo "<td>$country->Confirmados</td>";
          echo "<td>$country->Mortos</td>";
          echo "<td>$taxaMorte%</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <div class="grid-container show-country">
      <?php
      foreach ($data['country'] as $country) {
        $taxaMorte = number_format(($country->Mortos / $country->Confirmados) * 100, 2, ',', '.');
        echo "<div class='card'>";
        echo "<h1 class='h1-home'>Provincia / Estado: $country->ProvinciaEstado</h1>";
        echo "<p> 💀 Total de mortos: $country->Mortos</p>";
        echo "<p> 😷 Total de casos: $country->Confirmados</p>";
        echo "<p> 📈 Taxa de letalidade: $taxaMorte%</p>";
        echo "</div>";
      }
      ?>
    </div>

  </section>
</div>