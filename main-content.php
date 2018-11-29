<?php

require __DIR__."/header.php";
 ?>

<div class="content">

  <!-- Second first page start  -->
        <div class="first-page" id="first-page">
          <!-- Fade in text block start  -->
            <section class="content">
              <ul>
                <li>
                  <div class="right">
                      <div class="headline">
                          <h2><?=trans('firstContent', 'title')?></h2>
                      </div>
                  </div>

              </li>
            </ul>
      </section>


      <!-- implement 'scroll down' button below-->
            <div class="scroll-down">
                  <?=trans('firstContent','scroll')?>
            </div>
            <img class="pil-ner-top" src="iconer/pil-ner-top.svg">
        </div>

  <!-- //First page end  -->


<!-- Second page start  -->
      <div class="second-page" id="second-page">
        <!-- Fade in text block start  -->
          <section class="content">
            <ul>
              <li>
                <div class="right">
                    <div class="headline">
                        <h2><?=trans('headerContent', 'title')?></h2>
                    </div>
                </div>
              </div>
            </li>
          </ul>
    </section>
<!-- //Second page start  -->

<!-- Third page start  -->
          <div class="third-page" id="third-page">
            <!-- Fade in text block start  -->
              <section class="content">
                <ul>
                  <li>
                    <div class="right">
                <div class="headline">
                    <h2><?=trans('secondContent', 'title')?></h2>
                </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
<!-- //Third page end  -->

<!-- Fourth page start  -->
            <div class="fourth-page" id="fourth-page">
                <div class="content-wrapper-fs">
                  <div class="headline-text">
                    <?=trans('FS1.0','title')?>
                  </div>
                </div>

            <div class="content-box">
                <?=trans('FS1.0','content')?>
            </div>
            <!-- implement 'scroll down' button below-->
            <div class="newsletter-button">
                <?=trans('FS1.0','button')?>  <img class="pil-ner" src="iconer/pil-ner.svg">
            </div>
        </div>
<!-- //Fourth page start  -->

    <div class="fifth-page" id="fifth-page">
      <div class="content-img"></div>
        <div class="content-wrapper" id="silent">
            <div class="headline-text">
                <?=trans('performance','title')?>
            </div>
            <div class="content-box">
                <?=trans('performance','content')?>
            </div>
            <div class="read-more-button">
              <p>  <?=trans('performance','button')?></p>
              <img class="pil" src="iconer/pil-hoger.svg">
            </div>
        </div>
        <div class="content-img-performance"></div>
    </div>
    <div class="sixth-page" id="sixth-page">
        <div class="content-wrapper">
            <div class="headline-text">
                <?=trans('adventure','title')?>
            </div>
            <div class="content-box">
                <?=trans('adventure','content')?>
            </div>
            <div class="read-more-button">
                <p><?=trans('adventure','button')?> </p>
                <img class="pil" src="iconer/pil-hoger.svg">
            </div>
        </div>
        <div class="content-img-adventure"></div>
    </div>
  <div class="seventh-page" id="seventh-page">
    <div class="content-wrapper">
      <div class="headline-text">
        <?=trans('sustainable','title')?>
      </div>
      <div class="content-box">
        <?=trans('sustainable','content')?>
      </div>
      <div class="read-more-button">
        <p><?=trans('sustainable','button')?></p>
        <img class="pil" src="iconer/pil-hoger.svg">
      </div>
    </div>
    <div class="content-img-sustainable"></div>
  </div>
  <div class="eight-page" id="eight-page">
      <div class="content-wrapper">
          <div class="headline-text">
              <?=trans('sound','title')?>
          </div>
          <div class="content-box">
              <?=trans('sound','content')?>
          </div>
          <div class="read-more-button">
            <p>  <?=trans('sound','button')?></p>
            <img class="pil" src="iconer/pil-hoger.svg">
          </div>
      </div>
      <div class="content-img-performance"></div>
  </div>
</div>
