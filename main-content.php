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
          <?=$content['headerContent']['title']?>
        </div>
    </div>

    <div class="third-page">
        <div class="headline">
            <?=$content['secondContent']['title']?>
        </div>
    </div>

    <div class="fourth-page">
        <div class="content-wrapper-fs">
            <div class="headline-text">
                <?=$content['FS1.0']['title']?>
            </div>
            <div class="content-box">
                <?=$content['FS1.0']['content']?>
            </div>
            <!-- implement 'scroll down' button below-->
            <div class="newsletter-button">
                <?=$content['FS1.0']['button']?>
            </div>
        </div>
        <div class="content-img"></div>
    </div>
    <div class="fifth-page">
        <div class="content-wrapper">
            <div class="headline-text">
                <?=$content['performance']['title']?>
            </div>
            <div class="content-box">
                <?=$content['performance']['content']?>
            </div>
            <div class="read-more-button">
                <?=$content['performance']['button']?> >
            </div>
        </div>
        <div class="content-img-performance"></div>
    </div>
    <div class="sixth-page">
        <div class="content-wrapper">
            <div class="headline-text">
                <?=$content['exclusivity']['title']?>
            </div>
            <div class="content-box">
                <?=$content['exclusivity']['content']?>
            </div>
            <div class="read-more-button">
                <?=$content['exclusivity']['button']?> >
            </div>
        </div>
        <div class="content-img-exclusivity"></div>
    </div>
  <div class="seventh-page">
    <div class="content-wrapper">
      <div class="headline-text">
        <?=$content['merchandise']['title']?>
      </div>
      <div class="content-box">
        <?=$content['merchandise']['content']?>
      </div>
      <div class="read-more-button">
        <?=$content['merchandise']['button']?> >
      </div>
    </div>
    <div class="content-img-merchandise"></div>
  </div>
  <div class="eight-page">
    <div class="content-wrapper-newsletter">
      <div class="headline-text">
        <?=$content['newsletter']['title']?>
      </div>
      <div class="content-box">
        <?=$content['newsletter']['content']?>
      </div>
      <!-- add input field below-->
        <div class="subscribe-email">
          <?=$content['contactForm']['email']?>
        </div>
            <!-- implement 'subscribe' button below-->
            <div class="subscribe-button">
              <?=$content['contactForm']['button']?>
            </div>
    </div>
  </div>
</div>
