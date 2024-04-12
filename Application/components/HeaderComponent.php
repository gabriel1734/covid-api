<?php
namespace Application\components;

class HeaderComponent {
  public function render() {
    return ' 
      <header>
        <nav class="navBar">
          <h1><a href="/">COVID-19</a></h1>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/Countries">Países</a></li>
            <li><a href="/Compare">Comparar</a></li>
            <li><a href="/About">Sobre</a></li>
          </ul>
        </nav>
      </header>
    ';
  }
}