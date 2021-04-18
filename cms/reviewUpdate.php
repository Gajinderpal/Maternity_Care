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
	 $email = mysqli_real_escape_string ($con, $_POST['email']);
	 $hid = mysqli_real_escape_string ($con, $_POST['hid']);
	 $stars = mysqli_real_escape_string ($con, $_POST['stars']);
	 $status = isset($_POST['status']) && $_POST['status']  ? "1" : "0";
	 
	 $comment = mysqli_real_escape_string ($con, $_POST['comment']);
	 $delivery = mysqli_real_escape_string ($con, $_POST['delivery']);
	 $professionalism = mysqli_real_escape_string ($con, $_POST['professionalism']);
	 $cost_friendly = mysqli_real_escape_string ($con, $_POST['cost_friendly']);
	 $comment_review = mysqli_real_escape_string ($con, $_POST['comment_review']);
	 $cleanliness = mysqli_real_escape_string ($con, $_POST['cleanliness']);
	 	
		$stars1 = ($delivery + $professionalism + $cost_friendly + $comment_review + $cleanliness) / 5;
	$stars = number_format($stars1);
	 
	$sql = "update review set name = '$name' , email = '$email', hid = '$hid', stars = '$stars', delivery = '$delivery', professionalism = '$professionalism', cost_friendly = '$cost_friendly', comment_review = '$comment_review', cleanliness = '$cleanliness',  status = '$status', comment = '$comment' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:review.php?id=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>