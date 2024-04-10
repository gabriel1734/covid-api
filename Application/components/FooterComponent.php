<?php
namespace Application\components;

class FooterComponent{
  public function render($dataHora = null, $country = null){
    
    $dataHora = explode(' ', $dataHora);
    $date = $dataHora[0];
    $date = explode('-', $date);
    $dataHora = $date[2] . '/' . $date[1] . '/' . $date[0] . ' ' . $dataHora[1];
    return '
      <footer class="footer">
        <nav class="grid-footer">
          <ul>
            <li>Menu</li>
            <li><a href="/">Home</a></li>
            <li><a href="/Countries">Countries</a></li>
            <li><a href="/about">About</a></li>
          </ul>
          </nav>
        <div>
          <p>Ultima consulta em: ' . $dataHora . '</p>
          <p>Último país consultado: ' . $country . '</p>
        </div>
      </footer>
    ';
  }
}