<?php
function UploadImage() {

	if (isset($_POST['image_title'])){
		
		$image_title = $_POST['image_title'];
		$image_comment = $_POST['image_comment'];
		$user_id = $_SESSION["user_id"];
		
		include"sql_connect.php";
		
		//Add image text to the database
		$sql = $conn->query("INSERT INTO user_image(user_id,image_title,image_comment, image_date_added) VALUES('$user_id','$image_title','$image_comment', now())") or die(mysql_error());

		$id = $conn->lastInsertId();

		$image_id = $conn->lastInsertID();	
		// Places image in the images folder
		$new_name = "$image_id.jpg";
	    move_uploaded_file($_FILES['app_art_image']['tmp_name'],"appArtImages/$new_name");
	    echo "<script>location='http://mollys-world.co.uk/gallery.php'</script>";
	    exit();
	}
}
?>