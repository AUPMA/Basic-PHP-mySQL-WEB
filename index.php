<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags - index page--------------------------------------- -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Links to files - only affected with index page -------------- -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/css/font-awesome.css">
    <link rel="shortcut icon" />
    <script src="cc.js"></script>
    <!-- ------------------------------------------------------------- -->
    <title>Hyperion</title>
</head>
<body class="body_index overlapindex">
    <?php 
    /*-- Page locations as a variables ---*/
        $url_navbar='./include/navbar.php';
        $url_allpost='./include/allpost.php';
        $url_css='./css.php';
        $url_index='./index.php';
        $url_toppost='./include/toppost.php';
        $url_contactus='./include/contactus.php';
        $url_search='./include/search.php';
        $url_login='./include/login.php';
        $url_signup='./include/signup.php';
        $url_newpost='./include/newpost.php';
        $url_profile='./include/profile.php';
        $url_logout='./include/logout.php';
        $url_logincode='./include/login_code.php';
      
        include ("$url_navbar");
    
    ?>

    <div class="indexintro">
        <h2>Welcome To Hyperion!</h2>
        <p>This is a Community Blog. About Science and Technology. You Can Shere Your Knoladge or find solutions to your problems.</p>
        <p>This Website is in early Stage (Under-Development) Hope to add more.. -AUPMA </p>
    </div>
    <div class="indexbtns">
        <a href="./include/allpost.php">Browse</a>
        <a href="./include/signup.php">Register</a>
        <a href="./include/tandc.php">Terms & Conditions</a>
        <a href="./include/contactus.php">Contact Us</a>
    </div>
    
   
    
</body> 
</html>