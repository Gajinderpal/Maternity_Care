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
	 $lname = mysqli_real_escape_string ($con, $_POST['lname']);
	 $email = mysqli_real_escape_string ($con, $_POST['email']);
	 $address = mysqli_real_escape_string ($con, $_POST['address']);
	 $username = mysqli_real_escape_string ($con, $_POST['username']);
	 $password = mysqli_real_escape_string ($con, $_POST['password']);
	
	 
	 	
	 
	$sql = "update user set name = '$name' , lname = '$lname', email = '$email', address = '$address', username = '$username' , password = '$password'  where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:userEdit.php?id=1&err=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>