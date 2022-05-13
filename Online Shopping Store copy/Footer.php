<?php
require_once('database.php');
if (!isset($category_id)) {
    $category_id = filter_input(INPUT_GET, 'category_id',
        FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
}

$queryCategory = 'SELECT * FROM Category
                  WHERE CateID = :category_id';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['CateName'];
$statement1->closeCursor();


$query = 'SELECT * FROM Category
                       ORDER BY  CateID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

$queryProducts = 'SELECT * FROM Product
                  WHERE CategoryID = :category_id
                  ORDER BY ProductID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>

<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles.css">
</head>

</body>
<footer>
    <div class="footer-top">
		<div class="container">
	    	<div class="row" >

				<div class="col-md-3 col-sm-6 cool-xs-12 segment-one">
					<h2>About us</h2>
					<p>We provide a varity of products which cheaper such as laptops, X-boxes. </p>
				</div>

		  		<div class="col-md-3 col-sm-6 cool-xs-12 segment-two">
		  			<h2>Finding</h2>
              			<ul>
                      		<li><a href="productlist.php "> Game  Console</a></li>
                            <li><a href="productlist2.php "> SmartPhone</a></li>
                            <li><a href="productlist3.php "> Laptop</a></li>
              			</ul>
				</div>
				  
				<div class="col-md-3 col-sm-6 cool-xs-12 segment-three">
		     		<h2>Follow Us</h2>
			 		<p>Please follow up on our social media Profile</p>
			 		<a href="#"><i class="fa fa-facebook"></i></a>
			 		<a href="#"><i class="fa fa-twitter"></i></a>
			 		<a href="#"><i class="fa fa-linkedin"></i></a>
			 		<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				  
		   		<div class="col-md-3 col-sm-6 cool-xs-12 segment-four">
		       		<h2>Contact us</h2>
			   		<p>If having any questions, please contact us.</p>
					<form action="">
			        	<input type="email">
						<input type= "submit" value= "Comment">
					</form>
				</div>

				<div class="footer-bottom-text">
					<br><br>
					<p>All right reserved by &copy;Group5</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</html>