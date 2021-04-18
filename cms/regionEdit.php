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
  $sql = "select * from region where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);?>
   <?php include '_head.php' ?>

<style>
    #region
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
          <h1 class="page-header">Edit Region</h1>
		  <div class="bredcrum"><a href="area.php">All Regions</a> &raquo; Edit Region</div>
         <form action="regionUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  
			  
			  <div class="form-group col-xs-12">
                 <label>Serial Number</label>
                 <input class="form-control" name="sno" type="text" value="<?php echo $row['sno']; ?>" required>
                 
             </div>
             
             
             <div class="form-group col-xs-12">
                 <label>Region</label>
                 <input class="form-control" name="name" type="text" value="<?php echo $row['name']; ?>" required>
                 
             </div>
             
             <!--<div class="form-group">
                 <label></label>
                 <textarea name="content" class="form-control"><?php echo $row['content']; ?></textarea>
            </div>-->
            
			 
			
			 
			<div class="col-xs-12"> <button type="submit" class="btn">Update</button></div>
		  
         </form>
         
		 
         </div> 
		  
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
