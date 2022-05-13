<?php
if(!isset($_SESSION))
{
    session_start();
}
$rightpassword =0;
$firstname=filter_input(INPUT_POST, 'firstname');
$password=filter_input(INPUT_POST, 'password');
if ($firstname==null||$password ==null)
    $_SESSION['errorlogin']  ="Something missing on your firstname or password";
else {
    require_once ('database.php');
    $query = 'SELECT * FROM Customer
                  WHERE FirstName = :firstname';
    $statement1 = $db->prepare($query);
    $statement1->bindValue(':firstname', $firstname);
    $statement1->execute();
    $userinfo = $statement1->fetch();
    $userid=$userinfo['CustID'];
    $name = $userinfo['FirstName'];
    $statement1->closeCursor();

}
if(!($password == $userinfo['Passw0rd'])){
    $_SESSION['CustID'] = $userid;
    $_SESSION['Username'] = $name;
    include ('mainpage.php');
}
else{
    $_SESSION['errorlogin']  ="Your password or username is not correct";
    include ('login.php');
}
?>