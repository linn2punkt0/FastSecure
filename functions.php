<?php
declare(strict_types=1);

function trans($key1, $key2) {
  if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
  }
  else{
    $lang = $_COOKIE['lang'];
  }
  $locale = $lang ?? 'en';

  $translations = require __DIR__.'/lang/'.$locale.'.php';

  return $Content[$key1][$key2];
};

function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
