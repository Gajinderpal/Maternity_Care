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
		    if($err == 4)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert-danger" aria-hidden="true">x</button>
                      Current Password does not match.
               </div>
							
		<?php } ?>
		
          <h1 class="page-header">Change Password</h1>
		  
         <form action="change-passwordUpdate.php?id=<?php echo $id; ?>" method="post" role="form">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Current Password</label>
                 <input type="password" class="form-control" name="cur_password" required>
              </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label>New Password</label>
                 <input type="password" class="form-control" name="new_password" required>
              </div>
              
             
			 
			
			 
			  
			 
			
			 
			 <div class="col-xs-12"><button type="submit" class="blue-btn">Update</button> </div>
		  
         </form>
         
		 
          
		  
        </div>
        
        </div>
      </div>
    </div>
	
<?php include 'footer.php' ?>
  </body>
</html>

<?php } ?>
