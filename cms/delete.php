<?php
  session_start();
if(!isset($_SESSION['user']))
{
   header('location:index.php');
}
$id = $_GET['row'];
$table = $_GET['tbl'];
include ('../error/manage.php');

 
  $sql = "delete from ".$table." where id= '".$id."'";
  
  $result = mysqli_query($con, $sql);
  if($result)
  {
	  header('location:'.$table.'.php');
  }
  else
  {
    echo mysqli_error($con);
	
  }	 
?>
