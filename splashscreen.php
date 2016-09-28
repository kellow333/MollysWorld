<?php 
    $cookie_name = "test";
    $cookie_value = "string";
    setcookie($cookie_name, $cookie_value);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Molly's Studio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css" content="text/css" media="screen" />
</head>
<body>

    <div id="introBackground">
        <img class="mySlides" src="assets/images/splash1.jpg">
        <img class="mySlides" src="assets/images/splash2.jpg">
        <img class="mySlides" src="assets/images/splash3.jpg">
        <img class="mySlides" src="assets/images/splash4.jpg">
        <img class="mySlides" src="assets/images/splash5.jpg">
    </div> 
        
<script type="text/javascript">

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {window.location.assign("index.php")}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>

</body>
</html>
