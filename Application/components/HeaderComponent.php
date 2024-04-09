<?php
namespace Application\components;

class HeaderComponent {
  public function render() {
    return ' 
      <header>
        <nav class="navBar">
          <h1>COVID-19</h1>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/Countries">Countries</a></li>
            <li><a href="/about">About</a></li>
          </ul>
        </nav>
      </header>
    ';
  }
}