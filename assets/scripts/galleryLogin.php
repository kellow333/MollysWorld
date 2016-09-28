<?php

function GalleryLogin() {
	if(isset($_SESSION["user"])){
	    echo "<b id='welcome'><i>" . $_SESSION["user"] . "</i></b>";		    
	    echo '<b id="upload"><a href="upload.php">Upload</a></b>';
	} else {
		echo '<a href="login.php"​​​​​ <button id="loginButton" class="btn btn-danger btn-lg">Login</button></a>';
	}
}
	
?>