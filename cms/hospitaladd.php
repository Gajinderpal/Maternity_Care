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
		<?php 
		    if($id == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Hospital Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Hospital Name Already Exists.
               </div>
							
		<?php } ?>
        
        <div class="bg">
          <h1 class="page-header">Add New hospital</h1>
		   
         <form action="hospitaladdscript.php" method="post" role="form" enctype="multipart/form-data">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Hospital Name</label>
                 <input class="form-control" name="name" type="text" required>
                 
             </div>
             
             <div class="col-xs-12">
             
             <fieldset>
                <legend>SEO</legend>
             
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Hospital Page Tilte</label>
                 <input class="form-control" name="title" type="text" required>
                 
             </div>
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Meta Keywords</label>
                 <input class="form-control" name="keywords" type="text">
                 
             </div>
			 
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" type="text">
                 
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
                 <label>Image Alt Tag</label>
                 <input class="form-control" name="img_alt" type="text">
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Title</label>
                 <input class="form-control" name="img_title" type="text">
             </div>
             
             </fieldset>
            </div>
            
            <div class="col-xs-12">
             
             <fieldset>
                <legend>Address</legend>
             
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>State</label>
                 <input class="form-control" name="state" type="text" required>
                 
             </div>
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Area</label>
                 <select name="area" required class="form-control" id="country">
				    <option value="">--Select Area--</option>
					<?php 
					  $sql = "select * from area";
					  $result = mysqli_query($con, $sql);
					  while ($row = mysqli_fetch_array($result))
					  {
					?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['area']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
           <div class="form-group col-xs-12 col-sm-6">
                 <label>Region</label>  
             <select id="state" name="region" required class="form-control">
                <option value="">Select Area first</option>
            </select>
          </div>
             
             <?php /*?><div class="form-group col-xs-12 col-sm-6">
                 <label>Region</label>
                 <select name="region" required class="form-control" >
				    <option value="">--Select Region--</option>
					<?php 
					  $sql = "select * from region";
					  $result = mysqli_query($con, $sql);
					  while ($row = mysqli_fetch_array($result))
					  {
					?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div><?php */?>
			 
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>City</label>
                 <input class="form-control" name="city" type="text">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Pin Code</label>
                 <input class="form-control" name="pincode" type="text">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Address</label>
                 <input class="form-control" name="address" type="text">
              </div>
            
            </fieldset>
           </div>
           
           
           <div class="col-xs-12">
             
             <fieldset>
                <legend>Important</legend>
             
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Birth Per Year</label>
                 <input class="form-control" name="births_per_year" type="text">
                 
             </div>
             
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Cesarean Section Rate</label>
                 <input class="form-control" name="cesarean_section_rate" type="text">
              </div>
			 
			  <div class="form-group col-xs-12 col-sm-12">
                 <label>Vaginal Birth Rate</label>
                 <input class="form-control" name="vaginal_birth_rate" type="text">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Induction Rate</label>
                 <input class="form-control" name="induction_rate" type="text">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>Induction Rate</label>
                 <input class="form-control" name="induction_rate" type="text">
              </div>
              
              <div class="form-group col-xs-12 col-sm-12">
                 <label>3rd/4th Degree Tear Rate.</label>
                 <input class="form-control" name="tear_rate" type="text">
              </div>
            
            </fieldset>
           </div>
			 
			 
			 <div class="form-group col-xs-12">
                 <label>Content</label>
                 <textarea name="content" class="form-control"></textarea>
                 
             </div>
			 
			 
			 
			 
			 <div class="col-xs-12"><button type="submit" class="blue-btn">Submit</button>
		  
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
    
    <script>
$(document).ready(function(){
    $('#country').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'area='+countryID,
                success:function(html){
                    $('#state').html(html);
                   
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Area first</option>');
            
        }
    });
    
});
</script>

  </body>
</html>

<?php } ?>
