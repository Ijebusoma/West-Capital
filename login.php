<?php 
 
 include 'nav.php'; 
 include 'assets.php'; 


include 'connect.php';

if( isset($_POST['submit']))
{

$username  = ($_POST['username']);
$password  = ($_POST['password']);

if($username == "" || $password == "")
	  {
	   echo "<div class='alert'>Some fields are empty..</div>";
	  
	  }else{
	  
	$sql = "select * from users where username = '$username' and password = '$password' ";
	$result = mysqli_query($connect,$sql);
	  $num_rows = mysqli_num_rows($result);
	  
	if($num_rows > 0)
		{

      echo $username;

       $_SESSION["username"] = $username;
	     header('location:index.php');
	
	  }else{
	 
	 echo "<div class= alert alert-info>Invalid Login details</div>";
	}

 }

}
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Welcome Back</h1>
    </div>

    <!-- Login Form -->
    <form action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>


  </div>
</div>