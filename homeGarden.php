<?php include 'assets/scripts/sessionStart.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home & Garden</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body> 

    <?php include_once 'assets/scripts/loginButton.php' ?>

    <div id="homeGardenBackground"><img src="assets/images/HomeGardenBackground.png" alt="Home & Garden background"></div>
    <div id="mollyHomeGarden"><img src="assets/images/mollyHomeGarden.png" alt="Molly"></div>
    <div id="mollySpeechbubbleHome" class="growMollySpeechbubble"><img src="assets/images/mollySpeechbubble2.png" alt="Molly's Speechbubble"></div>  

    <a href="Project4/_auto/Tourweaver_Project4.html"><div id="Garden"></div></a>
    <a href="Project5/_auto/Tourweaver_Project5.html"><div id="livingRoom"></div></a>    
    <a href="Project6/_auto/Tourweaver_Project6.html"><div id="bedroom"></div></a>
    <a href="library.php"><div id="library"></div></a>
    <a href="#openModal2"><div id="readingRoom"></div></a>
    <a href="#"><div id="secretGarden"></div></a>
    <a href="#openModal1" onClick="typewritter()"><div id="attic"></div></a>
    
    <div id="homeButton"><a href="index.php"><img src="assets/images/homeButton.png" alt="Home Link"></a></div>
    
    <div id="openModal1" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Typewritter</h3></div>
            <div class="modal-body">
            <canvas id='canvasGabbro' width="600" height="400"></canvas>
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal2" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close" onclick="pause()">X</a>
            <div class="modal-header"><h3>Dragon Story</h3></div>
            <div class="modal-body">
             <audio id="audio1" controls>
                <source src="assets/sounds/dragonStory.mp3" type="audio/mpeg">
                
                Your browser does not support the audio element.
                </audio> 
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>       

<script type="text/javascript" src="https://code.createjs.com/easeljs-0.6.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/typewritter.js"></script>

<script type="text/javascript">

var myAudio = document.getElementById("audio1"); 

function pause() { 
    if (myAudio.paused) 
        myAudio.play(); 
    else 
        myAudio.pause(); 
}

</script>

</body>

</html>
