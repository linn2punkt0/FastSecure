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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sign up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <main class="container">
            <form class="col-lg-6 mt-3" action="signup.php" method="post">

              <?php foreach ($errors as $error): ?>
                  <div class="alert alert-danger">
                      <?php echo $error; ?>
                  </div><!-- /alert -->
              <?php endforeach; ?>

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="text" class="form-control">
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="firstname">Last Name</label>
                    <input type="text" name="lastname" id="text" class="form-control">
                </div><!-- /form-group -->

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email@email.com">
                </div><!-- /form-group -->
                <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
        </main><!-- /container -->
    </body>
</html>
