<?php
    session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
     
     include '../error/manage.php';
	 
	
	 $serial = mysqli_real_escape_string ($con, $_POST['serial']);
     $name = mysqli_real_escape_string ($con, $_POST['name']);
	 
	 $city = mysqli_real_escape_string ($con, $_POST['city']);
	 
	 
	  $alt = mysqli_real_escape_string ($con, $_POST['alt']);
	 $img_title = mysqli_real_escape_string ($con, $_POST['img_title']);
	 
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	
	 $target_dir = "../images/testimonials/";
	 $target_file = $target_dir . basename($_FILES["file2"]["name"]);
	 
	 move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file);
       
		$img = $_FILES["file2"]["name"];
	
	 
	
	 
	 $sql = "insert into testimonials (serial, name, city, img, alt, img_title, content ) Values ('$serial' ,'$name' , '$city' , '$img' , '$alt' , '$img_title' , '$content')";
	 
	 $result = mysqli_query($con, $sql);
	 
	 if($result)
	 {
	   header('location:testimonials.php?id=1');
	 }
	 else
	 {
	   echo mysqli_error($con);
	 }
	 
	 
	  
  }
  
 
 ?>