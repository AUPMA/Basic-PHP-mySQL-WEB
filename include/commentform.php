<?php
    if(isset($_POST['submit'])) {

        session_start();
        include("dbconnect.php");

        $id=mysqli_escape_string($conn,$_REQUEST['id'] );
        $desc=mysqli_escape_string($conn,$_POST['commentDesc']);
        $author=mysqli_escape_string($conn,$_SESSION['username']);

        $query="INSERT INTO comments (postID , commentDesc , commentAuthor )
                VALUES ('$id' , '$desc' , '$author')
                ";

        $result=mysqli_query($conn , $query);

        if($result) {
            echo "done";
        }

        header("location:".$_SERVER['HTTP_REFERER']);
    }
?>

<div class="comment_form">

    <form  role="" action=<?php echo "commentform.php?id=".$_REQUEST['id'];?> method="post" >

      <div class="cf_text">
        <div>
          <textarea class="" id="commentDesc" placeholder="Comment here..." name="commentDesc">
          </textarea>
        </div>
      </div>

      <div class="">
        <div>
          <button type="submit" class="cf_btn fa fa-commenting" name="submit">Post</button>
        </div>
        <br>
      </div>

    </form>

</div>
