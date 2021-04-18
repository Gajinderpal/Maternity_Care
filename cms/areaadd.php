<?php 
  session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
  include '../error/manage.php';
  if( isset ($_GET['id']))
  {
    $id = $_GET['id'];
  }
  else
  {
    $id = 0;
  }?>
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
		<?php 
		    if($id == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       State Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       State Already Exists.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add New State</h1>
		   
         <form action="areaaddscript.php" method="post" role="form" enctype="multipart/form-data">
           
			 
			 
			 
			 <div class="form-group">
                 <label>Serial Number</label>
                 <input class="form-control" name="sno" type="text" required>
                 
             </div>
			 
			<div class="form-group">
                 <label>State</label>
                 <input class="form-control" name="area" type="text" required>
                 
             </div>
             
             <div class="form-group">
                 <label>Content</label>
                 <textarea name="content" class="form-control"></textarea>
                 
             </div>
			 
           
			 
			
			 <button type="submit" class="btn">Submit</button>
		  
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
