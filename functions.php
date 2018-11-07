<?php

function changeLanguage(){
if ($_GET['lang'] === 'sv') {
   $content = $sweContent;
}
if ($_GET['lang'] === 'en') {
    $content = $engContent;
}
};