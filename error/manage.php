<?php 
   if(file_exists('app/app.php'))
   {
    require_once('app/app.php');
  
	}
	else
	{
	  require_once('../app/app.php');
	  
	}
   
   $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
   if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
   }
   
 
?>