<?php 
 
 include 'nav.php'; 
 include 'assets.php'; 


include 'connect.php';

if( isset($_POST['submit']))
{

 $fname  = ($_POST['fname']);
 $lname  = ($_POST['lname']);

$username  = ($_POST['username']);
$password  = ($_POST['password']);
$email  = ($_POST['email']);

if($username == "" || $password == "")
	{
	   echo "<div class= alert alert-info>Please fill all fields</div>";
	}else{
      $sql = "INSERT INTO `users`( `fname`, `lname`, `username`, `email`, `password`)VALUES ( '$fname', '$lname', '$username', '$email', '$password') "; 
      $result = mysqli_query($connect,$sql);
	if($result )
	{
  	echo "Registration was successful. You may login now";
	 }else{
	  echo "<div class= alert alert-info>Something went wrong, please try again</div>";
	}
 }

}
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Please fill the details</h1>
    </div>

    <!-- Login Form -->
    <form action="" method="post">


      <input type="text" id="login" class="fadeIn second" name="fname" placeholder="Firstname">
      
      <input type="text" id="login" class="fadeIn second" name="lname" placeholder="Lastname">
      
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">

      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">

      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">

    </form>


  </div>
</div>