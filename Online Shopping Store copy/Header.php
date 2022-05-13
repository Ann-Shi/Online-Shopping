<?php
if(!isset($_SESSION))
{
    session_start();
}
if (!isset( $_SESSION['cartnumber'])) {
    $_SESSION['cartnumber']=0;
}
if (!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}

if (!isset( $_SESSION['Username'])) {
    $_SESSION['Username']="Guest";
}
if (!isset( $_SESSION['CustID'])) {
    $_SESSION['CustID']=0;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <h1> TSA Convenience Store</h1>
        <ul id="left-nav">
            <li><i class="fa fa-home" fa-3x></i><a href="mainpage.php"> Home</a></li>   
		</ul>
        <ul id="right-nav">

            <li><i class="fa fa-user" fa-3x></i><?php  echo $_SESSION['Username']  ?></a></li>
            <li>
                <form action="signout.php" onsubmit="return confirm('Do you want sign out ?');">
                    <input type="submit" value="Sign Out" >
                </form>
            </li>
            <li><i class="fa fa-user" fa-3x></i><a href="login.php"> Login</a> / <a href="sign_up.php">Signup</a></li>
            <li><i class="fa fa-bars" fa-3x></i><a href="productlist.php"> Products</a></li>
            <li><i class="fa fa-envelope" fa-3x></i><a href="Contact.php"> Contact us</a></li>
            <li><a href="Checkout Payment.php"><i class="fa fa-shopping-cart"></i><div class="nav-counter nav-counter-blue"><?php echo $_SESSION['cartnumber']?></div></a>
            </li>
        </ul>
    </header>