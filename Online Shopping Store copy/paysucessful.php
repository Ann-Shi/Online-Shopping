
<?php
$email=filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>

</style>
<head>
   <meta charset="utf-8">
   <title>TSA Contact Us</title>
   <link rel="stylesheet" href="styles.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <?php include 'Header.php'; ?>

    <h1><strong><i class="fa fa-check-square-o fa-4x" style="color:green"></i>Sucessfully!!!</h1></strong>
<form action="email.php" method="post" id ="openbuton">
 <span class="price" > <input type="submit" value="Send E-mail and go back to main page" ></span>
    <input type="hidden" name="email" value="<?php echo $email ?>"><br>
 </form>
</body>
</html>