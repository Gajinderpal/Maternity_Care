<?php
 
     include 'error/manage.php';
	 if(isset($_GET['id']))
{
$id = $_GET['id'];
}
else
{
 $id = 0;
}
	$email = mysqli_real_escape_string ($con, $_POST['email']);
	if(empty($email))
	{
	  header("location:hospital.php?id=$id");
	}
	else
	{
	 
     $name = mysqli_real_escape_string ($con, $_POST['name']);
	 
	 $hid = mysqli_real_escape_string ($con, $_POST['hid']);
	 $stars = mysqli_real_escape_string ($con, $_POST['stars']);
	 $status = isset($_POST['status']) && $_POST['status']  ? "1" : "0";
	 
	 $comment = mysqli_real_escape_string ($con, $_POST['comment']);
	 
	 $delivery = mysqli_real_escape_string ($con, $_POST['delivery']);
	 $professionalism = mysqli_real_escape_string ($con, $_POST['professionalism']);
	 $cost_friendly = mysqli_real_escape_string ($con, $_POST['cost_friendly']);
	
	 $cleanliness = mysqli_real_escape_string ($con, $_POST['cleanliness']);
	
	 
	 $stars1 = ($delivery + $professionalism + $cost_friendly + $comment_review + $cleanliness) / 5;
	$stars = number_format($stars1);
	 
	 $sql = "insert into review (name, email, hid, stars, delivery, cost_friendly, professionalism, cleanliness, comment) Values ('$name' ,'$email' , '$hid', '$stars', '$delivery', '$cost_friendly', '$professionalism', '$cleanliness', '$comment')";
	 
	 $result = mysqli_query($con, $sql);
	 
	 if($result)
	 {
	   header("location:hospital.php?id=$id");
	 }
	 else
	 {
	   echo mysqli_error($con);
	 }
	 
	} 
	  

  
 
 ?>