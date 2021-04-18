<?php
  session_start();
if(!isset($_SESSION['user']))
{
   header('location:index.php');
}
$id = $_GET['row'];
$table = $_GET['tbl'];
$title = $_GET['title'];
include ('../error/manage.php');

 
  $sql = "delete from ".$table." where id= '".$id."'";
  
  $result = mysqli_query($con, $sql);
  if($result)
  {
	  header("location:gallery.php?id=$title");
  }
  else
  {
    echo mysqli_error($con);
	
  }	 
?>
