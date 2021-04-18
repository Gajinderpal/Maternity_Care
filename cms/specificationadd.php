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
  }
	 
   
   ?>
<?php include '_head.php' ?>
<style>
    #specification
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
                       Sub Page Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Sub Page Already Exists.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add New Sub Page</h1>
		   
         <form action="specificationaddscript.php" method="post" role="form" enctype="multipart/form-data">
           
			 <!-- <div class="form-group">
                 <label>Sub Page</label>
                 <input class="form-control" name="name" type="text" required>
                 
             </div>-->
			 
			 
			 <div class="form-group col-xs-12 col-sm-6">
                 <label>Main Page</label>
                 <select name="category" required class="form-control" >
				    <option value="">--Select Main Page--</option>
					<?php 
					  $sql = "select * from page";
					  $result = mysqli_query($con, $sql);
					  while ($row = mysqli_fetch_array($result))
					  {
					?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['page']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
			 
			<div class="form-group col-xs-12 col-sm-6">
                 <label>Sub Page Heading</label>
                 <input class="form-control" name="heading" type="text" required>
                 
             </div>
             
             <div class="col-xs-12">
             
             <fieldset>
                <legend>SEO</legend>    
			 
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Title</label>
                 <input class="form-control" name="title" type="text" required>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Keywords</label>
                 <input class="form-control" name="keywords" type="text" required>
                 
             </div>
             
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" type="text" required>
                 
             </div>
        </fieldset>
        </div>  
        
           
			 <div class="col-xs-12">
             
             <fieldset>
                <legend>Feature Image</legend>    
			 
			 <div class="form-group col-xs-12 col-sm-6">
                 <label>Image</label>
                 <input type="file"  name="file2" class="form-control">
				 
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Alt tag</label>
                 <input class="form-control" name="alt" type="text" >
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Title</label>
                 <input class="form-control" name="img_title" type="text" >
                 
             </div>
          </fieldset>
       </div>
			 
			 <div class="form-group col-xs-12">
                 <label>Content</label>
                 <textarea name="content" class="form-control"></textarea>
              
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
