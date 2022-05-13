<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="styles.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>TSA Login Form</title>
</head>
<style>
    body{
        background-image: url('images/bg.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<body>
   <?php include 'Header.php'; ?>
   <form action="varifypassword.php" method="post">
   <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
         <i class="fa fa-user" ></i>
         <input type="text" placeholder="Firstname" name="firstname" >
      </div>
   
      <div class="textbox">
	      <i class="fa fa-unlock"></i>
         <input type="password" placeholder="Password" name="password" >
      </div>
      <input class="btn" type="submit" name="" value="Login">
   </div>
   </form>
</body>

</html>