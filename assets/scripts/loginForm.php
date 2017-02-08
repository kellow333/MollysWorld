<?php
function Login() {

	// Parse the login form if fields are filled out and user has clicked login
	if(isset($_POST["username"]) && isset($_POST["password"])){

		// Filter everything except letters and numbers / md5 encrypt password
		$user = preg_replace('#^A-Za-z0-9#i','',$_POST["username"]);
		$password = preg_replace('#^A-Za-z0-9#i','',$_POST["password"]);
		$password = md5($password);
		
		// Connect to the database
		include"sql_connect.php";
		// Query the person
		$result = $conn->prepare("SELECT user_id FROM user_login WHERE user_name='$user' AND user_password='$password' LIMIT 1");
		$result->execute();

		// Make sure person exists
		$existCount = $result->rowCount();
		
		// Evaluate the count
		if($existCount == 1){
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				$user_id = $row["user_id"];
			}
			$_SESSION["user_id"] = $user_id;
			$_SESSION["user"] = $user;
			echo "<script>location='http://mollys-world.co.uk'</script>";
			exit();
		}else{
			echo "<script>location='http://www.mollys-world.co.uk/invalidLogin.php'</script>";		
			exit();
		}
	}
}
?>



