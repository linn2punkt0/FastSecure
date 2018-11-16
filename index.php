<?php

require __DIR__."/header.php";
require __DIR__."/functions.php";


if (isset($_GET['lang'])){
  $lang = $_GET['lang'];
  setcookie('lang', $lang);
}
elseif (!isset($_GET['lang'])){
  header("Location: index.php?lang=en");
}


//   header("Location: index.php");

if (isset($_GET['page'])) {
    $page = $_GET['page'] ?? 'index';

    if ($page === 'menu') {
        require __DIR__."/menu.php";

    }
    elseif ($page === 'index') {
        require __DIR__."/navbar.php";
        require __DIR__."/main-content.php";
        require __DIR__."/signup.php";

        require __DIR__."/footer.php";

    }
  }
  else {
    require __DIR__."/navbar.php";
    require __DIR__."/main-content.php";
    require __DIR__."/signup.php";

    require __DIR__."/footer.php";
  }




// Denna visas endast när man trycker på hamburgermenyn. Då visas inget annat, utan menyn blir helskärm.
// require __DIR__."/menu.php";

// Skapa if-statement för detta.

// Dessa requiras som standard och kommer tillbaka när man trycker på exit i menyn.
// require __DIR__."/navbar.php";
// require __DIR__."/main-content.php";
// require __DIR__."/signup.php";

// require __DIR__."/footer.php";
// ?>
