<?php
 include 'error/manage.php';
	$sql = "select * from contact";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);	
	?>

<?php
   
    
	 $name = mysqli_real_escape_string ($con, $_POST['name']);
	 $phone = mysqli_real_escape_string ($con, $_POST['phone']);
	  $email = mysqli_real_escape_string ($con, $_POST['email']);
	 $content = mysqli_real_escape_string ($con, $_POST['content']);
	 
	 
	
	 $sql = "insert into contact (name, phone, email, content) Values ('$name','$phone', '$email', '$content')";
					$result = mysqli_query($con, $sql);
				
				if($result)
				{	
					header('location:contact.php');
				}
				else
				{
				    $errorMessage = 'There was an error while submitting the form. Please try again later';
				}
   ?>
  
