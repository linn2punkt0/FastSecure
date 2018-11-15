<?php
require __DIR__."/header.php";
?>


<div class="first-page"></div>
<div class="scroll-down">Scroll down</div>

<div class="second-page">
  <div class="headline">
    <?=$content['headerContent']['title']?>
  </div>
</div>

<div class="third-page">
  <div class="headline">
    <?=$content['secondContent']['title']?>
  </div>
</div>
<div class="fourth-page">
  <div class="headline">
    <?=$content['FS1.0']['title']?>
  </div>
  <div class="content-box">
    <?=$content['FS1.0']['content']?>
  </div>
  <div class="newsletter-button">
    <?=$content['FS1.0']['button']?>
  </div>


<?php
//require __DIR__."/signup.php";
require __DIR__."/footer.php";
?>
