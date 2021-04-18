<?php
    session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
     
     include '../error/manage.php';
	 
	
	 
     $page = mysqli_real_escape_string ($con, $_POST['page']);
	 
	  $sql2 = "select * from page where page = '$page'";
	  $result = mysqli_query($con, $sql2);
	  $row2 = mysqli_num_rows($result);
	  if($row2 != 0)
	  {
	    header('location:page.php?id=3');
	  }
	  else
	  {
	    
	  
	 
	 $title = mysqli_real_escape_string ($con, $_POST['title']);
	 $keywords = mysqli_real_escape_string ($con, $_POST['keywords']);
	 $meta_desc = mysqli_real_escape_string ($con, $_POST['meta_desc']);
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 $alt = mysqli_real_escape_string ($con, $_POST['alt']);
	 $img_title = mysqli_real_escape_string ($con, $_POST['img_title']);
	
	 $target_dir = "../images/page/";
	 $target_file = $target_dir . basename($_FILES["file2"]["name"]);
	 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if(!empty($_FILES["file2"]["name"]))
	 { 
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
	}	
	
	 
	 $sql = "insert into page (title, keywords, meta_desc,  page, content, color, alt, img_title ) Values ('$title' , '$keywords' , '$meta_desc', '$page', '$content', '$color', '$alt', '$img_title')";
	 
	 $result = mysqli_query($con, $sql);
	 
	 if($result)
	 {
	   header('location:page.php?id=1');
	 }
	 else
	 {
	   echo mysqli_error($con);
	 }
	 
	 
	  
  }
  
  }
 ?>