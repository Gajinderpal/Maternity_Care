<?php
    session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
     
     include '../error/manage.php';
	 
	
	 
      $name = mysqli_real_escape_string ($con, $_POST['name']);
	 
	  $sql2 = "select * from hospital where name = '$name'";
	  $result = mysqli_query($con, $sql2);
	  $row2 = mysqli_num_rows($result);
	  if($row2 != 0)
	  {
	    header('location:hospital.php?id=3');
	  }
	  else
	  {
	    
	  
	 
	 $title = mysqli_real_escape_string ($con, $_POST['title']);
	 $keywords = mysqli_real_escape_string ($con, $_POST['keywords']);
	 $meta_desc = mysqli_real_escape_string ($con, $_POST['meta_desc']);
	 
	 $state = mysqli_real_escape_string ($con, $_POST['state']);
	 $city = mysqli_real_escape_string ($con, $_POST['city']);
	 $pincode = mysqli_real_escape_string ($con, $_POST['pincode']);
	 $area = mysqli_real_escape_string ($con, $_POST['area']);
	 $region = mysqli_real_escape_string ($con, $_POST['region']);
	 $address = mysqli_real_escape_string ($con, $_POST['address']);
	 
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 $img_alt = mysqli_real_escape_string ($con, $_POST['img_alt']);
	 $img_title = mysqli_real_escape_string ($con, $_POST['img_title']);
	 
	 $births_per_year = mysqli_real_escape_string ($con, $_POST['births_per_year']);
	 $cesarean_section_rate = mysqli_real_escape_string ($con, $_POST['cesarean_section_rate']);
	 $vaginal_birth_rate = mysqli_real_escape_string ($con, $_POST['vaginal_birth_rate']);
	 $induction_rate = mysqli_real_escape_string ($con, $_POST['induction_rate']);
	 $tear_rate = mysqli_real_escape_string ($con, $_POST['tear_rate']);
	 
	 
	 
	 $target_dir = "../images/hospital/";
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
       
		$img = $_FILES["file2"]["name"];
	}	
	
	 
	 $sql = "insert into hospital (title, keywords, meta_desc,  name, state, city, pincode, area, region, address, img, img_alt, img_title, births_per_year, cesarean_section_rate, vaginal_birth_rate,	induction_rate, tear_rate, content ) Values ('$title' , '$keywords' , '$meta_desc', '$name', '$state', '$city', '$pincode', '$area', '$region', '$address', '$img', '$img_alt', '$img_title', '$births_per_year', '$cesarean_section_rate', '$vaginal_birth_rate', '$induction_rate', '$tear_rate','$content')";
	 
	 $result = mysqli_query($con, $sql);
	 
	 if($result)
	 {
	   header('location:hospital.php?id=1');
	 }
	 else
	 {
	   echo mysqli_error($con);
	 }
	  
  }
  
  }
 ?>