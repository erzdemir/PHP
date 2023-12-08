<?php
if(isset($_POST['upload'])) {
	if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['name'] !== "") {
		$dir = "images/";
		$fileName = $_FILES['fileToUpload']['name'];
		$fileSize = $_FILES['fileToUpload']['size'];
		$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = ['png','jpeg','jpg','gif'];

		if(!in_array($fileActualExt, $allowed)) {
			echo "File type not allowed";
		}
		elseif($fileSize > 10000000) {
			echo "File is Large";
		}
		else {
			$fileName = uniqid() . '.' . $fileActualExt;
			$targetFile = $dir . basename($fileName);
			//upload file
			if(move_uploaded_file($fileTmpName, $targetFile)) {
				echo "File Uploaded successfully";
			} else{
				echo "There was an error while uploading your file";
			}
		}
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="fileToUpload">
	<input type="submit" name="upload" value="Upload">
</form>
</body>
</html>