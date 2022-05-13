<?php
if(!isset($_SESSION))
{
    session_start();
}
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>TSA Convenience Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
</head>
<style>
    body{
        background-image: url('images/bg.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php include 'Header.php'; ?>

    <div class="container">
        <h2><?php echo $category_name; ?></h2>
            <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-3">
                    <div class="Product-top">
                        <img src="./images/<?php echo $product['ImageID']; ?>" height="200" width="200">
                        <script src="quntity.js"></script>

                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                            <form action="add_product.php" method="post" id="edit_product_form">
                                <h5 class="text-info" >Name:<?php echo $product["ProuctName"]; ?></h5>
                                <h5 class="text-danger">Price: <?php echo $product["Price"]; ?></h5>
                                <h5>Quantity: <?php echo $product['Quantity']; ?></h5>
                                <input type="text" name="productNum"value=" "><br>
                                <input type="submit" value="Add to Cart" class="addcart">
                                <input type="hidden" name="product_id" value="<?php echo $product['ProductID'] ?>"><br>
                                <input type="hidden" name="count" value="<?php echo $count ?>"><br>
                                <input type="hidden" name="price" value=" <?php echo $product['Price'] ?>"><br>
                                <input type="hidden" name="name" value="<?php echo $product['ProuctName'] ?>"><br>
                                <input type="hidden" name="category_id" value="<?php echo $product['CategoryID']  ?>"><br>

                            </form>



                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
    </div>
</body>

<?php include 'Footer.php'; ?>
</html>