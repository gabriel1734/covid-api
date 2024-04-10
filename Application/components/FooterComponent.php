<?php
namespace Application\components;

class FooterComponent{
  public function render($dataHora = null){
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
      </footer>
    ';
  }
}