<?php
require __DIR__."/header.php";
?>
<!-- Nu skickas man till startsidan med valt språk, 
måste ändra så språkinställningen sparas pch även gäller menyn.

Ändra $content till $_SESSION??? 
Även $_GET till $_SESSION???-->

<nav>
    <img src="" alt="logo">
    <form action="index.php" method="post">
    <button type="submit" name="page" value="index"><img src="" alt="exit"></button>
    </form>
</nav>
<div>
    <a href=""><?=trans('home','title')?></a>
    <a href=""><?=trans('performance','title')?></a>
    <a href=""><?=trans('exclusivity','title')?></a>
    <a href=""><?=trans('merchandise','title')?></a>
    <a href=""><?=trans('companyContact','contact')?></a>
</div>
<form action="menu.php" method="get">
    <button type="submit" name="lang" value="sv">SWEDISH</button>
    <button type="submit" name="lang" value="en">ENGLISH</button>
</form>
