<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Hyperion</title>
</head>
<body class="body_login">
    <!-- PHP include --------------------------------------------------- -->
        <?php include ('url.php'); ?>
        <?php include ('css.php'); ?>
        <?php include ('navbar.php'); ?>
    <!-- --------------------------------------------------------------- -->

    <div class="login">
        <div class="login_container">
            <p class="fa fa-sign-in">.   Register</p>
            <h2>Welcome To Hyperion!</h2>

            <div class="login_form">
                    <form action="register.php" method="post">
                         <input type="text" class="reg_input"  name="username" placeholder="User Name"required autofocus>
                        <input type="text" class="reg_input"  name="firstname" placeholder="First Name"required >
                        <input type="text" class="reg_input"  name="lastname" placeholder="Last Name"required>
                        <input type="email" class="reg_input"  name="email" placeholder="E-Mail"required>
                        <input type="password" class="reg_input"  name="password" placeholder="Password"required>
                        <input type="password" class="reg_input"  name="re-password" placeholder="Comfirm Password"required>
                        <button type="submit"class="fa fa-user-plus reg_btn" name="submit">. Register</button>
                    </form>
                </div>
        </div>
        
    </div>

</body>
</html>