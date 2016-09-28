<?php include 'assets/scripts/sessionStart.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Museum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css" content="text/css" media="screen"/>
</head>

<body>    

	<div id="museumSelectionContainer">	

		<?php include 'assets/scripts/loginButton.php' ?> 

		<div id="museumBackground"><img src="assets/images/MuseumBackground.png"></div>

		<div id="mollySelection"><img src="assets/images/molly.png"></div>

		<div id="patchSelection"><img src="assets/images/patch.png"></div>

		<div id="gallerySelection"><img src="assets/images/galleryLink.png"></div>
		
		<div id="mollySpeechbubble" class="growMollySpeechbubble"><img src="assets/images/mollySpeechbubble.png"></div>
		<div id="patchSpeechbubble" class="growPatchSpeechbubble"><img src="assets/images/patchSpeechbubble.png"></div>

		<a href="MatisseWelcome.php"><div id="themedGallery"></div></a>
		<a href="cabinet.php"><div id="cabinetOfCuriosities"></div></a>
		<a href="gallery.php"><div id="galleryLink"></div></a>
		<a href="#openModal1"><div id="beetle"></div></a>
		<a href="#openModal2"><div id="mineral"></div></a>
		<a href="#openModal3"><div id="etching"></div></a>

		<div id="openModal1" class="modalDialog">
	        <div class="model-content">
	            <a href="#close" title="Close" class="close" onclick="pause1()">X</a>
	            <div class="modal-header"><h3>Beetles</h3></div>
	            <div class="modal-body">
	                <video id="video1" class="video1" controls src="assets/video/beetle.mp4" type="video/mp4">					  
					  Your browser does not support HTML5 video.
					</video>
	            </div>
	            <div class="modal-footer"><h3></h3></div>
	        </div>
	    </div>

	    <div id="openModal2" class="modalDialog">
	        <div class="model-content">
	            <a href="#close" title="Close" class="close" onclick="pause2()">X</a>
	            <div class="modal-header"><h3>Minerals</h3></div>
	            <div class="modal-body">
	                <video id="video2" class="video2" controls>
					  <source src="assets/video/minerals.mp4" type="video/mp4"/>					  
					  Your browser does not support HTML5 video.
					</video>
	            </div>
	            <div class="modal-footer"><h3></h3></div>
	        </div>
	    </div>
	    
		<div id="openModal3" class="modalDialog">
			<div class="model-content">
				<div class="modal-header"><h3>Etchings</h3>
					<a href="#close" title="Close" class="close">X</a>
				</div>

				<div class="modal-body">					

					<div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="false">

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="assets/images/Etching/Etching1.jpg">
							</div>

							<div class="item">
								<img src="assets/images/Etching/Etching2.jpg">
							</div>

							<div class="item">
								<img src="assets/images/Etching/Etching3.jpg">
							</div>

							<div class="item">
								<img src="assets/images/Etching/Etching4.jpg">
							</div>
							
							<div class="item">
								<img src="assets/images/Etching/Etching5.jpg">
							</div>

							<div class="item">
								<img src="assets/images/Etching/Etching6.jpg">
							</div>
							
							<div class="item">
								<img src="assets/images/Etching/Etching7.jpg">
							</div>

							<div class="item">
								<img src="assets/images/Etching/Etching8.jpg">
							</div>

					  	</div>
					</div>

				</div>
				<div class="modal-footer">

					<div class="carousel-controls">
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="homeButton"><a href="index.php"><img src="assets/images/homeButton.png"></div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

function pause1() { 
	var myVideo1 = document.getElementById("video1");
        myVideo1.pause();
}

function pause2() {
	var myVideo2 = document.getElementById("video2");
        myVideo2.pause();
}

$('audio,video').bind('play', function() {
	activated = this;
	$('audio,video').each(function() {
		if(this != activated) this.pause();
	});
});

</script>

</body>

</html>

