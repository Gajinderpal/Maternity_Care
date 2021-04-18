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
     $status = mysqli_real_escape_string ($con, $_POST['status']);
	 $notes = mysqli_real_escape_string ($con, $_POST['notes']);
	
	 	
	 
	$sql = "update apply set status = '$status', notes = '$notes' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header("location:applyEdit.php?id=$id");
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>