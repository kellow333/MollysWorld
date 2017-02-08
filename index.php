<?php include 'assets/scripts/sessionStart.php' ?> 
<?php include_once 'assets/scripts/shoppingCartQuantity.php'; CartQuantity(); ?>
<?php
if(!$_COOKIE['test'] == 'string'){
    header('Location: splashscreen.php', true, 301);
    }   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Molly's World</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">       
</head>
<body onload="loadSound();">
    
    <div id="homeContainer">

    <?php include_once 'assets/scripts/loginButton.php' ?>    

        <div id="jetFly" onClick="playSound();"><img src="assets/images/MollyJet.png" alt="Molly jet"/></div>

        <div id="circle1"></div>
        <div id="circle2"></div>

        <div id="thoughtBubble">
            <div><img src="assets/images/slideshow1.png" alt="Slideshow Image 1"/></div>
            <div><img src="assets/images/slideshow2.png" alt="Slideshow Image 2"/></div>
            <div><img src="assets/images/slideshow3.png" alt="Slideshow Image 3"/></div>
        </div>

        <div class="sunflowerContainer">
            <div id="sunflower1" class="growSunflowerOne"><img src="assets/images/sunflower.png" alt="Sunflower"/></div>
            <div id="sunflower2" class="growSunflowerTwo"><img src="assets/images/sunflower.png" alt="Sunflower"/></div>
        </div>

        <div id="mollyContainer"><img src="assets/images/molly.png" alt="Molly"/></div>

        <div class="inflatableFlowerContainer">
            <div id="inflatable1" class="growInflatableOne"><img src="assets/images/InflatableFlower1.png" alt="Inflatable Flower 1"/></div>
            <div id="inflatable2" class="growInflatableTwo"><img src="assets/images/InflatableFlower2.png" alt="Inflatable Flower 2"/></div>
            <div id="inflatable3" class="growInflatableThree"><img src="assets/images/InflatableFlower3.png" alt="Inflatable Flower 3"/></div>
        </div>

        <div class="x1"><div class="cloud"></div></div>
        <div class="x2"><div class="cloud"></div></div>
        <div class="x3"><div class="cloud"></div></div>
        <div class="x4"><div class="cloud"></div></div>
        <div class="x5"><div class="cloud"></div></div>

        <div id="grass"></div>

        <div class="patchContainer">
            <div id="patch" class="growPatch"><img src="assets/images/patch.png" alt="Patch"/></div>
            <div id="parachute" class="growParachute"><img src="assets/images/parachute.png" alt="Patch's Parachute"/></div>
        </div> 

        <a id="bigProjectLink" href="bigProject.php"></a>

        <nav id="navigation">    
            <div id="HomeGardenIcon"><a href ="homeGarden.php"><img src="assets/images/HomeGardenIcon.png" alt="Home & Garden Link"></a></div>
            <div id="MuseumIcon"><a href="museumSelection.php"><img src="assets/images/MuseumIcon.png" alt="Museum Link"></a></div>
            <div id="StudioIcon"><a href="studio.php"><img src="assets/images/StudioIcon.png" alt="Studio Link"></a></div>
            <div id="WorkshopIcon"><a href="workshop.php"><img src="assets/images/WorkshopIcon.png" alt="Workshop Link"></a></div>          
            <div id="BankIcon"><a href="#"><img src="assets/images/BankIcon.png" alt="Bank Link"></a></div>
            <div id="ShopIcon"><a href="cart.php"><img src="assets/images/ShopIcon.png" alt="Shop Link"><div id="cartCount"><?php echo $cartCount ?></div></a></div>
        </nav>
        
    </div>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">



// THOUGHT BUBBLE
$("#thoughtBubble > div:gt(0)").hide();

setInterval(function() { 
  $('#thoughtBubble > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#thoughtBubble');
},  6000);

// JET NOISE
var soundID = "jetSound";

function loadSound () {
createjs.Sound.registerSound("assets/sounds/jetSound.wav", soundID);
}

function playSound () {
createjs.Sound.play(soundID);
}


</script>

</body>

</html>


