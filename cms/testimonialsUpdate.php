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
     $serial = mysqli_real_escape_string ($con, $_POST['serial']);
	 $name = mysqli_real_escape_string ($con, $_POST['name']);
	 $city = mysqli_real_escape_string ($con, $_POST['city']);
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 	
	 
	$sql = "update testimonials set serial = '$serial', name = '$name' , city = '$city' , content = '$content' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:testimonials.php?id=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>