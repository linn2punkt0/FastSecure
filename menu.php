<?php
require __DIR__."/header.php";
?>
<!-- Nu skickas man till startsidan med valt språk, 
måste ändra så språkinställningen sparas pch även gäller menyn.

Ändra $content till $_SESSION??? 
Även $_GET till $_SESSION???-->

<nav>
    <img src="" alt="logo">
    <a href="index.php"><img src="" alt="exit"></a>
</nav>
<div>
    <a href=""><?=$_SESSION['content']['home']['title']?></a>
    <a href=""><?=$_SESSION['content']['performance']['title']?></a>
    <a href=""><?=$_SESSION['content']['exclusivity']['title']?></a>
    <a href=""><?=$_SESSION['content']['merchandise']['title']?></a>
    <a href=""><?=$_SESSION['content']['companyContact']['contact']?></a>
</div>
<form action="menu.php" method="get">
    <button type="submit" name="lang" value="sv">SWEDISH</button>
    <button type="submit" name="lang" value="en">ENGLISH</button>
</form>
