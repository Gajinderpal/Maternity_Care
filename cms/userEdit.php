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
  
  
  if( isset ($_GET['err']))
  {
    $err = $_GET['err'];
  }
  else
  {
    $err = 0;
  }
  
  include '../error/manage.php';
  $sql = "select * from user where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
<style>
    #user
	{
	     background: linear-gradient(60deg, #B24592, #F15F79);
color:#fff;
	}
</style>
  <body>

    <?php include 'header.php' ?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'sidebar.php' ?>
        <div class="col-sm-9  col-md-10  main">
          
          <div class="bg">
        
        <?php 
		    if($err == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                       User Successfully Added.
               </div>
							
		<?php } ?>
		
		
		<?php 
		    if($err == 2)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                       User Updated.
               </div>
							
		<?php } ?>
        
        <?php 
		    if($err == 3)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                       Password has been successfully changed. 
               </div>
							
		<?php } ?>
		
          <h1 class="page-header">Account Information</h1>
		  <!--<div class="bredcrum"><a href="user.php">All Users</a> &raquo; Edit User</div>-->
         <form action="userUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>First Name</label>
                 <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
              </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Last Name</label>
                 <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" required>
              </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Email</label>
                 <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
              </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Address</label>
                 <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
              </div>
              
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Username</label>
                 <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" required >
                 
             </div>
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>" readonly >
                 
             </div>
			 
			
			 
			  
			 
			
			 
			 <div class="col-xs-12"><button type="submit" class="blue-btn">Update</button> &nbsp;<a href="change-password.php?id=<?php echo $row['id']; ?>" class="blue-btn"><i class="fa fa-key"></i> Change Password</a></div>
		  
         </form>
         
		 
          
		  
        </div>
        
        </div>
      </div>
    </div>
	
	<?php include 'footer.php' ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
 
  </body>
</html>

<?php } ?>
