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
?><noscript>
<div align="center"><a href="index.php">Go Back To Upload Form</a></div><!-- If javascript is disabled -->
</noscript>

<?php
   
    $category = mysqli_real_escape_string ($con, $_POST['category']);
	 $heading = mysqli_real_escape_string ($con, $_POST['heading']);
	 $title = mysqli_real_escape_string ($con, $_POST['title']);
	 $keywords = mysqli_real_escape_string ($con, $_POST['keywords']);
	 $meta_desc = mysqli_real_escape_string ($con, $_POST['meta_desc']);
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 $alt = mysqli_real_escape_string ($con, $_POST['alt']);
	 $img_title = mysqli_real_escape_string ($con, $_POST['img_title']);
	
	if(!empty($_FILES["file2"]["name"]))
	 { 
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
        }
		$color = $_FILES["file2"]["name"];

	   
	 $sql = "insert into specification (category, heading, title, keywords, meta_desc, content, color, alt, img_title) Values ('$category', '$heading', '$title', '$keywords', '$meta_desc', '$content', '$color', '$alt', '$img_title')";
					$result = mysqli_query($con, $sql);
				
				if($result)
				{	
					header('location:specification.php?id=1');
				}
				else
				{
				    echo mysqli_error($con);
				}
	}
   ?>
  
