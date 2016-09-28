<?php

	if(isset($_SESSION["user"])){
	    echo '<b id="welcome"><i>'. $_SESSION["user"] .'</i></b>';
	    echo '<b id="logout"><a href="logout.php">Logout</a></b>';
	} else {
	    echo '<a href="login.php"​​​​​ id="loginButton" class="btn btn-lg">Login</a>';
	}

?> 
