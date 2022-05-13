<?php

if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>TSA Registration</title>
</head>
<style>
    body{
        background-image: url('images/bg.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<body>
	<?php include 'Header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offser=md-1">
				<div class="row">
    				<div class="col-md-5 register-left">
						<h2>About us</h2>
						<h4>Join us to get more promotions!</h4>
					</div>

					<div class="col-md-7 register-right" >
						<h2>Register Here</h2>
						<div class= "register-form">
							<div class="form-group">
                                <form action="userinfo.php" method="post">
								<input type ="text" class="form-control" placeholder="Firstname" name="fistname">
                                    <input type ="text" class="form-control" placeholder="Lastname" name="lastname">
                                    <input type ="text" class="form-control" placeholder="Phonenumber" name="phone">
								     <input type ="password" class="form-control" placeholder="Password" name="password">

							</div>										
							<button type="submit" class="btn btn-primary">Register</button>
                            </form>

						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</body>

<?php include 'Footer.php'; ?>
</html>