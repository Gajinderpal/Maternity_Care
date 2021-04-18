<?php

     session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
     if( isset ($_GET['id']))
	  {
		$id = $_GET['id'];
	  }
	  else
	  {
		$id = 0;
	  }
     include '../error/manage.php';
	 $name = mysqli_real_escape_string ($con, $_POST['name']);
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
	 	
	 
	$sql = "update hospital set name = '$name' , title = '$title' , keywords = '$keywords' , meta_desc = '$meta_desc', img_alt = '$img_alt', img_title ='$img_title', state = '$state', city = '$city', 	pincode = '$pincode', area = '$area', region = '$region', address = '$address', births_per_year = '$births_per_year', 	cesarean_section_rate = '$cesarean_section_rate' , vaginal_birth_rate = '$vaginal_birth_rate',	induction_rate = '$induction_rate', tear_rate = '$tear_rate', content = '$content' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:hospital.php?id=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>