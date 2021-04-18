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
     $sno = mysqli_real_escape_string ($con, $_POST['sno']);
	 $ques = mysqli_real_escape_string ($con, $_POST['ques']);
	 $ans = mysqli_real_escape_string ($con, $_POST['ans']);
	 	
	 
	$sql = "update faq set sno = '$sno', ques = '$ques' , ans = '$ans' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:faq.php?id=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>