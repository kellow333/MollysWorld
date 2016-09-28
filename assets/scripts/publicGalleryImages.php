<?php

function PublicGallery() {

	include"sql_connect.php";

	if(isset($_SESSION["user"])){
	    $user_id = $_SESSION["user_id"];
	}

	    $latestimage1 = "";
	    $result = $conn->prepare("SELECT image_id,image_title,image_comment FROM user_image ORDER BY image_date_added DESC LIMIT 1");
		$result->execute();	
		
		
		$existCount = $result->rowCount();	
		
		if($existCount > 0){

			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				
				global $image_id1;
				global $image_title1;
				global $image_comment1;
				$image_id1 = $row['image_id'];
				$image_title1 = $row['image_title'];
				$image_comment1 = $row['image_comment'];
			}
			global $latestimage1;
			$latestimage1 .= '<img src="appArtImages/'.$image_id1.'.jpg">';
		}
		

		$latestimage2 = "";
	    $result = $conn->prepare("SELECT image_id,image_title,image_comment FROM user_image ORDER BY image_date_added DESC LIMIT 1,1");
		$result->execute();		

		$existCount = $result->rowCount();	
		
		if($existCount > 0){
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				
				global $image_id2;
				global $image_title2;
				global $image_comment2;
				$image_id2 = $row['image_id'];
				$image_title2 = $row['image_title'];
				$image_comment2 = $row['image_comment'];
			}
			global $latestimage2;
			$latestimage2 .= '<img src="appArtImages/'.$image_id2.'.jpg">';
		}


		$latestimage3 = "";
	    $result = $conn->prepare("SELECT image_id,image_title,image_comment FROM user_image ORDER BY image_date_added DESC LIMIT 2,1");
		$result->execute();		

		$existCount = $result->rowCount();	
		
		if($existCount > 0){
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				
				global $image_id3;
				global $image_title3;
				global $image_comment3;
				$image_id3 = $row['image_id'];
				$image_title3 = $row['image_title'];
				$image_comment3 = $row['image_comment'];
			}
			global $latestimage3;
			$latestimage3 .= '<img src="appArtImages/'.$image_id3.'.jpg">';
		}

		$latestimage4 = "";
	    $result = $conn->prepare("SELECT image_id,image_title,image_comment FROM user_image ORDER BY image_date_added DESC LIMIT 3,1");
		$result->execute();	
		

		$existCount = $result->rowCount();	
		
		if($existCount > 0){
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				
				global $image_id4;
				global $image_title4;
				global $image_comment4;
				$image_id4 = $row['image_id'];
				$image_title4 = $row['image_title'];
				$image_comment4 = $row['image_comment'];
			}
			global $latestimage4;
			$latestimage4 .= '<img src="appArtImages/'.$image_id4.'.jpg">';
		}
}

?>