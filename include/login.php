<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in - Hyperion</title>
</head>
<body class="body_login">
    <!-- PHP include --------------------------------------------------- -->
        <?php include ('url.php'); ?>
        <?php include ('css.php'); ?>
        <?php include ('navbar.php'); ?>
    <!-- --------------------------------------------------------------- -->

    <div class="login">
        <div class="login_container">
            <p class="fa fa-sign-in">.   Log in</p>
            <h2>Welcome Back!</h2>

            <div class="login_form">
                    <form action="login_code.php" method="post">
                        <input type="text" name="username" placeholder="Enter Your Username *" class="lonin_input" required autofocus> <br>
                        <input type="password" name="password" placeholder="Enter Your Password *" class="lonin_input"required>
                        <button type="submit" name="submit" class="fa fa-sign-in login_btn">. Log in</button>
                    </form>
                </div>
        </div>
        
    </div>

</body>
</html>