
<?php include ("css.php");?>

<div class="navbar">
    <!-- Index and Other Links-------------------- -->
    <div class="container">
        <div class="navlinks" id="title">
            <i class="fa fa-ravelry"></i>
            <a href=<?php echo $url_index; ?>>Hyperion</a>
        </div>
        <div class="navlinks">
            <i class="fa fa-globe"></i>
            <a href=<?php echo $url_allpost;?>>All Posts</a>
        </div>
        <div class="navlinks">
            <i class="fa fa-rocket"></i>
            <a href=<?php echo $url_toppost;?>>Top Posts</a>
        </div>
        <div class="navlinks">
            <i class="fa fa-phone"></i>
            <a href=<?php echo $url_contactus;?>>Contact Us</a>
        </div>
        <div>
            <form class="search" role="search" action=<?php echo $url_search;?> method="post">
                <div class="search_input">
                    <input type="text" class="" placeholder="" name="search">
        
                    <button type="submit" class="fa fa-search" name="submit"> Search</button>
        
                </div>
            </form>
        </div>
        <div>
            <?php
            if(!isset($_SESSION['username'])) {
                include("navbarbtn.php");
              }
            else {
                include("userdetail.php");
              }
       ?>
        </div>
    </div>

    <!-- Search Box -------------------------------- -->
    

    <!-- Sign in & Sign Up Linked Buttons----------- -->
    
</div> <!-- Navbar Done -->

<!--  
//TODO Media Quaries -->