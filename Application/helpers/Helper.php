<?php
namespace Application\helpers;

if (!function_exists('dd')) {
  function dd(...$vars)
  {
    foreach ($vars as $var) {
      echo '<pre>';
      if (is_string($var)) {
        echo $var;
      } else {
        var_dump($var);
      }
      echo '</pre>';
    }
    die(1);
  }
}
