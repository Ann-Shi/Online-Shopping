<?php
if(!isset($_SESSION))
{
    session_start();
}
$ordercontent="This order contents: ";
foreach ( $_SESSION['cart']as $key =>$value):
    $ordercontent .=$value['Quantity'] . " of " . $value['Name'] ." ";
endforeach;
$email=filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
require  'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer() ;
$mail  ->isSMTP();
$mail  ->Host = "smtp.gmail.com";
$mail  ->SMTPAuth = "true";
$mail  ->SMTPSecure ="tls";
$mail  ->Port = 587;
$mail  ->isHTML(true);
$mail  ->Username ="tsaconveniencestore@gmail.com";
$mail  ->Password ="=Passw0rd";
$mail  ->setFrom('no-reply@howcode.org');
$mail  ->Subject = "Your Order has Placed";
$mail  ->Body = $ordercontent . " Thank you for shopping at TSA Convenience Store We are looking forward your next visiting";
$mail  ->addAddress($email);
$mail  ->send();
$_SESSION['cartnumber']=0;
unset($_SESSION['cart']);
include ('mainpage.php');

?>