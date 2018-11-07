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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
    <div class="contact">
      <p><?=$content[2]['phone']?></p>
      <p><?=$content[2]['visitingAdress']?></p>
      <p><?=$content[2]['email']?></p>
    </div>
  </footer>
</body>
</html>
