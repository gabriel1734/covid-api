<?php

namespace Application\components;

class HeaderComponent
{
  public function render()
  {
    return ' 
      <header>
        <nav class="navbar">
            <div class="navbar-brand">
              <a href="/" class="nav-link">Covid-19 API</a>
            </div>
            <button class="navbar-toggler" id="navbar-toggler">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="navbar-collapse" id="navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item"><a href="/Home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/Countries" class="nav-link">Países</a></li>
                <li class="nav-item"><a href="/Compare" class="nav-link">Comparar</a></li>
                <li class="nav-item"><a href="/About" class="nav-link">Sobre</a></li>
              </ul>
            </div>
        </nav>
      </header>
    ';
  }
}
