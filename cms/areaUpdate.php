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
     
	 
	 $area = mysqli_real_escape_string ($con, $_POST['area']);
	$sno = mysqli_real_escape_string ($con, $_POST['sno']);
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 
	 
	$sql = "update area set sno = '$sno', area = '$area', content = '$content' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:area.php?id=2');
	} 
	else
	{
	  echo mysqli_error();
	}
}

?>