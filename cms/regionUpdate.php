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
	$sno = mysqli_real_escape_string ($con, $_POST['sno']);
	 
	 
	$sql = "update region set sno = '$sno', name = '$name' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:region.php?id=2');
	} 
	else
	{
	  echo mysqli_error();
	}
}

?>