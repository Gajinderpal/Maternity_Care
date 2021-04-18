<?php
  session_start();
if(!isset($_SESSION['user']))
{
   header('location:index.php');
}
if(isset($_GET['row2']))
{
 $id2 =$_GET['row2'];
}
else
{
$id2 = 0;
}
$id = $_GET['row'];
$table = $_GET['tbl'];
include ('../error/manage.php');

 
  $sql = "delete from ".$table." where id= '".$id."'";
  
  $result = mysqli_query($con, $sql);
  if($result)
  {
	  header('location:productEdit.php?id='.$id2);
  }
  else
  {
    echo mysqli_error($con);
	
  }	 
?>
