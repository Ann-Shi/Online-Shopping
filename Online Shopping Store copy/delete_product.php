<?php
session_start();
$count=filter_input(INPUT_POST, 'count', FILTER_VALIDATE_INT);
$quntity = filter_input(INPUT_POST, 'quntity', FILTER_VALIDATE_INT);
array_splice($_SESSION['cart'],$count,1);
$_SESSION['cartnumber'] = $_SESSION['cartnumber']- $quntity;
include ('Checkout Payment.php');
?>