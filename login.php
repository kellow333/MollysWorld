<?php include_once 'assets/scripts/sessionStart.php' ?> 
<?php include_once 'assets/scripts/loginForm.php'; Login(); ?>
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8" />
	<title>Login</title>  
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">    
</head>

<body>
<div id="homeContainer">

    <div id="openLogin" class="modalDialogLogin">
    	<div class="modelLogin-content">
    		<a href="index.php" title="Close" class="close">X</a>
    		<div class="modalLogin-header"><h1>Login</h1></div>
	        <form id="login" name="login" method="post" action="login.php">           

	            <div class="modalLogin-body">					
					<div id="mollyLogin"><img src="assets/images/mollyHead.png" aly="Molly's Head">
					<img src="assets/images/mollySpeechbubble3.png" alt="Molly's Speechbubble"></div>                
					<hr/>
		            <br/>
		            <table id="loginTable">
			            <tr>
				            <td>Username: </td>
				            <td><input type="text" name="username" placeholder="Enter name"/></td>
			        	</tr>
		                <tr>
				            <td>Password: </td>
				            <td><input type="text" name="password" placeholder="Enter password"/></td>
		            	</tr>
		            	<tr>
		            		<td colspan="2"><input type="submit" name="submitLogin" id="submitLogin" class="btn btn-danger bt-lg" value="Login"/></td>
		            	</tr>
		            	
		            	<tr>
		            		<td colspan="2"><a href="registration.php">To SignUp Click Here</a></td>
		            	</tr>
					</table>					         
					
				</div>
            	<div class="modalLogin-footer"></div>
            </form>
        </div>  
    </div> 

	<div class="x1"><div class="cloud"></div></div>
	<div class="x2"><div class="cloud"></div></div>
	<div class="x3"><div class="cloud"></div></div>
	<div class="x4"><div class="cloud"></div></div>
	<div class="x5"><div class="cloud"></div></div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

</body>

</html>


