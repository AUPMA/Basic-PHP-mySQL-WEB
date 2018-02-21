<?php

include("url.php");

if(!isset($_SESSION['username'])) {
	header('Location:../index.php');
} else {
	$user=$_SESSION['username'];
}


$query="SELECT *
		FROM users
		WHERE username='$user'
		";

$result=mysqli_query($conn , $query );

if($result) {
	if(mysqli_num_rows($result)==1) {
		while($row=mysqli_fetch_assoc($result)) {
			if($row['usertype']=='admin') {
                
					header("location:admin.php");
			}
			include("profile_detail_frame.php");
		}
	}
} else {
	echo "failed";
}


?>
