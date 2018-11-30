<?php
require __DIR__."/header.php";
require __DIR__."/functions.php";
require __DIR__."/navbar.php";

$page = 'index';

// THIS IS THA PAGE SELECTOR
if (isset($_GET['page'])) {
    $page = $_GET['page'] ?? 'index';
}
?>

<div class="menu-selector"  >
  <?php 
    require __DIR__."/menu.php";
  ?>
</div>

<div class="pop-up-window display"  >
  <?php 
    require __DIR__."/pop-up.php";
  ?>
</div>

<div class="index-selector">
  <?php 
    require __DIR__."/main-content.php";
    require __DIR__."/signup.php";
    require __DIR__."/footer.php";
  ?>
</div>