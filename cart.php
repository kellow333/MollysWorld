<?php include 'assets/scripts/sessionStart.php' ?> 
<?php include_once 'assets/scripts/shoppingCart.php'; ShoppingCart(); ?> 
<!DOCTYPE html>

<head>
<meta charset="utf-8" />
<title>Cart</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

<div id="shopContainer">
<?php include_once 'assets/scripts/loginButton.php' ?> 

    <div id="cart_container">
    
    <div id="cart">
    <ul>
        <li class="no_border_left left_round"></a></li>
        <li>Product Name</li>
        <li>Price</li>
        <li>Quantity</li>          
        <li>Total Price</li>
        <li class = "right_round"></li>
        </ul>           
    
    <table width="900" align="center" float="left">
        <tr>
        <th width="150" align="left"></th>
        <th width="150" align="left"></th>
        <th width="150" align="left"></th>
        <th width="150" align="left"></th>
        <th width="150" align="left"></th>
        <th width="150" align="left"></th>
        </tr>
        <tr>
        <?php echo $cart_items ?>
        </tr>
    </table>
    </div>

    <p style="float:right"><?php echo 'Cart Total £ '.$cart_total; ?><br/><br/><p><br/></p><br/>
    <p><a href="checkout.php" style="float:right">Proceed To Checkout</a></p>  
    <p><a href="cart.php?cmd=empty_cart" style="float:left">Click To Empty Shopping Cart</a></p>
    </br></br><p><a href="workshop.php" style="float:left">Continue Shopping</a></p>
    </div>

    <div class="x1"><div class="cloud"></div></div>
    <div class="x2"><div class="cloud"></div></div>
    <div class="x3"><div class="cloud"></div></div>
    <div class="x4"><div class="cloud"></div></div>
    <div class="x5"><div class="cloud"></div></div>

    <div id="homeButton"><a href="index.php"><img src="assets/images/homeButton.png"></a></div> 
</div>


</body>
</html>