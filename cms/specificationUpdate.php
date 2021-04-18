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
     
	 $category = mysqli_real_escape_string ($con, $_POST['category']);
	 $heading = mysqli_real_escape_string ($con, $_POST['heading']);
	 $title = mysqli_real_escape_string ($con, $_POST['title']);
	 $keywords = mysqli_real_escape_string ($con, $_POST['keywords']);
	 $meta_desc = mysqli_real_escape_string ($con, $_POST['meta_desc']);
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 $alt = mysqli_real_escape_string ($con, $_POST['alt']);
	 $img_title = mysqli_real_escape_string ($con, $_POST['img_title']);
	 
	$sql = "update specification set category = '$category' , heading = '$heading', title = '$title', keywords = '$keywords', meta_desc = '$meta_desc' , content = '$content', alt = '$alt', img_title = '$img_title' where id = '$id' "; 
  	 
	$result = mysqli_query($con, $sql);
	if($result)
	{ 
	   header('location:specification.php?id=2');
	} 
	else
	{
	  echo mysqli_error($con);
	}
}

?>