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
  $sql = "select * from specification where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
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
          <h1 class="page-header">Edit Sub Page</h1>
		  <div class="bredcrum"><a href="specification.php">All Sub Page</a> &raquo; Edit Sub Page</div>
         <form action="specificationUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  
			  
			   <div class="form-group col-xs-12 col-sm-6">
                 <label>Main Page</label>
                 <select name="category" required class="form-control" >
				    <option value="">--Select Product--</option>
					<?php 
					  $sql2 = "select * from page";
					  $result2 = mysqli_query($con, $sql2);
					  while ($row2 = mysqli_fetch_array($result2))
					  {
					?>
					<option <?php if($row['category'] == $row2['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row2['id']; ?>"><?php echo $row2['page']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
			 <?php /*?><?php
			    
			    if($row['ThumbName'] == 'NULL' || $row['ThumbName'] == '' )
				{
			 ?>
			  <div class="form-group">
			     
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=specification" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/feature/no-image.gif" width="100" ></a>
				<p>Image Size : 170 x 170</p>
			 </div>
			 <?php
			 }
			 else
			 {
			 ?>
			
			 <div class="form-group">
			   
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=specification" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=350,toolbar=1,resizable=0'); return false;"><img src="<?php echo $row['ThumbName']; ?>" width="100" ></a>
				<p>Image Size : 170 x 170</p>
			 </div>
			 
			 <?php } ?><?php */?>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Sub Page Heading</label>
                 <input class="form-control" name="heading" type="text" value="<?php echo $row['heading']; ?>" required>
                 
             </div>
             
           <div class="col-xs-12">
             
             <fieldset>
                <legend>SEO</legend>      
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Title</label>
                 <input class="form-control" name="title" type="text" value="<?php echo $row['title']; ?>" required>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Keywords</label>
                 <input class="form-control" name="keywords" type="text" value="<?php echo $row['keywords']; ?>" required>
                 
             </div>
             
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" type="text" value="<?php echo $row['meta_desc']; ?>" required>
                 
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
                 <a href="colorEdit.php?id=<?php echo $row['id']; ?>&tbl=specification" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/subpage/no-image.png" width="100" ></a>
 </div>
				<?php
				}
				else
				{
				?> 
                 
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image :</label>
                 <a href="colorEdit.php?id=<?php echo $row['id']; ?>&tbl=specification" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/subpage/<?php echo $row['color']; ?>" width="100" ></a>
 </div>
 
 <?php } ?>
			  
               <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Alt Tag</label>
                 <input class="form-control" name="alt" type="text" value="<?php echo $row['alt']; ?>" >
               </div>
               
               <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Title</label>
                 <input class="form-control" name="img_title" type="text" value="<?php echo $row['img_title']; ?>" >
               </div>
             
           </fieldset>
           </div>
			 
			  <div class="form-group col-xs-12">
                 <label>Content</label>
                 <textarea name="content" class="form-control" ><?php echo $row['content']; ?></textarea>
                 
             </div>
			 
			
			 
			 <div class="col-xs-12"><button type="submit" class="blue-btn">Update</button></div>
		  
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
