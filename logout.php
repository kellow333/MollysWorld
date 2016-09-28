<?php

	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['cart_array']);

	header('Location: index.php');
	exit;
	
?>