<?php include 'assets/scripts/sessionStart.php' ?> 
<?php include 'assets/scripts/personalGalleryImages.php'; PersonalGalleryImages(); ?>
<?php error_reporting(0) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>App Art Galley</title>    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/galleryStyles.css" content="text/css" media="screen"/>
</head>

<body>

	<div id="galleryContainer">

		<?php include_once 'assets/scripts/galleryLogin.php'; GalleryLogin() ?>

		<div id="galleryWall1"><img src="assets/images/galleryWall.jpg" alt="Gallery Wall"></div>
		<div id="galleryFrame1"><img src="assets/images/galleryFrame.png" alt="Gallery Frame"></div>
		<div id="galleryFrame2"><img src="assets/images/galleryFrame.png" alt="Gallery Frame"></div>
		<div id="galleryFrame3"><img src="assets/images/galleryFrame.png" alt="Gallery Frame"></div>
		<div id="galleryFrame4"><img src="assets/images/galleryFrame.png" alt="Gallery Frame"></div>
		<div id="galleryTV"><a href="publicGallery.php"><img src="assets/images/GalleryTV.png" alt="Gallery TV"></a></div>
		<div id="homeButton"><a href="museumSelection.php"><img src="assets/images/homeButton.png" alt="Home Link"></a></div>

		<div id="mollyBack"><img src="assets/images/MollyBack.png" alt="Molly"></div>
		
		<div id="picture1">
			<?php 
			if(isset($_SESSION["user"])){
				echo '<a href="#openModal1">'.$latestimage1.'</a>';
			}?>
		</div>	
	
		<div id="picture2">
			<?php 
			if(isset($_SESSION["user"])){
				echo '<a href="#openModal2">'.$latestimage2.'</a>';
			}?>
		</div>	
	
		<div id="picture3">
			<?php 
			if(isset($_SESSION["user"])){
				echo '<a href="#openModal3">'.$latestimage3.'</a>'; 
			}?>
		</div>
	
		<div id="picture4">
			<?php 
			if(isset($_SESSION["user"])){
				echo '<a href="#openModal4">'.$latestimage4.'</a>';
			}?>
		</div>		

		<div id="openModal1" class="modalDialog">
			<div class="model-content">
				<a href="#close" title="Close" class="close">X</a>
				<div class="modal-header"><h3><?php echo $image_title1 ?></h3></div>
				<?php echo '<div id="modalImage">'.$latestimage1.'</div>'; ?>
					<div class="modal-body">					
						<p><?php echo $image_comment1 ?></p>
					</div>
				<div class="modal-footer"><h3></h3></div>
			</div>
		</div>

		<div id="openModal2" class="modalDialog">
			<div class="model-content">
				<a href="#close" title="Close" class="close">X</a>
				<div class="modal-header"><h3><?php echo $image_title2 ?></h3></div>
				<?php echo '<div id="modalImage">'.$latestimage2.'</div>'; ?>
					<div class="modal-body">
						<p><?php echo $image_comment2 ?></p>			
					</div>
				<div class="modal-footer"><h3></h3></div>
			</div>
		</div>

		<div id="openModal3" class="modalDialog">
			<div class="model-content">
				<a href="#close" title="Close" class="close">X</a>
				<div class="modal-header"><h3><?php echo $image_title3 ?></h3></div>
				<?php echo '<div id="modalImage">'.$latestimage3.'</div>'; ?>
					<div class="modal-body">
						<p><?php echo $image_comment3 ?></p>			
					</div>
				<div class="modal-footer"><h3></h3></div>
			</div>
		</div>

		<div id="openModal4" class="modalDialog">
			<div class="model-content">
				<a href="#close" title="Close" class="close">X</a>
				<div class="modal-header"><h3><?php echo $image_title4 ?></h3></div>
				<?php echo '<div id="modalImage">'.$latestimage4.'</div>'; ?>
					<div class="modal-body">
						<p><?php echo $image_comment4 ?></p>			
					</div>
				<div class="modal-footer"><h3></h3></div>
			</div>
		</div>  

	</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">

</script>

</body>

</html>