<?php
include 'dbconnect.php';

session_start();

if (isset($_POST['submit'])) {
	$keyword = $_POST['keyword'];
	$author = $_POST['author'];
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileTrim = substr($fileName, 0, (strlen ($fileName)) - (strlen (strrchr($fileName,'.'))));
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png','pdf','docx','zip','exe','php','html','rar','txt','pptx','ppt','java','py','mp3','mp4','avi','flv');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 5000000) {
				$fileNameNew = abs( crc32(uniqid('', true))).".".$fileTrim.".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$qry = mysqli_query($conn, "INSERT INTO `addfiles`(`keyword`,`author`,`filename`)VALUES('".$keyword."','".$author."','".$fileNameNew."')");
				if($qry){
					 header("Location: ../uploadhtml.php?uploadsuccess");
				}else{
					echo "failed to upload in database";
				}
			}else{
					echo "files to big";
			}
		}else{
			echo "There was an error uploading your files";
		}
	}else{
		echo "You cannot upload files of this type!";
	}
}
//move_uploaded_file ($_FILES['file'] ['tmp_name'], "uploads/{$_FILES['file'] ['name']}");
//header('Location: index.html');
?>

