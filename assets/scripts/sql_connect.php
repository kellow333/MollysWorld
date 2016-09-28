<?php

	global $conn;
	
	//CONNECT TO DATBASE
	$DB_NAME = '#';
	$DB_HOST = '#';
	$DB_USER = '#';
	$DB_PASS = '#';
	

	try {
	$conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", $DB_NAME, $DB_PASS);
	} catch (PDOException $e) {
    echo $e->getMessage();
}

?>




