<?php

require __DIR__."/header.php";
 ?>
<div class="content">
    <div class="first-page">
    <!-- implement 'scroll down' button below-->
        <div class="scroll-down">Scroll down</div>
    </div>

    <div class="second-page">
        <div class="headline">
          <?=$_SESSION['content']['headerContent']['title']?>
        </div>
    </div>

    <div class="third-page">
        <div class="headline">
            <?=$_SESSION['content']['secondContent']['title']?>
        </div>
    </div>

    <div class="fourth-page">
        <div class="content-wrapper-fs">
            <div class="headline-text">
                <?=$_SESSION['content']['FS1.0']['title']?>
            </div>
            <div class="content-box">
                <?=$_SESSION['content']['FS1.0']['content']?>
            </div>
            <!-- implement 'scroll down' button below-->
            <div class="newsletter-button">
                <?=$_SESSION['content']['FS1.0']['button']?>
            </div>
        </div>
        <div class="content-img"></div>
    </div>
    <div class="fifth-page">
        <div class="content-wrapper">
            <div class="headline-text">
                <?=$_SESSION['content']['performance']['title']?>
            </div>
            <div class="content-box">
                <?=$_SESSION['content']['performance']['content']?>
            </div>
            <div class="read-more-button">
                <?=$_SESSION['content']['performance']['button']?> >
            </div>
        </div>
        <div class="content-img-performance"></div>
    </div>
    <div class="sixth-page">
        <div class="content-wrapper">
            <div class="headline-text">
                <?=$_SESSION['content']['exclusivity']['title']?>
            </div>
            <div class="content-box">
                <?=$_SESSION['content']['exclusivity']['content']?>
            </div>
            <div class="read-more-button">
                <?=$_SESSION['content']'exclusivity']['button']?> >
            </div>
        </div>
        <div class="content-img-exclusivity"></div>
    </div>
  <div class="seventh-page">
    <div class="content-wrapper">
      <div class="headline-text">
        <?=$_SESSION['content']['merchandise']['title']?>
      </div>
      <div class="content-box">
        <?=$_SESSION['content']['merchandise']['content']?>
      </div>
      <div class="read-more-button">
        <?=$_SESSION['content']['merchandise']['button']?> >
      </div>
    </div>
    <div class="content-img-merchandise"></div>
  </div>
  <div class="eight-page">
    <div class="content-wrapper-newsletter">
      <div class="headline-text">
        <?=$_SESSION['content']['newsletter']['title']?>
      </div>
      <div class="content-box">
        <?=$_SESSION['content']['newsletter']['content']?>
      </div>
      <!-- add input field below-->
        <div class="subscribe-email">
          <?=$_SESSION['content']['contactForm']['email']?>
        </div>
            <!-- implement 'subscribe' button below-->
            <div class="subscribe-button">
              <?=$_SESSION['content']['contactForm']['button']?>
            </div>
    </div>
  </div>
</div>
