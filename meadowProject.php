<?php include 'assets/scripts/sessionStart.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Meadow Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css" content="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/animate.min.css">
</head>

<body>

    <?php include 'assets/scripts/loginButton.php' ?>

    <div id="meadowBackground"><img src="assets/images/meadowProject.png"></div>
       
    <div id="knapweed" class="knapweed" onClick="fadeDiv(knapweed)"><a href="#openModal1"><img src="assets/images/Meadow/Knapweed.png"></a></div>
    <div id="dandelion" class="dandelion" onClick="fadeDiv(dandelion)"><a href="#openModal2"><img src="assets/images/Meadow/Dandelion.png"></a></div>
    <div id="columbine" class="columbine" onClick="fadeDiv(columbine)"><a href="#openModal3"><img src="assets/images/Meadow/Columbine.png"></a></div>
    <div id="daisy" class="daisy" onClick="fadeDiv(daisy)"><a href="#openModal4"><img src="assets/images/Meadow/Daisy.png"></a></div>
    <div id="primula" class="primula" onClick="fadeDiv(primula)"><a href="#openModal5"><img src="assets/images/Meadow/Primula.png"></a></div>
    <div id="pimpernel" class="pimpernel" onClick="fadeDiv(pimpernel)"><a href="#openModal6"><img src="assets/images/Meadow/Pimpernel.png"></a></div>
    <div id="poppy" class="poppy" onClick="fadeDiv(poppy)"><a href="#openModal7"><img src="assets/images/Meadow/Poppy.png"></a></div>
    <div id="silverblue" class="silverblue" onClick="fadeDiv(silverblue)"><a href="#openModal8"><img src="assets/images/Meadow/SilverBlue.png"></a></div>
    <div id="redadmiral" class="redadmiral" onClick="fadeDiv(redadmiral)"><a href="#openModal9"><img src="assets/images/Meadow/RedAdmiral.png"></a></div>
    <div id="dormouse" class="dormouse" onClick="fadeDiv(dormouse)"><a href="#openModal10"><img src="assets/images/Meadow/Dormouse.png"></a></div>
    <div id="honeybee" class="honeybee" onClick="fadeDiv(honeybee)"><a href="#openModal11"><img src="assets/images/Meadow/HoneyBee.png"></a></div>
    <div id="ladybird" class="ladybird" onClick="fadeDiv(ladybird)"><a href="#openModal12"><img src="assets/images/Meadow/Ladybird.png"></a></div>
    <div id="pipit" class="pipit" onClick="fadeDiv(pipit)"><a href="#openModal13"><img src="assets/images/Meadow/Pipit.png"></a></div>
    <div id="wagtail" class="wagtail" onClick="fadeDiv(wagtail)"><a href="#openModal14"><img src="assets/images/Meadow/Wagtail.png"></a></div>

    <a href="#openModal15"><div id="packDownload"></div></a>

    <div id="homeButton"><a href="studio.php"><img src="assets/images/homeButton.png"></div>

    <div id="openModal1" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Knapweed</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/KnapweedModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal2" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Dandelion</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/DandelionModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal3" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Columbine</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/ColumbineModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal4" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Daisy</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/DaisyModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal5" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Primula</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/PrimulaModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal6" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Scarlet Pimpernel</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/PimpernelModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal7" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Poppy</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/PoppyModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal8" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Silver-studded Blue</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/SilverblueModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal9" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Red Admiral Butterfly</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/RedadmiralModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal10" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Dormouse</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/DormouseModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal11" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Honey Bee</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/HoneybeeModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal12" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Ladybird</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/LadybirdModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>

    <div id="openModal13" class="modalDialogMeadow">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Meadow Pipit</h3></div>
            <div class="modal-body">
            <img src="assets/images/Meadow/PipitModal.png">
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>


    <div id="openModal14" class="modalDialogMeadow">
        <div class="model-content">
            <div class="modal-header"><h3>Yellow Wagtail</h3>
                <a href="#close" title="Close" class="close">X</a>
            </div>
            <div class="modal-body">                    

                    <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="assets/images/Meadow/WagtailModal.png">
                            </div>

                            <div class="item">
                                <img src="assets/images/Meadow/MigrateModal.png">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">

                <div class="carousel-controls">
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="openModal15" class="modalDialog">
        <div class="model-content">
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header"><h3>Meadow Pack Download</h3></div>
            <div class="modal-body">
                
            <div id="packOption">
                <img src="assets/images/Meadow/Pipit.png"/>
                <a href="assets/downloads/MeadowPack/Pack1.pdf" download>Pack 1 - Birds, mammals & Insects</a>                
            </div>

            <div id="packOption">
                <img src="assets/images/Meadow/Wagtail.png"/>
                <a href="assets/downloads/MeadowPack/Pack2.pdf" download>Pack 2 - Mushrooms & Grasses</a>
            </div>

            <div id="packOption">
                <img src="assets/images/Meadow/Dandelion.png"/>
                <a href="assets/downloads/MeadowPack/Pack3.pdf" download>Pack 3 - Wildflowers</a>
            </div>     
                
            </div>
            <div class="modal-footer"><h3> </h3></div>
        </div>
    </div>


<a href="assets/downloads/MeadowPack/Wildflower.pdf" download>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">


var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

function fadeDiv(divName) {    
    $(divName).fadeTo(1000, 1);

};


$(function() {
    var animationName = 'animated bounce';    
    $('.knapweed').on('click', function() {

        $('#knapweed').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated hinge';    
    $('.dandelion').on('click', function() {
        $('#dandelion').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated jello';    
    $('.columbine').on('click', function() {
        $('#columbine').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated wobble';    
    $('.daisy').on('click', function() {
        $('#daisy').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated rollIn';    
    $('.primula').on('click', function() {
        $('#primula').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated bounceOut';    
    $('.pimpernel').on('click', function() {
        $('#pimpernel').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated zoomInLeft';    
    $('.poppy').on('click', function() {
        $('#poppy').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated rubberBand';    
    $('.silverblue').on('click', function() {
        $('#silverblue').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated flip';    
    $('.redadmiral').on('click', function() {
        $('#redadmiral').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated swing';    
    $('.dormouse').on('click', function() {
        $('#dormouse').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated rotateIn';    
    $('.honeybee').on('click', function() {
        $('#honeybee').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated zoomIn';    
    $('.ladybird').on('click', function() {
        $('#ladybird').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated tada';    
    $('.pipit').on('click', function() {
        $('#pipit').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});

$(function() {
    var animationName = 'animated zoomInDown';    
    $('.wagtail').on('click', function() {
        $('#wagtail').addClass(animationName).one(animationend,
            function() {
                $(this).removeClass(animationName);
            });
    });
});


</script>

</body>

</html>
