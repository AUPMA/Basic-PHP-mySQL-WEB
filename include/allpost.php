<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read - Hyperion</title>
</head>

<body class="body_login">
    <!-- PHP include --------------------------------------------------- -->
    <?php include ('url.php'); ?>
    <?php include ('css.php'); ?>
    <?php include ('navbar.php'); ?>
    <?php include ('dbconnect.php');?>
    <?php include ('postlog.php');?>
    <!-- --------------------------------------------------------------- -->
    <?php


        $query="SELECT * FROM posts ORDER BY postTime DESC";
        $result=mysqli_query($conn , $query);

        if(mysqli_num_rows($result) > 0) {
            while($post=mysqli_fetch_assoc($result)) {
                        $id=$post['postID'];
                        $title=$post['postTitle'];
                        $desc=$post['postDesc'];
                        $tags=$post['postTag'];
                        $author=$post['postAuthor'];
                        $time=$post['postTime'];
                        $shortpost=1;
            $views=showViews($id,$author);

                        include("postframe.php"); /*-- ඒක තමා මේක --*/
            }
        }else{
            echo "no posts";
        }

    ?>


</body>

</html>