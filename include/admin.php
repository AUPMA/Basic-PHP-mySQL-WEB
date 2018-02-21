<?php

include("url.php");

if(!isset($_SESSION['username'])){
	header('Location:../index.php');
}

else {
	$user=$_SESSION['username'];
}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Admin Panal - Hyperion</title>
		<link rel="stylesheet" href="../style.css">
	</head>

	<body class="body_login">

						<?php 
				include("navbar.php");	?>


				<div class="adminpanal">
					<!-- Post Request -->
						<div class="adminpanal_sub">
								<h2 class="fa fa-gears">. Admin Panal</h2>
								<div class="postrequest">
									<p class="title_admin">Post Requests</p><br>
									<hr>
									<?php include("post_request.php"); ?>
								</div>

						</div>
						<!-- Account Request -->
						<div class="adminpanal_sub">
								<div class="postrequest">
									<p class="title_admin">Account Requests</p><br>
									<hr>
									<?php include("account_request.php"); ?>
								</div>

						</div>	
						<!-- Users List -->
						<div class="adminpanal_sub">
								<div class="postrequest">
									<p class="title_admin">Users List</p><br>
									<hr>
									<?php include("userlist.php"); ?>
								</div>

						</div>
						<!-- Contact Msgs -->
						<div class="adminpanal_sub">
								<div class="postrequest">
									<p class="title_admin">Messages</p><br>
									<hr>
									<?php include("messages.php"); ?>
								</div>

						</div>

				</div>


			

	</body>

	</html>