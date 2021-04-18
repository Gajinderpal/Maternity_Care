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
    #review
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
                       Review Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Review Name Already Exists.
               </div>
							
		<?php } ?>
        
        <div class="bg">
          <h1 class="page-header">Add New Review</h1>
		   
         <form action="reviewaddscript.php" method="post" role="form" enctype="multipart/form-data">
           
			<div class="form-group col-xs-12 col-sm-6">
                 <label>Hospital Name</label>
                 <select name="hid" required class="form-control" >
				    <option value="">--Select Hospital--</option>
					<?php 
					  $sql = "select * from hospital order by name";
					  $result = mysqli_query($con, $sql);
					  while ($row = mysqli_fetch_array($result))
					  {
					?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label> Name*</label>
                 <input class="form-control" name="name" type="text" required>
                 
             </div>
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Email*</label>
                 <input class="form-control" name="email" type="text">
                 
             </div>
             
             <!--<div class="form-group col-xs-12 col-sm-6">
                 <label>Stars</label>
                 <select name="stars" class="form-control">
                             <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                 </select>
                 
             </div>-->
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Delivery Type</label>
                 <select name="delivery" class="form-control">
                             <option></option>
                             <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                 </select>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Cost Friendly</label>
                 <select name="cost_friendly" class="form-control">
                 <option></option>
                             <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                 </select>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Professionalism</label>
                 <select name="professionalism" class="form-control">
                 <option></option>
                             <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                 </select>
                 
             </div>
             
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Comment</label>
                 <select name="comment_review" class="form-control">
                 <option></option>
                             <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                 </select>
                 
             </div>
             
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Cleanliness</label>
                 <select name="cleanliness" class="form-control">
                 <option></option>
                             <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                 </select>
                 
             </div>
			 
			
			 <div class="form-group col-sm-12">
                 <label>Comment</label>
                 <textarea name="comment" class="form-control" style="height:220px;"></textarea>
             </div>
             
             <div class="form-group col-sm-12">
                 Status: <input name="status" type="checkbox">
                 
             </div>
			 
			 
			 <div class="col-sm-12 col-xs-12">			 
			 <button type="submit" class="blue-btn">Submit</button>
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
