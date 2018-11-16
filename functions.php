<?php
declare(strict_types=1);


function trans($key1, $key2) {

  $locale = $_GET['lang'] ?? 'en';

  $translations = require __DIR__.'/lang/'.$locale.'.php';


  return $Content[$key1][$key2];

};
