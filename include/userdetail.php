<!-- this is for - After Log in Navbar එක Change කරන්න -->

<?php
$username=$_SESSION['username'];

?>

<div class="navbar_btns">
    <a href=<?php echo $url_newpost;?> class="navbar_btn fa fa-plus"></a>
    <a href=<?php echo $url_profile?> class="navbar_btn fa fa-user-circle-o">.<?php echo "$username" ?></a>
    <a href=<?php echo $url_logout;?> class="navbar_btn fa fa-sign-out"></a>

</div>