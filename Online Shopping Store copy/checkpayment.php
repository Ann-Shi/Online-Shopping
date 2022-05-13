<?php
if(!isset($_SESSION))
{
    session_start();
}
ini_set('memory_limit', '1024M');
$ordercontent="This order contents: ";
foreach ( $_SESSION['cart']as $key =>$value):
    $ordercontent .=$value['Quantity'] . " of " . $value['Name'] ." ";
endforeach;
$total=$_SESSION['totalprice'];
$Custid =$_SESSION['CustID'];
$date1 =date("Y/m/d");
$custname= filter_input(INPUT_POST, 'fullname');
$email=filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
$address=filter_input(INPUT_POST, 'address');
$city= filter_input(INPUT_POST, 'city');
$state=filter_input(INPUT_POST, 'state');
$postcode=filter_input(INPUT_POST, 'pcode');
$cardnumber=filter_input(INPUT_POST, 'cardnumber',FILTER_VALIDATE_INT);
$paymenttype=filter_input(INPUT_POST, 'cardtype');
$expiredate=filter_input(INPUT_POST, 'cardexpired',FILTER_VALIDATE_INT);
$cvv=filter_input(INPUT_POST, 'cvvnumber',FILTER_VALIDATE_INT);
if ($custname == null || $email == null ||
    $address == null || $city == null || $state == null || $postcode == null||$paymenttype == null||$cardnumber == null|| $cvv == null||$expiredate==null) {
    include ('checkpayment.php');
}
else {
    require_once ('database.php');

    $query = 'INSERT INTO OrderTable
                 (OrderContent, CustID, TotalPrice,OrderDate,Address,PostCode,City)
              VALUES
                 (:ordercontent, :Custid, :price, :date1,:address,:postcode,:city)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ordercontent', $ordercontent);
    $statement->bindValue(':Custid', $Custid);
    $statement->bindValue(':price', $total);
    $statement->bindValue(':date1', $date1);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':postcode', $postcode);
    $statement->bindValue(':city', $city);
    $statement->execute();
    $statement->closeCursor();
    $query1 = 'INSERT INTO Payment
                 ( CustID, Type,CardNumber,CVV,ExpireDate)
              VALUES
                 ( :Custid, :type, :cardnumber,:cvv,:expiredayte)';
    $statement = $db->prepare($query1);
    $statement->bindValue(':Custid', $Custid);
    $statement->bindValue(':type', $paymenttype);
    $statement->bindValue(':cardnumber', $cardnumber);
    $statement->bindValue(':cvv', $cvv);
    $statement->bindValue(':expiredayte', $expiredate);
    $statement->execute();
    $statement->closeCursor();

    include ('paysucessful.php');

}
?>