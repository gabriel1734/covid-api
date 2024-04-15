<?php
namespace Application\components;

class FooterComponent{
  public function render($dataHora = null, $country = null){
    
    $dataHora = explode(' ', $dataHora);
    $date = $dataHora[0];
    $date = explode('-', $date);
    $dataHora = $date[2] . '/' . $date[1] . '/' . $date[0] . ' ' . $dataHora[1];

    $country = str_replace('%20', ' ', $country);

    if($country != null && $dataHora != null){
      $render = ' <div>
          <p>Ultima consulta em: ' . $dataHora . '</p>
          <p>Último país consultado: ' . $country . '</p>
        </div>';
    } else {
      $render = '';
    }

    return '
      <footer class="footer">
        <nav class="grid-footer">
          <ul>
            <li>Menu</li>
            <li><a href="/">Home</a></li>
            <li><a href="/Countries">Países</a></li>
            <li><a href="/Compare">Comparar</a></li>
            <li><a href="/About">Sobre</a></li>
          </ul>
          </nav>
          '.$render.'
      </footer>
    ';
  }
}