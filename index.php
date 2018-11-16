<?php

require __DIR__."/header.php";
require __DIR__."/functions.php";

if (!isset($_COOKIE['lang']) || (!isset($_GET['lang']))) {
    $_GET['lang'] = 'en';
    header("Location: index.php?lang=en");
    exit();
}
elseif (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang);
}
  else {
    $lang = $_COOKIE['lang'];
  }
//   header("Location: index.php");

if (isset($_GET['page'])) {
    $page = $_GET['page'] ?? 'index';
    setcookie('page', $page);

    if ($page === 'menu') {
        require __DIR__."/menu.php";

    }
    if ($page === 'index') {
        require __DIR__."/navbar.php";
        require __DIR__."/main-content.php";
        require __DIR__."/signup.php";
        
        require __DIR__."/footer.php";

    }
  }
  else {
    setcookie('page', 'index');
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
