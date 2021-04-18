<?php
include '../error/manage.php';
ob_start();
?><noscript>
<div align="center"><a href="index.php">Go Back To Upload Form</a></div><!-- If javascript is disabled -->
</noscript>

<?php
   
     
	 $area = mysqli_real_escape_string ($con, $_POST['area']);
	 $sno = mysqli_real_escape_string ($con, $_POST['sno']);
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 
	 
	
	 $sql = "insert into area (sno, area, content) Values ('$sno','$area','$content')";
					$result = mysqli_query($con, $sql);
				
				if($result)
				{	
					header('location:area.php?id=1');
				}
				else
				{
				    echo mysqli_error($con);
				}
   ?>
  
