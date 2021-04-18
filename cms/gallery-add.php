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
	 
   include '../error/manage.php';?>
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
		<?php 
		    if($id == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Page Successfully Added.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add gallery Images</h1>
		   
         <form action="gallery-add-script.php" method="post" role="form" enctype="multipart/form-data">
           
			  
			  
			 
			 
			 
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Page Name</label>
                 <select class="form-control" name="title" required>
				 <option value="">Select Page</option>
				 <?php
				 $sql2 = "select * from specification";
				 $result2 = mysqli_query($con, $sql2);
				 while($row2 = mysqli_fetch_array($result2))
				 {
				 ?>
				 <?php echo $row2['heading']; ?>
				    
				    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['heading']; ?></option>
					<?php } ?>
				 </select>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label class="col-xs-12">Sort order</label>
				<input class="form-control" name="s_no" type="text" autocomplete="off">
			</div>
             
			 
			  <div class="form-group col-xs-12 col-sm-6">
                 <label class="col-xs-12">Image Title</label>
				<input class="form-control" name="img_title" type="text">
			</div>
            
            
			  
			 
			  <div class="form-group col-xs-12 col-sm-6">
                 <label class="col-xs-12">Image Upload</label>
				 
			     
                 <input class="form-control" name="file[]" type="file" id="upload" multiple>
			</div>	
				
			<div class="form-group col-xs-12 col-sm-6">
                 <label class="col-xs-12">Image Alt Tag</label>
				<input class="form-control" name="alt" type="text">
			</div>	
				
			 
			 
			 
			 <div class="col-xs-12"><button type="submit" class="blue-btn">Submit</button></div>
		
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
