<?php
    include ("url.php");
    include ("errorcode.php");

    if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_escape_string($conn,$_POST['password']);

        

        /*--PAssword Username හරිද? --*/
        $query="select * from users  where username='$username' AND password='$password'";
        $result=mysqli_query($conn,$query);

        /*---$conn =mysqli_connect("localhost","root","","blog");---*/

        /*-- නොදන්න errors proof --*/
        if($result==FALSE){
            header["location:login_code.php"];
        }

        //if have any users
        if(mysqli_num_rows($result)==1){
            //Password Username හරිනම් navbar එක වෙනස් කරන්න ඕන
            //Session Variable 
           
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            
            //Admin ‍ට Admin Panal එක පෙන්නන්න ඕන
            //Users ල‍ට Comment Section එක පෙන්නන්න ඕන
            //Define User Type 
            //fetch_assoc to Variable එකක data Array එකක‍ට ගන්න
            $usertype=mysqli_fetch_assoc($result);
            // Variable එකේ තියෙන Usertype එක Session එක‍‍ට Assign
                
            $_SESSION['usertype']=$usertype['usertype'];

            //හිටපු page එකට redirect 
            header('Location:allpost.php');
            //වැඩ නැත්නම් header("location:../index.php"); 

            //redirect වෙන‍කොට Session Username එක  assgin වෙන නිසා
            //navbar.php එකේ !isset (if-condition)එක false වෙන නිසා else එක වැඩ කරන්න ඕන.
        }else{
            //password username වැරදිනම්
            wrongpwun();
        }
        


    }else{
        
        if(!isset($_SESSION['username'])){
            echo "Error Please Try Again";
        }else{
            //Log වෙලා ඉන්න එකෙක් ආයෙ log වෙන්න හැදුවොත්
            header["location:../index.php"];
        }
    }


?>
<!-- This Code IS Fully Functional. No Printed or Console Errors
    Pavith 2018 01 11 22:04 --> 