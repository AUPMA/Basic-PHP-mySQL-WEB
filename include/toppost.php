<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Posts - Hyperion</title>
</head>
<body class="body_login">
    <!-- PHP include --------------------------------------------------- -->
        <?php include ('url.php'); ?>
        <?php include ('css.php'); ?>
        <?php include ('navbar.php'); ?>
        <?php include ('dbconnect.php'); ?>
        <?php include ('postlog.php'); ?>
    <!-- --------------------------------------------------------------- -->

                <?php

            /* SHOWS MOST VIEWED POSTS */

            


                $query="SELECT *
                FROM user_post , posts
                WHERE user_post.postID=posts.postID
                ORDER BY postViews DESC
                ;
                        ";

                $result=mysqli_query($conn , $query);

            if($result==false) {
                echo "problem fetching posts";
            } else {
                if(mysqli_num_rows($result)) {
                    while($post=mysqli_fetch_assoc($result)) {
                    /* set variables */
                    $id=$post['postID'];
                    $title=$post['postTitle'];
                    $desc=$post['postDesc'];
                    $tags=$post['postTag'];
                    $author=$post['postAuthor'];
                    $time=$post['postTime'];
                                $views=showViews($id,$author);
                    $shortpost=1;  /* short post with read more  */
                    include('postframe.php');

                    }
                }
            }

            ?>

        

</body>
</html>