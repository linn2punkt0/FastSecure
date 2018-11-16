<?php
require __DIR__."/data.php";
require __DIR__."/functions.php";

session_start();
if (isset($_GET['lang'])) {
  if($_GET['lang'] === 'sv'){
    $_SESSION['content'] = $svContent;
  }
  else{
    $_SESSION['content'] = $enContent;
  }
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="style.css">
  <title>FastSecurity</title>
</head>
<body class="body">
  
