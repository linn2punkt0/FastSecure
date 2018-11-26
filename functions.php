<?php
declare(strict_types=1);

function trans($key1, $key2) {
  if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
  }
  elseif(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];
  }
  else {
    $lang = 'en';
  }
  $locale = $lang ?? 'en';

  $translations = require __DIR__.'/lang/'.$locale.'.php';

  return $Content[$key1][$key2];
};