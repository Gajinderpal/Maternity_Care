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
  $sql = "select * from testimonials where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
<style>
    #testimonials
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
          <h1 class="page-header">Edit Testimonial</h1>
		  <div class="bredcrum"><a href="testimonials.php">All Testimonialss</a> &raquo; Edit Testimonial</div>
         <form action="testimonialsUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
           	<div class="form-group col-sm-6 col-xs-12">
                 <label>Serial Number</label>
                 <input class="form-control" name="serial" value="<?php echo $row['serial']; ?>" required>
                 
             </div>
			  
              <div class="form-group col-sm-6 col-xs-12">
                 <label>Name</label>
                 <input class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                 
             </div>
			  <div class="form-group col-sm-6 col-xs-12">
                 <label>Company / City / Profession*</label>
                 <input class="form-control" name="city" value="<?php echo $row['city']; ?>" >
                 
             </div>
             
             
             <div class="col-xs-12">
             
             <fieldset>
                <legend>Feature Image</legend>    
             
              <div class="form-group col-xs-12 col-sm-6">
            
                  <?php
             
             if($row['img'] == 'NULL' || $row['img'] == '' )
			 {
			 
			 ?>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image:</label>
                 <a href="testiimgEdit.php?id=<?php echo $row['id']; ?>&tbl=testimonials" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-picture-o" style="font-size:50px;" aria-hidden="true"></i></a>
 </div>
				<?php
				}
				else
				{
				?> 
                 
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image:</label>
                 <a href="testiimgEdit.php?id=<?php echo $row['id']; ?>&tbl=testimonials" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/testimonials/<?php echo $row['img']; ?>" width="100" ></a>
 </div>
 
 <?php } ?>
			  </div>
             
             
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Alt Tag</label>
                 <input class="form-control" name="alt" type="text" value="<?php echo $row['alt']; ?>">
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Title</label>
                 <input class="form-control" name="img_title" type="text" value="<?php echo $row['img_title']; ?>">
             </div>
             
             </fieldset>
            </div>
             
			  
			  <div class="form-group col-sm-12 col-xs-12">
                 <label>Content</label>
                 <textarea name="content" class="form-control" style="height:220px;"><?php echo $row['content']; ?></textarea>
                 
             </div>
			 
			
			<div class="col-sm-12 col-xs-12">
			 <button type="submit" class="blue-btn">Update</button>
             </div>
             
		  
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
