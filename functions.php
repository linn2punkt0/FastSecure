<?php
declare(strict_types=1);


function trans($key) {
  $locale = $_GET['lang'] ?? 'en';

  $translations = require __DIR__.'/lang/'.$locale.'.php';

  echo $translations[$key];
};
