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
	 
   
   ?>
<?php include '_head.php' ?>
<style>
    #page
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
                       Page Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Page Name Already Exists.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add new Page</h1>
		   
         <form action="pageaddscript.php" method="post" role="form" enctype="multipart/form-data">
           
			  <div class="form-group">
                 <label>Page Name</label>
                 <input class="form-control" name="page" type="text" required>
                 
             </div>
			  <div class="form-group">
                 <label>Page Tilte</label>
                 <input class="form-control" name="title" type="text" required>
                 
             </div>
			  <div class="form-group">
                 <label>Meta Keywords</label>
                 <input class="form-control" name="keywords" type="text">
                 
             </div>
			 
			  <div class="form-group">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" type="text">
                 
             </div>
			 
			 
			  <div class="form-group">
                 <label>Heading</label>
                 <input class="form-control" name="heading" type="text">
                 
             </div>
			 
			 <div class="form-group">
                 <label>Text area</label>
                 <textarea id="elm1" style="height:260px;" name="content" ></textarea>
             </div>
			 
			  <div class="form-group">
                 <label class="col-xs-12">Image Upload</label>
				 
			    <div class="col-xs-6">	 
                 <input class="form-control" name="link1" placeholder="Image Link" type="text">
                </div> 
				
				
				<div class="col-xs-6">	 
                 <input class="form-control" name="img1" type="file">
				  <p class="button"><input type="hidden" name="action" value="image" /></p>
                </div> 
				
			</div>	
				<div class="form-group">
                 <label class="col-xs-12">Image Upload</label>
				 
			    <div class="col-xs-6">	 
                 <input class="form-control" name="link2" placeholder="Image Link" type="text">
                </div> 
				
				
				<div class="col-xs-6">	 
                 <input class="form-control" name="img2" type="file">
				  <p class="button"><input type="hidden" name="action" value="image" /></p>
                </div> 
				
             </div>
			 
			 
			 <div class="form-group">
                 <label class="col-xs-12">Image Upload</label>
				 
			    <div class="col-xs-6">	 
                 <input class="form-control" name="link3" placeholder="Image Link" type="text">
                </div> 
				
				
				<div class="col-xs-6">	 
                 <input class="form-control" name="img3" type="file">
				  <p class="button"><input type="hidden" name="action" value="image" /></p>
                </div> 
				
             </div>
			 
			 
			 
			 <div class="form-group">
                 <label class="col-xs-12">Image Upload</label>
				 
			    <div class="col-xs-6">	 
                 <input class="form-control" name="link4" placeholder="Image Link" type="text">
                </div> 
				
				
				<div class="col-xs-6">	 
                 <input class="form-control" name="img4" type="file">
				  <p class="button"><input type="hidden" name="action" value="image" /></p>
                </div> 
				
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
