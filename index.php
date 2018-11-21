<?php

require __DIR__."/header.php";
require __DIR__."/functions.php";

$page = 'index';



// THIS IS THE LANGUANGE SELECTOR
if (isset($_GET['lang'])){
  $lang = $_GET['lang'];
  setcookie('lang', $lang);
  set_url("index.php?lang=$lang&page=$page");
}
elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
    set_url("index.php?lang=$lang&page=$page");
}
elseif ((!isset($_GET['lang'])) || (!isset($_COOKIE['lang']))){
    $lang= 'en';
    setcookie('lang', $lang);
    set_url("index.php?lang=$lang&page=$page");
  }
//   header("Location: index.php");



// THIS IS THA PAGE SELECTOR
if (isset($_GET['page'])) {
    $page = $_GET['page'] ?? 'index';

    if ($page === 'menu') {
        require __DIR__."/menu.php";
        set_url("index.php?lang=$lang&page=$page");
    }
    if ($page === 'index') {
        require __DIR__."/navbar.php";
        require __DIR__."/main-content.php";
        require __DIR__."/signup.php";

        require __DIR__."/footer.php";
        set_url("index.php?lang=$lang&page=$page");
    }
  }
  else {
    require __DIR__."/navbar.php";
    require __DIR__."/main-content.php";
    require __DIR__."/signup.php";
    require __DIR__."/footer.php";
    set_url("index.php?lang=$lang&page=$page");
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
