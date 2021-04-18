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
  $sql = "select * from header where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
<style>
    #header
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
                       Header Successfully Added.
               </div>
							
		<?php } ?>
		
		
		<?php 
		    if($err == 2)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                       Header Updated.
               </div>
							
		<?php } ?>
        
        
		
          <h1 class="page-header">Header</h1>
		  
         <form action="headerUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Email : </label>
                 <textarea name="email" style="height:90px;"><?php echo $row['email']; ?></textarea>
              </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Phone : </label>
                 <textarea name="phone" style="height:90px;"><?php echo $row['phone']; ?></textarea>
              </div>
              
              <div class="form-group col-xs-12">
                 <label>Address : </label>
                 <textarea name="address" style="height:90px;"><?php echo $row['address']; ?></textarea>
              </div>
              
              
              <div class="col-xs-12">
             
                <fieldset>
                  <legend>Social Media</legend>
                  
                   <div class="form-group col-xs-12 col-sm-6">
                     <label>Facebook:</label>
                      <input type="text" class="form-control" name="facebook" value="<?php echo $row['facebook']; ?>">
                   </div>
                   
                   
                   <div class="form-group col-xs-12 col-sm-6">
                     <label>Twitter:</label>
                      <input type="text" class="form-control" name="twitter" value="<?php echo $row['twitter']; ?>" >
                   </div>
                   
                   <div class="form-group col-xs-12 col-sm-6">
                     <label>Linked In:</label>
                      <input type="text" class="form-control" name="linkedin" value="<?php echo $row['linkedin']; ?>" >
                   </div>
                   
                   <div class="form-group col-xs-12 col-sm-6">
                     <label>Google Plus:</label>
                      <input type="text" class="form-control" name="googleplus" value="<?php echo $row['googleplus']; ?>" >
                   </div>
                   
                   <div class="form-group col-xs-12 col-sm-6">
                     <label>youtube:</label>
                      <input type="text" class="form-control" name="youtube" value="<?php echo $row['youtube']; ?>" >
                   </div>
                   
                   <div class="form-group col-xs-12 col-sm-6">
                     <label>Instagram:</label>
                      <input type="text" class="form-control" name="instagram" value="<?php echo $row['instagram']; ?>" >
                   </div>
                   
                  
               </fieldset>
               
             </div>
              
              
			 <div class="col-xs-12"><button type="submit" class="blue-btn">Update</button> </div>
		  
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
