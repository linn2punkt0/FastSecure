<?php
declare(strict_types=1);
$errors = [];

if(isset($_POST['email'], $_POST['firstname'], $_POST['lastname'])) {
  $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
  $firstName = trim(filter_var($_POST['firstname'], FILTER_SANITIZE_STRING));
  $lastName = trim(filter_var($_POST['lastname'], FILTER_SANITIZE_STRING));;
  if ($firstName === '') {
    array_push($errors, 'Please provide your name');
  }
  if($lastName === '') {
    array_push($errors, 'Please provide your lastname');
  }
};
?>

  <style>
    .infoimg{
      height: 280px;
      background-color: grey;
    }

    .infotext h1{
      font-size: 36px;
      margin-top: 36px;
      margin-left: 16px;
    }
    .infotext p{
      font-size: 16px;
      margin-top: 16px;
      margin-left: 16px;
      line-height: 30px;
    }

    /* formstyle */
    .form-control{
      padding: 0;
      background-color: black;
      text-decoration: underline;
      text-decoration-color: white;
      border: none;
      opacity: 1;
      color: rgba(255, 255, 255, 1);
    }
    /* ::placeholder{
      background-color: black;
      color: white;
      opacity: 1;
    } */
    ::-webkit-input-placeholder{
      color: white;
    }
    .name{
      display: flex;
      align-items: center;

      align-content: center;
    }
    .email{
      width: 338px;
      border-bottom: 1px solid white;
    }
    .firstname{
      width: 164px;
      margin-right: 10px;
      border-bottom: 1px solid white;
    }
    .lastname{
      width: 164px;
      border-bottom: 1px solid white;
    }
    .btn-primary{
      width: 241px;
      height: 36px;
      margin-top: 40px;
      margin:auto;
      background-color: black;
      border-color: white;
      border-radius: 0;
      display:block;
    }


  </style>

      <div class="infoimg"
        <img src="">
      </div>

      <div class="infotext">
        <h1>Keep me informed</h1>

        <p>Sign up to our newsletter and get news about the project aswell as access to our catalogue with exclusive content.</p>
      </div>




        <main class="container" id="signup">
            <form class="col-lg-6 mt-3" action="signup.php" method="post">

              <?php foreach ($errors as $error): ?>
                  <div class="alert alert-danger">
                      <?php echo $error; ?>
                  </div><!-- /alert -->
              <?php endforeach; ?>

              <div class="form-group email">
                  <label for="email"></label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="<?=trans('contactForm','email')?>">
              </div><!-- /form-group -->

              <div class="name">
                <div class="form-group firstname">
                    <label for="firstname"></label>
                    <input type="text" name="firstname" id="text" class="form-control" placeholder="<?=trans('contactForm','firstName')?>">
                </div><!-- /form-group -->

                <div class="form-group lastname">
                    <label for="firstname"></label>
                    <input type="text" name="lastname" id="text" class="form-control" placeholder="<?=trans('contactForm','lastName')?>">
                </div><!-- /form-group -->
              </div>

                <button type="submit" class="btn btn-primary"><?=trans('contactForm','button')?></button>
            </form>
        </main><!-- /container -->
