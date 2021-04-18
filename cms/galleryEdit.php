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
  $sql = "select * from gallery where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);?>
<?php include '_head.php' ?>

<style>
    #gallery
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
        
          <h1 class="page-header">Edit Image Title</h1>
		  <div class="bredcrum"><a href="gallery.php">All gallery</a> &raquo; Edit Page</div>
         <form action="galleryUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Edit Image Title</label>
                 <select class="form-control" name="title" required>
				 <option value="">Select Page</option>
				 <?php
				 $sql2 = "select * from specification";
				 $result2 = mysqli_query($con, $sql2);
				 while($row2 = mysqli_fetch_array($result2))
				 {
				 ?>
				 <?php echo $row2['heading']; ?>
				    
				    <option <?php if($row['title'] == $row2['id']) { ?> selected="selected" <?php } ?>  value="<?php echo $row2['id']; ?>"><?php echo $row2['heading']; ?></option>
					<?php } ?>
				 </select>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label class="col-xs-12">Sort order</label>
				<input class="form-control" name="s_no" type="text" value="<?php echo $row['s_no']; ?>">
			</div>
			  
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label class="col-xs-12">Image Title</label>
				<input class="form-control" name="img_title" type="text" value="<?php echo $row['img_title']; ?>">
			</div>
            
            <div class="form-group col-xs-12 col-sm-6">
                 <label class="col-xs-12">Image Alt Tag</label>
				<input class="form-control" name="alt" type="text" value="<?php echo $row['alt']; ?>">
			</div>
			
			 
			 <div class="col-xs-12"><button type="submit" class="blue-btn">Update</button></div>
		  
         </form>
         
		 
          
		  
        </div>
        </div>
      </div>
    </div>
	
	<div class="footer">
	   <div class="container">
	    <p>Design and Developed By <a href="http://stealthmedialtd.co.nz/" target="_blank">Stealth Media Ltd</a></p>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

<?php } ?>
