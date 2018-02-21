<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Hyperion</title>
    
</head>
<body class="body_login">
    <!-- PHP include --------------------------------------------------- -->
        <?php include ('url.php'); ?>
        <?php include ('css.php'); ?>
        <?php include ('navbar.php'); ?>
        
    <!-- --------------------------------------------------------------- -->
        <?php
            if (isset($_POST["submit"])) {
                $name=mysqli_escape_string($conn,$_POST['name']);
                $email=mysqli_real_escape_string($conn,$_POST['email']);
                $msg=mysqli_escape_string($conn,$_POST['message']);

                $query="INSERT INTO messages (name , email , message )
                VALUES (' $name' , '$email' , '$msg' )";

                $result=mysqli_query($conn , $query);

                if($result) {
                    echo "Message sent successfully";
                } else {
                    echo "Some error occured.... :-(";
                }
            }

            else {
                include("contactus_frame.php");
            }
?>
           

        

</body>
</html>