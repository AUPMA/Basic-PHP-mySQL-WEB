<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results - Hyperion</title>
</head>
<body class="body_login">
    <!-- PHP include --------------------------------------------------- -->
        <?php include ('url.php'); ?>
        <?php include ('css.php'); ?>
        <?php include ('navbar.php'); ?>
    <!-- --------------------------------------------------------------- -->

            <?php

        /* search.php?q='dp' */

        

        if(isset($_POST['submit'])) {
            $q=$_POST['search'];
        } else {
            
            $q='';
        }

        $query="SELECT *
                FROM posts
                WHERE postTitle like '$q' OR
                            postTag like '$q' OR
                            postDesc like ' $q' OR
                            postAuthor like '$q'
                ";

        $result=mysqli_query($conn , $query);

        if(mysqli_num_rows($result)) {
            while($post=mysqli_fetch_assoc($result)) {
                $id=$post['postID'];
                $title=$post['postTitle'];
                $desc=$post['postDesc'];
                $tags=$post['postTag'];
                $author=$post['postAuthor'];
                $time=$post['postTime'];
                $shortpost=1;  /* short post with read more  */

                include("postframe.php");
            }
        }else{
            echo "<body class=\"body_index\">
            
            <div class=\"worngpwun\">
                <div class=\"worngpwun_sub\">
                    <p>Didn't Match With Any Post</p>
                     
                </div>     
            </div>
        </body>";
        }

        ?>

</body>
</html>