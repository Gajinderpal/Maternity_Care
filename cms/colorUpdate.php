<?php
session_start();

 if(!isset($_SESSION['user']))

 {

   header('location:index.php');
}

  else

  {
include '../error/manage.php';
ob_start();

$id = $_GET['row'];
$table = $_GET['tbl'];
?><noscript>
<div align="center"><a href="index.php">Go Back To Upload Form</a></div><!-- If javascript is disabled -->
</noscript>

<?php
     $target_dir = "../images/subpage/";
	 $target_file = $target_dir . basename($_FILES["file2"]["name"]);
	 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	 
	 // Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			exit();
		 }
		 
		 else
		 {
	 
	 move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file);
	}
       
		$color = $_FILES["file2"]["name"];
       $sql = "update ".$table." set color = '$color'  where id = '$id'";
	   
	   mysqli_query($con, $sql);
					
					 echo "<script>window.close();</script>";
}
?>


