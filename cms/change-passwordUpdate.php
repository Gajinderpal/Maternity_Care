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
	 $cur_password = mysqli_real_escape_string ($con, $_POST['cur_password']);
	 
     $new_pwd= mysqli_real_escape_string ($con, $_POST['new_password']);
	 $new_password = password_hash($new_pwd, PASSWORD_DEFAULT);
	 
	  $sql1 = "select * from user where id = '$id'";
	  $res1 = mysqli_query($con, $sql1);
	  $row1 = mysqli_fetch_array($res1);
	  $password =  $row1['password'];
	  
	  if (password_verify($cur_password, $password))
	  {
	     
	     $sql = "update user set password = '$new_password'  where id = '$id'";
		 $result = mysqli_query($con, $sql);
		 if($result)
	     { 
	       header('location:userEdit.php?id=1&err=3');
	     } 
		 else
	     { 
		   echo mysqli_error($con);
	      }
	  }
	  else
	  {
	     header('location:change-password.php?id=1&err=4');
	  }
	
	 	
	 
	/*$sql = "update user set name = '$name' , lname = '$lname', email = '$email', address = '$address', username = '$username' , password = '$password'  where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:userEdit.php?id=1&err=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}*/
}

?>