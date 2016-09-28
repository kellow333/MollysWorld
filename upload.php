<?php include_once 'assets/scripts/sessionStart.php' ?> 
<?php include_once 'assets/scripts/uploadImageForm.php'; UploadImage(); ?>

<!DOCTYPE html>

<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">   
</head>

<body>
<div id="homeContainer">

    <div id="openLogin" class="modalDialogLogin">
    	<div class="modelLogin-content">
    		<a href="gallery.php" title="Close" class="close">X</a>
    		<div class="modalLogin-header"><h1>Upload Molly App Art</h1></div>
	        <form id="upload" name="upload" method="post" action="upload.php" enctype="multipart/form-data">            

	            <div class="modalLogin-body">	
                    <div id="mollyLogin"><img src="assets/images/mollyHead.png">
					<img src="assets/images/mollySpeechbubble5.png"></div>    
					<hr/>
		            <br/>
		            <table>
			            <tr>
				            <td>Title: </td>
				            <td><input type="text" name="image_title" placeholder="Enter image title"/></td>
			        	</tr>
		                <tr>
				            <td>Comment: </td>
				            <td><textarea type="text" name="image_comment" placeholder="Enter image comment"/></textarea></td>
		            	</tr>
		            	<tr>
		            		<td colspan="2"><input type="file" name="app_art_image" id="app_art_image" class="btn btn-lg" value="Upload"/></td>
		            	</tr>
		            	<tr>
		            		<td colspan="2"><input type="submit" name="submitImage" id="submitImage" class="btn btn-danger btn-lg" value="Upload"/></td>
		            	</tr>
		            	

					</table>
					         
					
				</div> <!-- close modal-body -->
            	<div class="modalLogin-footer"></div>
            </form>
        </div> <!-- Close modal content -->   
    </div> <!-- Close openLogin -->

	<div class="x1"><div class="cloud"></div></div>
	<div class="x2"><div class="cloud"></div></div>
	<div class="x3"><div class="cloud"></div></div>
	<div class="x4"><div class="cloud"></div></div>
	<div class="x5"><div class="cloud"></div></div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</body>
</html>