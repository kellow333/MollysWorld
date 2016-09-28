<?php include_once 'assets/scripts/sessionStart.php' ?> 
<?php include_once 'assets/scripts/workshopProducts.php'; DisplayProducts(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Workshop</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body> 

    <div id="shopContainer">
        <?php include 'assets/scripts/loginButton.php' ?> 
       

        <div id="logo"><img src="assets/images/mollysWorldLogo.jpg"></div>


        <div id="productContainer">
            <h1>Products</h1>
                <form method="get" name="sort" >
                <select name="sort" id="sort">
                    <option value="Select">--Select--</option>
                    <option value='PriceAsc'>Price: Lowest to Highest</option>
                    <option value='PriceDesc'>Price: Highest to Lowest</option> 
                </select>
                <button id="sortButton" class="btn btn-small" type="submit" value="Sort">Sort</button>
            </form>

            <p><?php echo $workshop_products;?></p>

        </div>

            <div class="x1"><div class="cloud"></div></div>
            <div class="x2"><div class="cloud"></div></div>
            <div class="x3"><div class="cloud"></div></div>
            <div class="x4"><div class="cloud"></div></div>
            <div class="x5"><div class="cloud"></div></div> 

        <div id="homeButton"><a href="index.php"><img src="assets/images/homeButton.png"></a></div>
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="assets/turnjs4/lib/turn.min.js"></script>
<script type="text/javascript">

</script>

</body>

</html>
