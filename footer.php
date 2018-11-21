<?php

 ?>

<footer>



  <style>
    p{
      margin-bottom: 0;
    }
    .contact{
      height: 100vh;
      width: 100vw;
    }
    .contactinfo{
      margin-left: 10px;
      margin-bottom: 0px;
    }
    h2.contactinfoh2{
      padding-top: 96px;
      margin-left: 10px;
      margin-bottom: 20px;
      letter-spacing: 1px;
      font-weight: bold;
      font-size: 38px;
    }
    p{
      font-size: 16px;
      letter-spacing: 1px;

    }
    .visit {
      margin-top: 36px;
      margin-left: 10px;
    }

    /* footer menue start */
    .footermenue{
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    .to-top{
      text-align: center;
      margin-top: 26px;
      font-size: 14px;
      text-decoration: underline;
      text-decoration-color: white;
      color: white;
    }

    .footermenue-content{
      padding-top: 46px;
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    .footermenue-content a{
      padding-top: 15px;
      color: white;
    }
    .socialmedia{
      margin-top: 36px;
      display: flex;
      align-items: center;
      flex-direction: row;
    }
    .socialmedia-content{
      width: 35px;
      height: 35px;
      margin-right: 12px;
      margin-left: 12px;
      background-color: grey;
    }

    .copyright{
      margin-top: 36px;
    }
    .copyright p{
      font-size: 10px;
      margin-bottom: 0;
    }
    .legal{
      margin-top: 36px;
      display: flex;
      align-items: center;
      flex-direction: row;
    }
    .legal h3{
      margin-left: 4px;
      margin-right: 4px;
      font-size: 14px;
    }
    .wordmark{
      margin-top: 36px;
      display: flex;
      align-items: center;
      flex-direction: row;
    }

    .wordmark h3{
      font-size: 14px;
      margin-left: 4px;
      margin-right: 4px;
    }


  </style>

    <div class="contact">
      <h2 class="contactinfoh2"> <?= trans('companyContact', 'contact'); ?> </h2>

      <p class="contactinfo"><?= trans('companyContact', 'email')?></p>
      <p class="contactinfo"><?= trans('companyContact', 'phone')?></p>
      <p class="visit"><?= trans('companyContact', 'visitingAdress')?></p>



    </div>



    <div class="footermenue">

        <a href="#top"><p class="to-top"> <?=trans('companyContact','back')?> ⇧</p></a>
      <div class="footermenue-content"
        <a href=""><?=trans('home','title')?></a>
        <a href=""><?=trans('performance','title')?></a>
        <a href=""><?=trans('exclusivity','title')?></a>
        <a href=""><?=trans('merchandise','title')?></a>
        <a href=""><?=trans('companyContact','contact')?></a>
      </div>

        <div class="socialmedia">
          <div class="socialmedia-content">
          </div>
          <div class="socialmedia-content">
          </div>
          <div class="socialmedia-content">
          </div>
          <div class="socialmedia-content">
          </div>
          <div class="socialmedia-content">
          </div>
        </div>

        <div class="copyright">
          <p>Copyright © 2018 Fast Security</p>
        </div>

        <div class="legal">
          <h3>PRIVACY<h3>|
          <h3>LEAGAL<h3>|
          <h3>CONTACT US<h3>
        </div>
        <div class="wordmark">
          <h3>WORDMARK<h3>
        </div>
    </div>



  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
