<?php session_start(); ?>
<div class="navbar">
      <h3 class="west">West Capital Finance(with log)</h3>

      <!-- <a href="index.php">Index</a> -->

       <?php 
       
       if( isset($_SESSION['username']) && $_SESSION['username'] != NULL) { ?>
        <a href="logout.php"> Logout(<?php echo $_SESSION["username"] ?>) </a>
       <?php }else{ ?>

         <a href="login.php">Sign In</a>
         <a href="register.php">Sign Up</a>
       <?php } ?>
       
      

      <a href="#">Online Banking</a>
    </div>