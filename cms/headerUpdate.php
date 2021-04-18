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
	 $email = mysqli_real_escape_string ($con, $_POST['email']);
     $phone = mysqli_real_escape_string ($con, $_POST['phone']);
	 $address = mysqli_real_escape_string ($con, $_POST['address']);
	 
	 $facebook = mysqli_real_escape_string ($con, $_POST['facebook']);
	 $twitter = mysqli_real_escape_string ($con, $_POST['twitter']);
	 $linkedin = mysqli_real_escape_string ($con, $_POST['linkedin']);
	 $googleplus = mysqli_real_escape_string ($con, $_POST['googleplus']);
	 $youtube = mysqli_real_escape_string ($con, $_POST['youtube']);
	 $instagram = mysqli_real_escape_string ($con, $_POST['instagram']);
	
	$sql = "update header set email = '$email' , phone = '$phone', address = '$address', facebook = '$facebook', twitter = '$twitter', linkedin = '$linkedin', googleplus = '$googleplus', youtube = '$youtube', instagram = '$instagram'  where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:headerEdit.php?id=1&err=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>