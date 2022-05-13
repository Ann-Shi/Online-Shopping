<?php
session_start();
$productid= filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$numberofproduct=filter_input(INPUT_POST, 'productNum', FILTER_VALIDATE_INT);
$price=filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
$name=filter_input(INPUT_POST, 'name');
$totalprice = $price * $numberofproduct;
if($numberofproduct<=0){
   echo 'Please enter the number of products';
}
else {
   $item = array();
   $item['Name'] = $name;
   $item['productid'] = $productid;
   $item['price'] = $totalprice;
   $item['Quantity'] = $numberofproduct;
   $_SESSION['cart'][] = $item;
}
$_SESSION['cartnumber'] += $numberofproduct;
include ('productlist.php');
?>