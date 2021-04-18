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
  $sql = "select * from hospital where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
<style>
    #hospital
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
          <h1 class="page-header">Edit Hospital</h1>
		  <div class="bredcrum"><a href="hospital.php">All Hospitals</a> &raquo; Edit Hospital</div>
         <form action="hospitalUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Hospital Name</label>
                 <input class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
             </div>
             
             
             <div class="col-xs-12">
             
             <fieldset>
                <legend>SEO</legend>
             
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Tilte</label>
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
             
             if($row['img'] == 'NULL' || $row['img'] == '' )
			 {
			 
			 ?>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image :</label>
                 <a href="hospitalimgEdit.php?id=<?php echo $row['id']; ?>&tbl=hospital" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-picture-o" aria-hidden="true" style="font-size:30px;"></i></a>
 </div>
				<?php
				}
				else
				{
				?> 
                 
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image :</label>
                 <a href="hospitalimgEdit.php?id=<?php echo $row['id']; ?>&tbl=hospital" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/hospital/<?php echo $row['img']; ?>" width="100" ></a>
 </div>
 
 <?php } ?>
 
               <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Alt Tag</label>
                 <input class="form-control" name="img_alt" value="<?php echo $row['img_alt']; ?>">
             </div>
             
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Title</label>
                 <input class="form-control" name="img_title" value="<?php echo $row['img_title']; ?>">
             </div>
             
		</fieldset>
       </div>
       
       <div class="col-xs-12">
             
             <fieldset>
                <legend>Address</legend>
             
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>State</label>
                 <input class="form-control" name="state" type="text" value="<?php echo $row['state']; ?>"  required>
                 
             </div>
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Area</label>
                 <select name="area" required class="form-control" id="country">
				    <option value="">--Select Area--</option>
					<?php 
					  $sql2 = "select * from area";
					  $result2 = mysqli_query($con, $sql2);
					  while ($row2 = mysqli_fetch_array($result2))
					  {
					?>
					<option <?php if($row['area'] == $row2['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row2['id']; ?>"><?php echo $row2['area']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
             
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Region</label>
                 <select name="region" required class="form-control" id="state">
				    <option value="">--Select Region--</option>
					<?php 
					  $sql3 = "select * from region order by name asc";
					  $result3 = mysqli_query($con, $sql3);
					  while ($row3 = mysqli_fetch_array($result3))
					  {
					?>
					<option <?php if($row['region'] == $row3['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row3['id']; ?>"><?php echo $row3['name']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
			 
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>City</label>
                 <input class="form-control" name="city" type="text" value="<?php echo $row['city']; ?>">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Pin Code</label>
                 <input class="form-control" name="pincode" type="text" value="<?php echo $row['pincode']; ?>">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Address</label>
                 <input class="form-control" name="address" type="text" value="<?php echo $row['address']; ?>">
              </div>
            
            </fieldset>
           </div>
           
           
           <div class="col-xs-12">
             
             <fieldset>
                <legend>Important</legend>
             
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Birth Per Year</label>
                 <input class="form-control" name="births_per_year" type="text" value="<?php echo $row['births_per_year']; ?>">
                 
             </div>
             
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Cesarean Section Rate</label>
                 <input class="form-control" name="cesarean_section_rate" type="text" value="<?php echo $row['cesarean_section_rate']; ?>">
              </div>
			 
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>Vaginal Birth Rate</label>
                 <input class="form-control" name="vaginal_birth_rate" type="text" value="<?php echo $row['vaginal_birth_rate']; ?>">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Induction Rate</label>
                 <input class="form-control" name="induction_rate" type="text" value="<?php echo $row['induction_rate']; ?>">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Induction Rate</label>
                 <input class="form-control" name="induction_rate" type="text" value="<?php echo $row['induction_rate']; ?>">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>3rd/4th Degree Tear Rate.</label>
                 <input class="form-control" name="tear_rate" type="text" value="<?php echo $row['tear_rate']; ?>">
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
