<?php
if(!isset($_SESSION))
{
    session_start();
}

require_once('database.php');
 $count=0;
 $totalamont = 0;
   foreach ( $_SESSION['cart']as $key =>$value):
       $totalamont +=$value['price'];
   endforeach;
$_SESSION['count'] = 0;
$_SESSION['totalprice'] = $totalamont;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 17px;
            padding: 8px;
            background-image: url('images/bg.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        h2{
            text-align: center;
        }
        *{
            box-sizing: border-box;
        }
        input[type=text]{
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
    <?php include 'Header.php'; ?>
    <title>TSA Checkout Counter</title>
</head>

<body>
<p></p>
<p></p>
    <h2>Checkout Counter</h2>
    <div class="cprow">
        <div class="col-75">
            <div class="cpcontainer">
                <form action="checkpayment.php" method="post">
                
                    <div class="cprow">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" name="fullname" >
                                <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
                                <input type="text"  name="email" >
                                <label for="adr"><i class="fa fa-home"></i> Address</label>
                                <input type="text"  name="address" >
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text"  name="city" >

                                <div class="cprow">
                                    <div class="col-50">
                                        <label for="state"><i class="fa fa-map-marker"> State</i></label>
                                        <input type="text" id="state" name="state" >
                                    </div>
                                    <div class="col-50">
                                        <label for="pcode"><i class="fa fa-code"> Postal Code</i></label>
                                        <input type="text" id="pcode" name="pcode" >
                                    </div>
                                </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                                <label for="fname">Accepted Card Types</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color: navy;"></i>
                                        <i class="fa fa-cc-amex" style="color: blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color: red;"></i>
                                        <i class="fa fa-cc-discover" style="color: orange;"></i>

                                    </div>

                            <label for="cname">Payment Type</label>
                            <input type="radio" name="cardtype" value="Debit Card"/>Debit Card
                            <br>
                            <input type="radio" name="cardtype" value="Credit Card"/>Credit Card
                            <br>
                            <input type="radio" name="cardtype" value="Visa"/> Visa
                                    <label for="cnum">Card Number</label>
                                    <input type="text" id="cnum" name="cardnumber" >
                                    <label for="cexpmonth">Phone Number</label>
                                    <input type="text" id="cexpmonth" name="cardexpiredmonth">

                                    <div class="cprow">
                                        <div class="col-50">
                                            <label for="cexpyear">Expired Date</label>
                                            <input type="text" id="cexpyear" name="cardexpired">
                                        </div>
                                        <div class="col-50">
                                            <label class="label">CVV number</label>
                                            <input type="text" id="cvvn" name="cvvnumber">
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <label>
                    <input type="checkbox" checked="checked" name="sameadr">Shipping address same as billing</label>
                    <a href="#"><input type="submit" value="Continue With Checkbox" class="btn-p"></a>
                    <hr>


                </form>
                <form action="productlist.php" method="post">
                    <input type="submit" value="Go Back to Product Page" class="btn-np">
                </form>
            </div>
        </div>

        <div class="col-25">
            <div class="cpcontainer">
                <h4>Cart<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>

               <tr>
                    <?php foreach ( $_SESSION['cart']as $key =>$value) : ?>
                   <td><?php echo $value['Name']; ?></td>
                   <td>*<?php echo $value['Quantity']; ?></td>
                   <td>$<?php echo $value['price']; ?></td>
                   <td><form action="delete_product.php" method="post" id ="openbuton" onsubmit="return confirm('Do you want delete this');">
                            <span class="price" > <input type="submit" value="Delete" ></span>
                            <input type="hidden" name="quntity" value="<?php echo $value ['Quantity']; ?>">
                            <input type="hidden" name="count" value="<?php echo $count; ?>">
                            <?php $count++ ?>
                        </form></td>
                </p>
                </tr>
                    <?php endforeach; ?>
                </table>
                <hr>
                <p>Total<span class="price" style="color:black"<b>$<?php echo $totalamont?></b></span></p>
                </form>
            </div>
            <form action="cartclear.php" method="post" onsubmit="return confirm('You sure you want delete everythings in the cart ?');"
                  id="edit_product_form">
                <input type="submit" value="clear the cart" class="addcart">

            </form>
        </div>

    </div>  
</body>

<?php include 'Footer.php'; ?>
</html>