<?php
declare(strict_types=1);

$language= $_COOKIE['lang'];

function trans($key1, $key2) {
  $locale = $language ?? 'en';

  $translations = require __DIR__.'/lang/'.$locale.'.php';
  
  return $Content[$key1][$key2];
};
