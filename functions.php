<?php
declare(strict_types=1);
session_start();

function trans(string $key1, string $key2): string {
  if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $_GET['lang'];
  }
  elseif(isset($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
  }
  else {
    $lang = 'en';
  }
  $locale = $lang ?? 'en';

  $translations = require __DIR__.'/lang/'.$locale.'.php';

  return $Content[$key1][$key2];
};