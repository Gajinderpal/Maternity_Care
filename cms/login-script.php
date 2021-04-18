<?php
session_start();
     include '../error/manage.php';
	 
	 /*--------------------------Get IP Address-------------------------------*/
	 
	 if (!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ip=$_SERVER['HTTP_CLIENT_IP'];
		//Is it a proxy address
		}
     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
	else{
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
	 /*--------------------------Get IP Address-------------------------------*/
	 
 // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, username, password FROM user WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['user']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $username, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	$pass = $_POST['pass'];
	if (password_verify($pass, $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['id'] = $id;
		$sql4 = "INSERT INTO record (ip, status, suser, sid) VALUES (?, ?, ?, ?)";
		if($stmt4 = mysqli_prepare($con, $sql4))
		{
         mysqli_stmt_bind_param($stmt4, "sisi", $ip, $status, $suser, $sid);
		 $status = 1;
		 $suser = $_SESSION['user'];
		 $sid = $_SESSION['id'];
		 mysqli_stmt_execute($stmt4);
		 header('location:home.php');
		}
		else
		{
		  "ERROR: Could not prepare query:  " . mysqli_error($con);
		}
		mysqli_stmt_close($stmt4);
	} 
	else 
	{
	    $sql = "INSERT INTO record (ip, status) VALUES (?, ?)";
		if($stmt2 = mysqli_prepare($con, $sql))
		{
         mysqli_stmt_bind_param($stmt, "si", $ip, $status);
		 $status = 0;
		 mysqli_stmt_execute($stmt2);
		 header('location:index.php?id=3');
		}
		else
		{
		  "ERROR: Could not prepare query:  " . mysqli_error($con);
		}
		mysqli_stmt_close($stmt2);
		 
		
	}
} 
 else {
	     $sql3 = "INSERT INTO record (ip, status) VALUES (?, ?)";
		if($stmt3 = mysqli_prepare($con, $sql3))
		{
         mysqli_stmt_bind_param($stmt3, "si", $ip, $status);
		 $status = 0;
		 mysqli_stmt_execute($stmt3);
		 header('location:index.php?id=1');
		}
		else
		{
		  "ERROR: Could not prepare query:  " . mysqli_error($con);
		}
		mysqli_stmt_close($stmt3);
		
	}
$stmt->close();

?>