<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['user']))
{
   header('location:index.php');
}
$id = $_GET['id'];
$table = $_GET['tbl'];
include ('../error/manage.php');

$sql = "select * from ".$table." where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Image Edit </title>
</head>

<body background="#ddd">
   <table width="500" height="228" border="0" align="center" bgcolor="#fff" class="enquiry-table">
<form action="imgUpdate.php?row=<?php echo $row['id']; ?>&tbl=<?php echo $table; ?>" method="post" name="userform"  class="enquiry-form" enctype="multipart/form-data">
                                                  <tr>
                                                    <td width="143"><strong>Upload New Image<span class="style1"> *</span></strong></td>
                                                    <td width="218"><input type="file" name="file[]" /></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                    <td ><input name="submit" type="submit" class="Upload"/></td>
													<td>&nbsp;</td>
                                                  </tr>
     </form>
</table>
</body>
</html>
