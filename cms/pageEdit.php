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
  $sql = "select * from page where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
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
		
        <div class="bg">
          <h1 class="page-header">Edit Page</h1>
		  <div class="bredcrum"><a href="page.php">All Pages</a> &raquo; Edit Page</div>
         <form action="pageUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Page Name</label>
                 <input class="form-control" name="page" value="<?php echo $row['page']; ?>" required>
             </div>
             
             
             <div class="col-xs-12">
             
             <fieldset>
                <legend>SEO</legend>
             
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Page Tilte</label>
                 <input class="form-control" name="title" value="<?php echo $row['title']; ?>" required >
                 
             </div>
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Meta Keywords</label>
                 <input class="form-control" name="keywords" value="<?php echo $row['keywords']; ?>" >
                 
             </div>
			 
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" value="<?php echo $row['meta_desc']; ?>">
             </div>
           </fieldset>
           </div> 
           
           <div class="col-xs-12">
             
             <fieldset>
                <legend>Feature Image</legend>     
             <?php
             
             if($row['color'] == 'NULL' || $row['color'] == '' )
			 {
			 
			 ?>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image :</label>
                 <a href="pageimgEdit.php?id=<?php echo $row['id']; ?>&tbl=page" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-picture-o" aria-hidden="true" style="font-size:30px;"></i></a>
 </div>
				<?php
				}
				else
				{
				?> 
                 
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image :</label>
                 <a href="pageimgEdit.php?id=<?php echo $row['id']; ?>&tbl=page" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/page/<?php echo $row['color']; ?>" width="100" ></a>
 </div>
 
 <?php } ?>
 
               <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Alt Tag</label>
                 <input class="form-control" name="alt" value="<?php echo $row['alt']; ?>">
             </div>
             
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Title</label>
                 <input class="form-control" name="img_title" value="<?php echo $row['img_title']; ?>">
             </div>
             
		</fieldset>
        
      </div>	 
			  <div class="form-group col-xs-12">
                 <label>Content</label>
                 <textarea name="content" class="form-control"><?php echo $row['content']; ?></textarea>
                 
             </div>
			 
			
			 
			<div class="col-xs-12"> <button type="submit" class="blue-btn">Update</button></div>
		  
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
