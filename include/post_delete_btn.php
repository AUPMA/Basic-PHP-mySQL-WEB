
<?php
$delete_post_link='postdelete.php?postid='.$id;
if(isset($_SESSION['username']) ) {
    if($_SESSION['username']==$author || $_SESSION['usertype']=='admin') {
        echo "
        
        
        <a href=$delete_post_link type=\"button\" class=\"t\">
        <i class=\"fa fa-remove\"></i> <u>. Remove
        </a>
        </span>
        ";
    }
}
?>