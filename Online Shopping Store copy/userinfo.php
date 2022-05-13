<?php
if(!isset($_SESSION))
{
    session_start();
}
$firstname=filter_input(INPUT_POST, 'fistname');
$lastname=filter_input(INPUT_POST, 'lastname');
$phone=filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
$password=filter_input(INPUT_POST, 'password');
if ($firstname== null || $password == null || $lastname== null || $phone== null ) {

     include ('sign_up.php');
}

else {
    require_once ('database.php');
    unset( $_SESSION['errorsignup']);
    $query = 'INSERT INTO Customer
                 (FirstName,LastName,Phonenumber,Passw0rd)
              VALUES
                 (:firstname,:lastname,:phone,:passw0rd)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstname', $firstname);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':passw0rd', "12345");
    $statement->execute();
    $statement->closeCursor();
    include ('login.php');
}

?>
