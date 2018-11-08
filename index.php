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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>FastSecurity</title>
</head>
<body>
  <nav>

    <form action="index.php" method="get">
      <button type="submit" name="lang" value="sv">SV</button>
      <button type="submit" name="lang" value="en">EN</button>
    </form>
  </nav>


  <h2><?= $content[0]['title'] ?></h2>

  <footer>
  <div class="social-media">
  </div>
    <div class="contact">
      <p><?=$content[2]['phone']?></p>
      <p><?=$content[2]['visitingAdress']?></p>
      <p><?=$content[2]['email']?></p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
