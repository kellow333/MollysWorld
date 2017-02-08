<?php

function Register() {

	// Parse the login form if fields are filled out and user has clicked login
	if (isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_password'])){
		
		// Filter everything except letters and numbers / md5 encrypt password
		$user_name = preg_replace('#^A-Za-z0-9#i','',$_POST["user_name"]);
		$user_email = preg_replace('#^A-Za-z0-9#i','',$_POST["user_email"]);
		$user_password = preg_replace('#^A-Za-z0-9#i','',$_POST["user_password"]);
		$user_password = md5($user_password);
		

		// Connect to the database
		include"sql_connect.php";

		//Checks if username is same as one already in database
		$sql = $conn->query("SELECT user_id FROM user_login WHERE user_name='$user_name' LIMIT 1");
		$user_match = $sql->rowCount();
		if ($user_match > 0){
			echo "<script>location='http://mollys-world.co.uk/invalidRegistration.php'</script>";
			exit();
		}
		
		//Add user to the database
		$sql = $conn->query("INSERT INTO user_login(user_name,user_email,user_password) VALUES('$user_name','$user_email','$user_password')") or die(mysql_error());
		$user_id = mysql_insert_id();
		
		echo "<script>location='http://mollys-world.co.uk'</script>";
		exit();
	}
}		
?>




