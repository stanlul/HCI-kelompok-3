<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/login.css">

  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action=login.php>
          <?php include('errors.php'); ?>
        <div class="txt_field">
            <input type="text" name= "username" required>
            <span></span>
            <label>Username</label>
        </div>

        <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <input type="submit" name="login_user">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
        <div><a href="index.php">Back to home</a></div>
      </form>
    </div>
</body>
</html>