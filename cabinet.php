<?php include 'assets/scripts/sessionStart.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cabinet of Curiosities</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

<div id="curiosityContainer">

    <?php include_once 'assets/scripts/loginButton.php' ?>   
      
    <div id="cabinet"><img src="assets/images/cabinet.jpg" alt="Cabinet"></div>

    <a href="Project2/_auto/Tourweaver_Project2.html" id="drawer1"></a>

    
    <a href="#" onClick="gabbro()"><div id="#"></div></a>
    <a href="#" onClick="radioactive()"><div id="#"></div></a>
    

    <a href="Project3/_auto/Tourweaver_Project3.html" id="drawer17"></a>
    <a href="#openModal18" id="drawer18"></a>
    <a href="#openModal19" id="drawer19" onClick="snowflakeObs()"></a>
    <a href="#openModal20" id="drawer20"></a>


    <div id="homeButton"><a href="museumSelection.php"><img src="assets/images/homeButton.png" alt="Home Link"></A></div>
    
    <div id="openModal18" class="modalDialog">
        <div class="model-content">
            <div class="modal-header"><h3>Carlo Alcite</h3>
                <a href="#close" title="Close" class="close">X</a>
            </div>

            <div class="modal-body">                    

                    <div id="myCarousel18" class="carousel slide" data-ride="carousel" data-interval="false">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="assets/images/Alcite/Alcite1.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite2.jpg">
                            </div>
                            <div class="item">
                                <img src="assets/images/Alcite/Alcite3.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite4.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite5.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite6.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite7.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite8.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite9.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite10.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite11.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite12.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite13.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite14.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Alcite/Alcite15.jpg">
                            </div>

        
                        </div>
                    </div>

            </div>
            <div class="modal-footer">

                <div class="carousel-controls">
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel18" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel18" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="openModal19" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Snowflake Obsidian</h3></div>
            <div class="modal-body">
                <canvas id='canvasSnowflake' width="600" height="400"></canvas>
            </div>
            <div class="modal-footer"><h3></h3></div>
        </div>
    </div>

    <div id="openModal20" class="modalDialog">
        <div class="model-content">
            <div class="modal-header"><h3>Fulgurites</h3>
                <a href="#close" title="Close" class="close">X</a>
            </div>
            <div class="modal-body">                    

                    <div id="myCarousel20" class="carousel slide" data-ride="carousel" data-interval="false">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="assets/images/Fulgurite/Fulgurite1.jpg">
                            </div>

                            <div class="item">
                                <img src="assets/images/Fulgurite/Fulgurite2.jpg">
                            </div>
                            <div class="item">
                                <img src="assets/images/Fulgurite/Fulgurite3.jpg">
                            </div>
        
                        </div>
                    </div>

            </div>
            <div class="modal-footer">

                <div class="carousel-controls">
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel20" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel20" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div id="openModal9" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Rock from Scotland</h3></div>
            <div class="modal-body">
                <canvas id='canvasGabbro' width="600" height="400"></canvas>
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal10" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Radioactive Pebble</h3></div>
            <div class="modal-body">
                <canvas id='canvasRadioactive' width="600" height="400"></canvas>
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>



</div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.createjs.com/easeljs-0.6.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/snowflake.js"></script>
<script type="text/javascript" src="assets/js/gabbro.js"></script>
<script type="text/javascript" src="assets/js/radioactive.js"></script>
<script type="text/javascript">

</script>

</body>

</html>