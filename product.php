<?php include 'assets/scripts/sessionStart.php' ?>
<?php include_once 'assets/scripts/viewProduct.php'; ViewProduct(); ?>

<!DOCTYPE html>

<head>
<meta charset="utf-8" />
<title><?php echo $product_name; ?></title> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

<div id="shopContainer">
  <?php include 'assets/scripts/loginButton.php' ?> 

	<div id="product_container">
		<table width="999" height="305" border="1" cellpadding="10px">
			<tr>
				<td width="267" height="299" align="center"><img src="assets/store_images/<?php echo $id; ?>.jpg" alt="<?php echo $product_name; ?>" width="265" height="265" border="1"/>
				</td>
			</tr>
			<tr>
				<td><a href="assets/store_images/<?php echo $id; ?>.jpg">CLICK TO VIEW FULLSIZE IMAGE</a></td>
				</td>
			</tr>
			<td width="716" valign="top"><p><h3><?php echo $product_name; ?></h3></p>
				<p><?php echo $product_description; ?></p>
				<p><h4><?php echo "£".$product_price; ?></h4></p>
				<p>
					<form id="cart_form" name="cart_form" method="post" action="cart.php">
						<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
						<a href="workshop.php" class="btn btn-small" id="back_button">< Back</a>
						<button type="submit" class="btn btn-small" name="cart_button" id="cart_button" value="Add To Cart" style="float:right">Add To Cart</button>
					</form>
				</p>
				<p>&nbsp;</p>
			</td>
		</tr>
		</table>
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



