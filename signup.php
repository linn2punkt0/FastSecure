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
        <main class="container" id="signup">
            <form class="col-lg-6 mt-3" action="signup.php" method="post">

              <?php foreach ($errors as $error): ?>
                  <div class="alert alert-danger">
                      <?php echo $error; ?>
                  </div><!-- /alert -->
              <?php endforeach; ?>

                <div class="form-group">
                    <label for="firstname"><?=trans('contactForm','firstName')?></label>
                    <input type="text" name="firstname" id="text" class="form-control">
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="firstname"><?=trans('contactForm','lastName')?></label>
                    <input type="text" name="lastname" id="text" class="form-control">
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="email"><?=trans('contactForm','email')?></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email@email.com">
                </div><!-- /form-group -->
                <button type="submit" class="btn btn-primary"><?=trans('contactForm','button')?></button>
            </form>
        </main><!-- /container -->
