<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hyperion</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="body_index">

    <?php

include("url.php");
include("navbar.php");
include_once("postlog.php");


	/* post.php?id=2 */
	if(isset($_REQUEST['id'])) {
		$id=$_REQUEST['id'];

		$query="SELECT * FROM posts WHERE postID='$id'";
		$result=mysqli_query($conn , $query);

		if($post=mysqli_fetch_assoc($result)) {
				$id=$post['postID'];
				$title=$post['postTitle'];
				$desc=$post['postDesc'];
				$tags=$post['postTag'];
				$author=$post['postAuthor'];
				$time=$post['postTime'];
				$shortpost=0;
				/* increament view by 1 */
				$views=increament_views($id, $author);

				include("postframe.php");
		}
	}

		/* post.php?tags=dp */
	if(isset($_REQUEST['tags'])) {
		$tag=$_REQUEST['tags'];

		$query="SELECT * FROM posts WHERE postTag='$tag'";
		$result=mysqli_query($conn , $query);

		if(mysqli_num_rows($result) > 0) {
			while($post=mysqli_fetch_assoc($result)) {
				$id=$post['postID'];
				$title=$post['postTitle'];
				$desc=$post['postDesc'];
				$tags=$post['postTag'];
				$author=$post['postAuthor'];
				$time=$post['postTime'];


				include("postframe.php");
			}

		}

	}

	/* post.php?user=qt */
if(isset($_REQUEST['user'])) {
	$user=$_REQUEST['user'];

	$query="SELECT * FROM posts WHERE postAuthor='$user'";
	$result=mysqli_query($conn , $query);

	if(mysqli_num_rows($result) > 0) {
		while($post=mysqli_fetch_assoc($result)) {
			$id=$post['postID'];
			$title=$post['postTitle'];
			$desc=$post['postDesc'];
			$tags=$post['postTag'];
			$author=$post['postAuthor'];
			$time=$post['postTime'];
			$shortpost=0;  /*  Full post with without read more */

			include("postframe.php");
		}

	}

}


?>

</body>
</html>