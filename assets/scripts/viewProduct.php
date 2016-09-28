<?php

function ViewProduct() {

	//Check URL variable exists in database
	if(isset($_GET['id'])){
		
		// Connect to mySQL
		include"sql_connect.php";

		global $id;
		global $product_name;
		global $product_price;
		global $product_description;		

		$id = $_GET['id'];
		$id = preg_replace('#[^0-9]#i','',$_GET['id']);	
		$result = $conn->prepare("SELECT*FROM workshop_products WHERE product_id='$id' LIMIT 1");
		$result->execute();

		$existCount = $result->rowCount();
		if($existCount > 0){
			
			//Get product details
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				$product_name = $row["product_name"];
				$product_price = $row["product_price"];
				$product_description = $row["product_description"];
			}		
			
		}else{
		echo "That product does not exist.";
		exit();
		}
			
	}else{
		echo "Data to render page is missing.";
		exit();
	}
}

?>