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

      <div class="infoimg"
        <img src="">
      </div>

      <div class="infotext">
        <h1><?=trans('newsletter','title')?></h1>

        <p><?=trans('newsletter','content')?></p>
      </div>




        <main  id="signup">
            <form class="col-lg-6 mt-3" action="signup.php" method="post">

              <?php foreach ($errors as $error): ?>
                  <div class="alert alert-danger">
                      <?php echo $error; ?>
                  </div><!-- /alert -->
              <?php endforeach; ?>

            <div class="name">
              <div class="form-group email">
                  <label for="email"></label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="<?=trans('contactForm','email')?>">
              </div><!-- /form-group -->
            </div>
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
