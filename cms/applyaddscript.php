<?php
    session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
     
     include '../error/manage.php';
	 
	
	 $sno = mysqli_real_escape_string ($con, $_POST['sno']);
     $ques = mysqli_real_escape_string ($con, $_POST['ques']);
	 $ans = mysqli_real_escape_string ($con, $_POST['ans']);
	
	
	
	 
	
	 
	 $sql = "insert into faq (sno, ques, ans) Values ('$sno' ,'$ques' , '$ans')";
	 
	 $result = mysqli_query($con, $sql);
	 
	 if($result)
	 {
	   header('location:faq.php?id=1');
	 }
	 else
	 {
	   echo mysqli_error($con);
	 }
	 
	 
	  
  }
  
 
 ?>