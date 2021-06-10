<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Signup</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
</html>
<body>
    <div class="center">
        <h1>Signup</h1>
        <form method="POST" action="signup.php">
            <?php include('errors.php'); ?>
            <div class="txt_field">
                <h2>Username</h2>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="txt_field">
                <h2>Email</h2>
                <input type="email" name="email" <?php echo $email; ?>>
            </div>
            <div class="txt_field">
                <h2>Password</h2>
                <input type="password" name="password_1"required>
            </div>
            <div class="txt_field">
                <h2>Password confirm</h2>
                <input type="password" name="password_2" required>
            </div>
            <input type="submit" name="register" value="Signup">
            <div class="signup_link">
                already member?
                <a href="login.php">login</a>
            </div>
        </form>
    </div>
</body>