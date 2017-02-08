<?php include 'assets/scripts/sessionStart.php' ?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Molly's World</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">       
</head>
<body>
    
    <div id="homeContainer">

    <?php include_once 'assets/scripts/loginButton.php' ?>    

    <div id="openModalVolcano" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Volcano</h3></div>
            <div class="modal-body">
                <div id="volcanoText">
                    <p>A volcano is a mountain with a hole through which molten</p>
                    <p>rock from inside the earth can erupt to form rocks such</p>
                    <p>as <a href="#openModalBasalt">basalt.</a> The name comes from Vulcan, the Roman god of fire.</p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-Volcano.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>

    <div id="openModalBasalt" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Basalt</h3></div>
            <div class="modal-body">
                <div id="basaltText">
                    <p>This picture shows basalt - one of the most common rocks to</p>
                    <p>come from <a href="#openModalVolcano">volcanoes.</a> A geologist - a scientist who studies</p>
                    <p>rocks - has hammered away to reveal what looks like round</p>
                    <p>pebbles, which are in fact beautiful minerals called <a href="#openModalAgate">agates.</a></p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-Basalt.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>

    <div id="openModalAgate" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Agates</h3></div>
            <div class="modal-body">
                <div id="agateText">
                    <p>Imagine the excitement of cutting open one of these 'pebbles'</p>
                    <p>in the volcanic rock basalt to find a beautiful banded agate</p>
                    <p>such as this! the mineral agate is found in many colours and</p>
                    <p>patterns and can be used to make beautiful <a href="#openModalDesign">designs.</a></p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-agate.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>      

    <div id="openModalDesign" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Designs</h3></div>
            <div class="modal-body">
                <div id="designText">
                    <p>The front of this house</p>
                    <p>in London features an</p>
                    <p>image from the <a href="#openModalAgate">agate</a></p>
                    <p>below. it's a type</p>
                    <p>known as 'sea and sky'</p>
                    <p>- and you can see why!</p>
                    <p>The picture was printed</p>
                    <p>on silk and laminated</p>
                    <p>into <a href="#openModalGlass">glass</a> using special</p>
                    <p>glue to protect it from</p>
                    <p>being faded by the sun</p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-agate house.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>

    <div id="openModalGlass" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Glass</h3></div>
            <div class="modal-body">
                <div id="glassText">
                    <p>Amazingly, clear glass is</p>
                    <p>made from sand! - or</p>
                    <p>rather from the element</p>
                    <p>silica of which many</p>
                    <p>sands are made.</p>
                    <p>heated to enormous</p>
                    <p>temperatures. This can</p>
                    <p>also happen naturally,</p>
                    <p>forming what are known</p>
                    <p>as <a href="cabinet.php#openModal20">fulgurites.</a></p>
                    <p>Sand can have many</p>
                    <p>other ingredients - as</p>
                    <p>seen for example on the</p>
                    <p>volcanic island of <a href="#openModalHawaii">Hawai'i</a></p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-glass.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>
        
    <div id="openModalHawaii" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Hawai'ian Sand</h3></div>
            <div class="modal-body">
                <div id="glassText">
                    <p>This is a picture of</p>
                    <p>sand from Hawai'i seen</p>
                    <p>through a microscope.</p>
                    <p>As well as tiny pebbles</p>
                    <p>see lots of shells and</p>
                    <p>some very beatiful</p>
                    <p>glass-like organisms</p>
                    <p>called <a href="#openModalRadiolaria">radiolaria</a></p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-Hawai'ian sand.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>

    <div id="openModalRadiolaria" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Radiolaria</h3></div>
            <div class="modal-body">
                <div id="glassText">
                    <p>The beautiful structures</p>
                    <p>seen here are the</p>
                    <p>mineral skeletons that</p>
                    <p>form around tiny sea</p>
                    <p>creatures called</p>
                    <p>radiolaria. The skeletons</p>
                    <p>are typically 1mm across.</p>
                    <p>Billions of radiolaria fall</p>
                    <p>to the bottom of the</p>
                    <p>sea where they can</p>
                    <p>form a very hard</p>
                    <p>sedimentary rock used</p>
                    <p>by Sone Age men to</p>
                    <p>make tools. Today the</p>
                    <p>best known form is</p>
                    <p>called <a href="#openModalMookaite">Mookaite</a></p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-radiolaria.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>

    <div id="openModalMookaite" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Mookaite</h3></div>
            <div class="modal-body">
                <div id="mookaiteText">
                    <p>These are examples of Mookaite, an unusual rock found in</p>
                    <p>Australia and made of billions of <a href="#openModalRadiolaria">radiolaria.</a> The shapes and</p>
                    <p>colours often suggest other things -  what do you see here?!</p>
                </div>
                <img id="chainImg" src="assets/images/Chain/Chain-mookaite.jpg">
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>


        <div class="x1"><div class="cloud"></div></div>
        <div class="x2"><div class="cloud"></div></div>
        <div class="x3"><div class="cloud"></div></div>
        <div class="x4"><div class="cloud"></div></div>
        <div class="x5"><div class="cloud"></div></div>

        <div id="grass"></div>



    <div id="homeButton"><a href="index.php"><img src="assets/images/homeButton.png" alt="Home Link"></a></div>
        
    </div>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">



</script>

</body>

</html>
