<!DOCTYPE html>
<html>
<head>
<title>TSA Convenience Store</title>
<link rel="stylesheet" href="styles.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h2>Best Seller</h2>
        <div class="row">
            <div class="col-md-3">
                <img src="./images/PS4.jpg" height="200" width="200">	 
                <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half" ></i>
                    <h4>PS4</h4>
                    <h4>Price:$399</h4>
                    <h5>Monthly Sale:389</h5>
                </div>
            </div>
            
            <div class="col-md-3">
                <img src="./images/Switch.jpg" height="200" width="200">
                <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half" ></i>	
                    <h4>Switch</h4>
                    <h4>Price:$450</h4>
                    <h5>Monthly Sale:273</h5>
                </div>
            </div>

            <div class="col-md-3">
                <img src="./images/iphone.jpg" height="200" width="200">
                <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
					<i class="fa fa-star-half" ></i>
                    <h4>iPhone X</h4>
                    <h4>Price:$1350</h4>
                    <h5>Monthly Sale:2951</h5>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'Footer.php'; ?>
</html>