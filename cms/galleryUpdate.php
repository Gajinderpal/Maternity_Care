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
     
	 $title = mysqli_real_escape_string ($con, $_POST['title']);
	$img_title = mysqli_real_escape_string ($con, $_POST['img_title']);
	$alt = mysqli_real_escape_string ($con, $_POST['alt']);
	$s_no = mysqli_real_escape_string ($con, $_POST['s_no']);
	 
	$sql = "update gallery set title = '$title', img_title = '$img_title', alt = '$alt', s_no = '$s_no' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header("location:gallery.php?id=$title");
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>