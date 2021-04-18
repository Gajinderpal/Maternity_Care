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
     
	 $product = mysqli_real_escape_string ($con, $_POST['product']);
	 $name = mysqli_real_escape_string ($con, $_POST['name']);
	
	 	
	 
	$sql = "update media set product = '$product', name = '$name' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:media.php?id=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>