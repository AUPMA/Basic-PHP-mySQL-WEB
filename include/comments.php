<?php
    /* fetch comments from db */
      $query="SELECT * FROM comments WHERE postID='$id'  ";
      $result=mysqli_query($conn , $query);

      if($result) {
        echo "
        <div class='title_com'>
        Comments
        </div>
        ";
          if(mysqli_num_rows($result) > 0) {
            while($comment=mysqli_fetch_assoc($result)) {
                include("comment_frame.php");
            }
          }
      } else {
        echo "Query failed";
      }
?>
