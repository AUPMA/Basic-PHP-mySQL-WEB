<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Post - Hyperion</title>
</head>
<body class="body_login">
    <!-- PHP include --------------------------------------------------- -->
        <?php include ('url.php'); ?>
        <?php include ('css.php'); ?>
        <?php include ('navbar.php'); ?>
    <!-- --------------------------------------------------------------- -->

                <?php

                    /* If not logged in then redirect to login page */
                    if(!isset($_SESSION['username'])){
                        header("location:login.php");
                    }

                    if(isset($_POST['submit'])) {

                        $postTitle=$_POST['post_title'];
                        $postDesc=$_POST['post_description'];
                        $postTag=$_POST['post_tag'];
                        $postAuthor=$_SESSION['username'];

                        include("dbconnect.php");

                        /* CHECK if same user or email exists or not ? */
                        $query="INSERT INTO posts_buffer (postTitle , postDesc , postTag , postAuthor)
                                VALUES ('$postTitle' , '$postDesc' , '$postTag' , '$postAuthor') ";
                        mysqli_query($conn , $query);

                        
                        header("location:allpost.php");

                    }

                    
                    else {
                   

                        include("newpost_frame.php");

                    }


            ?>

</body>
</html>