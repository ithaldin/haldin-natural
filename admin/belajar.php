<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php"; 

    $statusMsg = '';

	// File upload path
	$targetDir = "images/";
	$fileName = basename($_FILES["file"]["name"]);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	    // Allow certain file formats
	    $allowTypes = array('jpg','png','jpeg','gif','pdf');
	    if(in_array($fileType, $allowTypes)){
	        // Upload file to server
	        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
	            // Insert image file name into database
	            $insert = $konek->query("UPDATE t_our_product SET file_name = ('$fileName'), uploaded_on = NOW() WHERE `t_our_product`.`id` = 1");
	            if($insert){
	                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
	            }else{
	                $statusMsg = "File upload failed, please try again.";
	            } 
	        }else{
	            $statusMsg = "Sorry, there was an error uploading your file.";
	        }
	    }else{
	        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
	    }
	}else{
	    $statusMsg = 'Please select a file to upload.';
	}

	// Display status message
	echo $statusMsg;  
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>