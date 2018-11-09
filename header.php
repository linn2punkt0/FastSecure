<?php
require __DIR__."/data.php";
require __DIR__."/functions.php";

$content = $enContent;
if (isset($_GET['lang'])) {
  if($_GET['lang'] === 'sv'){
    $content = $svContent;
  }
  if($_GET['lang'] === 'en'){
    $content = $enContent;
  }
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>FastSecurity</title>
</head>
<body>
  <nav>

    <form action="index.php" method="get">
      <button type="submit" name="lang" value="sv">SV</button>
      <button type="submit" name="lang" value="en">EN</button>
    </form>
  </nav>
