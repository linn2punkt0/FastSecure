

<footer>



  <style>
    .contact{
      height: 100vh;
      width: 100vw;
    }
    .contactinfo{
      margin-left: 10px;
      margin-bottom: 0px;
    }
    h2.contactinfoh2{
      padding-top: 140px;
      font-weight: bold;
      margin-left: 10px;
      margin-bottom: 20px;
      letter-spacing: 1px;
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
    .to-top{
      text-align: center;
      padding-top: 25vh;
      font-size: 14px;
    }



  </style>
  <div class="social-media">
  </div>
    <div class="contact">
      <h2 class="contactinfoh2"><?= $_SESSION['content']['companyContact']['contact']?></h2>
      <p class="contactinfo"><?= $_SESSION['content']['companyContact']['email']?></p>
      <p class="contactinfo"><?= $_SESSION['content']['companyContact']['phone']?></p>
      <p class="visit"><?= $_SESSION['content']['companyContact']['visitingAdress']?></p>

      <a href="#top"><p class="to-top"> BACK TO THE TOP ⇧</p></a>
      <!-- <p class="visit"><?= $_SESSION['companyContact']['backToTop']?></p> -->
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
