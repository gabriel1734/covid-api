<?php

use Application\components\FooterComponent;
use Application\components\HeaderComponent;

$header = new HeaderComponent();
$footer = new FooterComponent();

?>

<?php echo $header->render(); ?>
<section class="compare-section">
  <table class="compare-table">
    <thead>
      <th>Dados</th>
      <th><?php echo $data['country1']['name'] ?></th>
      <th><?php echo $data['country2']['name'] ?></th>
    </thead>
    <tbody>
      <tr>
        <td>Mortes</td>
        <td><?php echo $data['country1']['mortos'] ?></td>
        <td><?php echo $data['country2']['mortos'] ?></td>
      </tr>
      <tr>
        <td>Casos</td>
        <td><?php echo $data['country1']['casos'] ?></td>
        <td><?php echo $data['country2']['casos'] ?></td>
      </tr>
      <tr>
        <td>Taxa de Mortes</td>
        <td><?php echo $data['country1']['taxaMorte'] ?></td>
        <td><?php echo $data['country2']['taxaMorte'] ?></td>
      </tr>
    </tbody>
  </table>
</section>
<?php echo $footer->render($data['log']['create_time'], $data['log']['country']); ?>