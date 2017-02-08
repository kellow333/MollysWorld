<?php include 'assets/scripts/sessionStart.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cherwell Wallpaper</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css" content="text/css" media="screen" />
</head>

<body> 

    
<div id="studioBackground"><img src="assets/images/WallpaperBackground.png"></div>
    
    <?php include 'assets/scripts/loginButton.php' ?> 
    
    <div id="wallpaperContainer">
        <div id="Cherwell">
            <img class="A1" src="assets/images/Cherwell2.jpg"><img class="A1" src="assets/images/Cherwell2.jpg"><img class="A1" src="assets/images/Cherwell2.jpg">        
        </div>
        
        <div id="Cherwell">
            <img class="A1" src="assets/images/Cherwell2.jpg"><img class="A1" src="assets/images/Cherwell2.jpg"><img class="A1" src="assets/images/Cherwell2.jpg">
        </div> 

        <div id="Cherwell">
            <img class="A1" src="assets/images/Cherwell2.jpg"><img class="A1" src="assets/images/Cherwell2.jpg"><img class="A1" src="assets/images/Cherwell2.jpg">
        </div>
    </div>


    <div id="wallpaperContainer">
        <div id="space">
            <img class="B1" src="assets/images/space.png"><img class="B1" src="assets/images/space.png">        
        </div>
        
        <div id="space">
            <img class="B1" src="assets/images/space.png"><img class="B1" src="assets/images/space.png">
        </div> 

        <div id="space">
            <img class="B1" src="assets/images/space.png"><img class="B1" src="assets/images/space.png">
        </div>

        <div id="space">
            <img class="B1" src="assets/images/space.png"><img class="B1" src="assets/images/space.png">
        </div>

        <div id="space">
            <img class="B1" src="assets/images/space.png"><img class="B1" src="assets/images/space.png">
        </div>

        <div id="space">
            <img class="B1" src="assets/images/space.png"><img class="B1" src="assets/images/space.png">
        </div>


    </div>

    <a href="#"><div id="wallpaperButton1" onclick="wallpaperClick1()"></div></a>
    <a href="#"><div id="wallpaperButton2" onclick="wallpaperClick2()"></div></a>
    
    
    <div id="homeButton"><a href="studio.php"><img src="assets/images/homeButton.png"></a></div>

    <div id="slideshow1">
        <div><img src="assets/images/wallpaper1.png"/></div>
        <div><img src="assets/images/wallpaper2.png"/></div>
        <div><img src="assets/images/wallpaper3.png"/></div>
        <div><img src="assets/images/wallpaper4.png"/></div>
        <div><img src="assets/images/wallpaper5.png"/></div>
    </div>

    <div id="slideshow2">
        <div><img src="assets/images/clothes1.png"/></div>
        <div><img src="assets/images/clothes2.png"/></div>
        <div><img src="assets/images/clothes3.png"/></div>
        <div><img src="assets/images/clothes4.png"/></div>
        <div><img src="assets/images/clothes5.png"/></div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

 
function wallpaperClick1(){
    $(".B1").css("opacity", 0);
    $(".A1").css("opacity", 1);
    $('.A1').each(function(i) {
      $(this).fadeOut(0).delay(1000*i).fadeIn(1850);
    });
}

function wallpaperClick2(){
    $(".A1").css("opacity", 0);
    $(".B1").css("opacity", 1);
    $('.B1').each(function(i) {
      $(this).fadeOut(0).delay(1000*i).fadeIn(1850);
    });
}
  
// SLIDESHOW
$("#slideshow1 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow1 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow1');
},  5000);

$("#slideshow2 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow2 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow2');
},  5000);

</script>

</body>

</html>
