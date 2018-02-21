<?php /*--- 2018 01 10  19:45 Pavith @Home ---*/
/*---Post View +1 ---*/
function increament_views($id , $author) {
  /*--- Check Record ---*/
  include("dbconnect.php");

  $query="SELECT *
          FROM user_post
          WHERE postID='$id'
          ";

  $result=mysqli_query($conn , $query);

  if($result==true) {
      /*--- If Record (Post) Available ---*/
      if(mysqli_num_rows($result) == 1) {
          while($row = mysqli_fetch_assoc($result)) {
              $views=$row['postViews'];
              $views = $views + 1;

              $query="UPDATE user_post
                      SET postViews='$views'
                      WHERE postID='$id'
                      ";
              $res=mysqli_query($conn , $query);

              if($res) {
                  //echo "වැඩේ ගොඩ";
              } else {
                  echo "Problem updating views";
              }

              return $row['postViews'];
          }
      } else {
          //printf("පෝස්ටු නැත ;(");

          $query="INSERT INTO user_post (postAuthor , postID ,postLikes , postDisLikes ,postComments ,postViews)
                  VALUES ('$author' , '$id' , '0' , '0' , '0' , '1')";
          $result=mysqli_query($conn , $query);

          if($result) {
               //echo "New Record එකක් දැම්මා";
               return 1;
          } else {
              echo "Problem in inserting the post";
          }
      }
  } else {
      echo "Failed to load views";
  }

}

return 0; /*--- i have no idea , but this fixed boodealn errorrr. Pavith 2018 01 10 20:06 ---*/

?>

<?php /*--- Totle Views ---*/
function showViews($id , $author)  {
  include("dbconnect.php");

  $query="SELECT *
          FROM user_post
          WHERE postID='$id'
          ";

  $result=mysqli_query($conn , $query);

  if($result) {
      if(mysqli_num_rows($result)==1) {
        while($row=mysqli_fetch_assoc($result)) {
            return $row['postViews'];
        }
      } else {
        return 0;
      }

  }

  return 0;
}


?>
