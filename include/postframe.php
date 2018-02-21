<div class="post_frame_container">
    <div class="sub_post_con">
        <div class="nd_sub_con">

            <!-- Print Post Title 21:07 -->
            <div class="post_title">
                <h3 class="">
                    <a href=<?php echo "post.php?id="; echo $id; ?> >
                        <?php echo $title; ?>
                        
                    </a>
                </h3>
            </div>

            <!-- Print Post Contain 21:19 -->
            <div class="post_body">
                <?php
						echo $desc;
		    		?>
            </div>

            <!-- Print Post Footer 21:32 -->
            <div class="post_footer">

                <!-- Print Author Details -->

                <div class="pofooter">
                    <i class="fa fa-user"></i>
                    <a href=<?php echo "profile.php?user="; echo $author; ?> >

                        <?php echo $author?>
                    </a>
                </div>

                <!-- Print Post Tag Details -->
                <div class="pofooter">
                    <i class="fa fa-tag"></i>
                    <a href=<?php echo "post.php?tags="; echo $tags; ?> >

                        <?php echo $tags;?>
                    </a>
                </div>

                <!-- Print View Count , Hopefully ;) -->
                <div class="pofooter">
                    <i class="fa fa-eye"></i>
                    <a href="#">
                        <?php
                                    if(isset($views)) {
                                        echo $views;
                                }?>
                    </a>
                </div>
                <!-- Time !!!!!! -->
                <div class="pofooter">
                    <i class="fa fa-clock-o"></i>
                    <a href="#">
                        <?php echo $time ?> </a>
                </div>

                <!-- Delete Post Option .. Only for admin || author .. -->
                <?php
			  			$delete_post_link='delete_post.php?postid='.$id;
                          if(isset($_SESSION['username']) ) {
                            if($_SESSION['username']==$author || $_SESSION['usertype']=='admin') {
    
                                //Update Post
                                include ('deleteoption.php');
                                    }
                                }

                                
				?>



                <!-- Comments To Post -->
                <div class="comments">
                <?php
                     if(isset($_REQUEST['id'])) {
							include("comments.php");
							if(isset($_SESSION['username']))
									include("commentform.php");
					}
			?>

			</div>


            </div>
            <!-- Done 2018 01 10 21:58  -->







 

        </div>
    </div>
</div>