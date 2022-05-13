<?php
session_start();
$count = filter_input(INPUT_POST, 'arraycount', FILTER_VALIDATE_INT);
$_SESSION['cartnumber']=0;
$count=0;
unset($_SESSION['cart']);
include ('productlist.php');
?>
