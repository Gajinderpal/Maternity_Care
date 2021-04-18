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
  include '../error/manage.php';
  $sql = "select * from area where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);?>
   <?php include '_head.php' ?>

<style>
    #area
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
		
          <h1 class="page-header">Edit State</h1>
		  <div class="bredcrum"><a href="area.php">All Areas</a> &raquo; Edit State</div>
         <form action="areaUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  
			  
			  <div class="form-group">
                 <label>Serial Number</label>
                 <input class="form-control" name="sno" type="text" value="<?php echo $row['sno']; ?>" required>
                 
             </div>
             
             
             <div class="form-group">
                 <label>State</label>
                 <input class="form-control" name="area" type="text" value="<?php echo $row['area']; ?>" required>
                 
             </div>
             
             <div class="form-group">
                 <label></label>
                 <textarea name="content" class="form-control"><?php echo $row['content']; ?></textarea>
            </div>
            
			 
			
			 
			 <button type="submit" class="btn">Update</button>
		  
         </form>
         
		 
          
		  
        </div>
      </div>
    </div>
	
	<?php include 'footer.php' ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

<?php } ?>
