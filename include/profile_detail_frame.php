<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile -Hyperion</title>
</head>
<body class="body_index">
    <?php 
    
   
    include("navbar.php");   ?>
    
    <div class="login">
            <div class="login_container">
                <p class="fa fa-user">.   Profile</p>
                
                <div class="profile_details">
                        <img src="../image/defaultpp.png" alt="">               
                        <div class="profile_details_text">
                        <label for="name">Userame </label>
                        <?php echo $row['username'];?><br>
                        
                        <label for="email">E-Mail </label>
                        <?php echo $row['emailid'];?>
                        <label for="picture">Picture</label>
                        <form action="">
                            <input type="file">
                            <button type="submit">Upload</button>
                        </form>
                        </div>

                        
                </div>
            </div>
            
        </div>
    
 
</body>
</html>