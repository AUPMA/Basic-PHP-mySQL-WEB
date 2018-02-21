<?php

if(!isset($_SESSION['username'])){
	header('index.php');
}
else if($_SESSION['usertype']!='admin') {
  header('/index.php');
}
else {
	$user=$_SESSION['username'];
}

/* fetch user detail */
$query="SELECT * FROM posts_buffer";

$result=mysqli_query($conn , $query );

if($result) {
  if(mysqli_num_rows($result)==0) {
      echo "No more requests to show";
  }

	else if(mysqli_num_rows($result)>0) {
		while($row=mysqli_fetch_assoc($result)) {
		    include("post_request_frame.php");
    }
  }
} else {
	echo "failed";
}

?>