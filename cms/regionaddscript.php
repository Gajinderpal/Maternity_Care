<?php
include '../error/manage.php';
ob_start();
?><noscript>
<div align="center"><a href="index.php">Go Back To Upload Form</a></div><!-- If javascript is disabled -->
</noscript>

<?php
   
    
	 $name = mysqli_real_escape_string ($con, $_POST['name']);
	 $sno = mysqli_real_escape_string ($con, $_POST['sno']);
	 $area = mysqli_real_escape_string ($con, $_POST['area']);
	 
	 
	
	 $sql = "insert into region (sno, name, area) Values ('$sno','$name', '$area')";
					$result = mysqli_query($con, $sql);
				
				if($result)
				{	
					header('location:region.php?id=1');
				}
				else
				{
				    echo mysqli_error($con);
				}
   ?>
  
