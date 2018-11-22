<?php

require __DIR__."/header.php";
 ?>
<div class="content">
    <div class="first-page">
    <!-- implement 'scroll down' button below-->
        <div class="scroll-down">
            <?=trans('headerContent','scroll')?>
        </div>
    </div>

    <div class="second-page">
        <div class="headline">
          <?=trans('headerContent', 'title')?>
        </div>
    </div>

    <div class="third-page">
        <div class="headline">
            <?=trans('secondContent', 'title')?>
        </div>
    </div>

    <div class="fourth-page">
        <div class="content-wrapper-fs">
            <div class="headline-text">
                <?=trans('FS1.0','title')?>
            </div>
            <div class="content-box">
                <?=trans('FS1.0','content')?>
            </div>
            <!-- implement 'scroll down' button below-->
            <div class="newsletter-button">
                <?=trans('FS1.0','button')?>
            </div>
        </div>

    </div>
    <div class="fifth-page">
      <div class="content-img"></div>
        <div class="content-wrapper">
            <div class="headline-text">
                <?=trans('performance','title')?>
            </div>
            <div class="content-box">
                <?=trans('performance','content')?>
            </div>
            <div class="read-more-button">
              <p>  <?=trans('performance','button')?> ></p>
            </div>
        </div>
        <div class="content-img-performance"></div>
    </div>
    <div class="sixth-page">
        <div class="content-wrapper">
            <div class="headline-text">
                <?=trans('exclusivity','title')?>
            </div>
            <div class="content-box">
                <?=trans('exclusivity','content')?>
            </div>
            <div class="read-more-button">
                <p><?=trans('exclusivity','button')?> ></p>
            </div>
        </div>
        <div class="content-img-exclusivity"></div>
    </div>
  <div class="seventh-page">
    <div class="content-wrapper">
      <div class="headline-text">
        <?=trans('merchandise','title')?>
      </div>
      <div class="content-box">
        <?=trans('merchandise','content')?>
      </div>
      <div class="read-more-button">
        <p><?=trans('merchandise','button')?> ></p>
      </div>
    </div>
  </div>
</div>
