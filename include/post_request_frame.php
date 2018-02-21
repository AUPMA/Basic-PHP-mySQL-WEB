<div class="a_panal_post">
    <div class="a_panal_post_sub">


        <!-- Title -->
        <div class="a_panal_post_title">
            <h3 class="">
                <?php echo $row['postTitle'];?>
            </h3>
        </div>

        <!-- Content -->
        <div class="a_panal_post_content">
            <?php echo $row['postDesc']; ?>
        </div>

        <!-- Footer Details -->
        <div class="appof">
            <i class="fa fa-user"></i>
            <?php echo $row['postAuthor']; ?>
        </div>

        <!-- Print Post Tag Details -->
        <div class="appof">
            <i class="fa fa-tag"></i>
            <?php echo $row['postTag'] ;?>
        </div>

        <!-- Accsept A=nd Discard -->
        <div class="action">
            <?php
        $id=$row['postID'];
        if(isset($_SESSION['username']) ) {
            if($_SESSION['usertype']=='admin') { 
                echo "
                    <span class=''>
                    <a href='deletepost.php?id=$id' type=\"button\" class=\"discard btn\">
                    Discard
                    </a>
                    
                    <a href='acceptpost.php?id=$id'  type=\"button\" class=\"accept btn \">
                    Accept
                    </a>
                    
                    </span>
                            ";
            }
        }
    ?>
        </div>

        <hr>


    </div>
</div>