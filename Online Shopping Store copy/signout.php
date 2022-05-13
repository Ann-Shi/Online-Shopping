<?php
if(!isset($_SESSION))
{
    session_start();
}
unset($_SESSION['Username']);
unset($_SESSION['CustID']);
include ("mainpage.php");
?>