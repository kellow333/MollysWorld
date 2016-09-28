<?php include_once 'assets/scripts/sessionStart.php' ?> 
<?php include_once 'assets/scripts/registrationForm.php'; Register(); ?>


<!DOCTYPE html>
<head>
<meta charset="utf-8" />
	<title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">    
</head>

<body>

<div id="homeContainer">

	    <div id="openRegistration" class="modalDialogLogin">
    	<div class="modelLogin-content">
    		<a href="index.php" title="Close" class="close">X</a>
    		<div class="modalLogin-header"><h1>Register</h1></div>
	        <form id="registration" name="registration" method="post" action="registration.php">            

	            <div class="modalLogin-body">
					<div id="mollyLogin"><img src="assets/images/mollyHead.png">
					<img src="assets/images/mollySpeechbubble4.png"></div>
					<hr/>
		            
		            <table>
			            <tr>
				            <td>Username: </td>
				            <td><input type="text" name="user_name" id="user_name" placeholder="Enter name"/></td>
			        	</tr>
			        	<tr>
				            <td>Email: </td>
				            <td><input type="text" name="user_email" id="user_email" placeholder="Enter name"/></td>
			        	</tr>
		                <tr>
				            <td>Password: </td>
				            <td><input type="text" name="user_password" id="user_password" placeholder="Enter password"/></td>
		            	</tr>
		            	<tr>
		            		<td colspan="2"><input type="submit" name="submitReg" id="submitReg" class="btn btn-danger bt-lg" value="Register"/></td>
		            	</tr>
		            	<tr>
		            		<td colspan="2"><a href="login.php">For Login Click Here</a></td>
		            	</tr>	
		          
					</table> 
			          
					<div class="modalLogin-footer"><h3></h3></div>
				</div> <!-- close modal-body -->
            	
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

