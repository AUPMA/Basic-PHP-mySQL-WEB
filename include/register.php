<?php
include("url.php");

/* If already logged in then redirect to previous page */
if(isset($_SESSION['username'])) {
		header('Location:../index.php');
}

if(isset($_POST['submit'])) {

	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
	$emailid=mysqli_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);

	include("dbconnect.php");

	/* CHECK if same user or email exists or not ? */
	$query="SELECT * FROM users , users_buffer WHERE username='$username' OR emailid='$emailid' ";
	$result=mysqli_query($conn , $query);
	$rows=mysqli_num_rows($result);

	if($rows > 0) {
		header("location:register.php");
	}
	else {
		$query="INSERT INTO users_buffer (username, firstname,lastname, password, emailid)
				VALUES ('$username','$firstname','$lastname','$password','$emailid')";
		mysqli_query($conn , $query);
		header("location:../index.php");
	}


}

/* * * * * Registeration Form * * * * */
else {
	header["location:signup.php"];

}


?>
