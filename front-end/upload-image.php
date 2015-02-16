<?php
	$target_dir = "image/";
	$target_file = $target_dir.basename($_FILES['image-upload']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	if(isset($_POST['submit'])){
		$check = getimagesize($_FILES['image-upload']['tmp_name']);
		if($check !== false){
			echo "File is an image - ".$check['mime'].".";
			$uploadOk = 1;
		} 
		else{
			echo "File is not an image";
			$uploadOk = 0;
		}
	}
	if($uploadOk == 0){
		echo "An error occured while uploading image";
	}
	else{
		if(move_uploaded_file($_FILES['image-upload']['tmp_name'], $target_file)){
			echo "File successfully uploaded";
		}
		else{
			echo "An error occured while uploading image";	
		}

	}
?>