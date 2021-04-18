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
  $sql = "select * from review where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
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
		
        <div class="bg">
          <h1 class="page-header">Edit Testimonial</h1>
		  <div class="bredcrum"><a href="review.php">All reviews</a> &raquo; Edit Testimonial</div>
         <form action="reviewUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
           	<div class="form-group col-xs-12 col-sm-6">
                 <label>Hospital Name</label>
                 <select name="hid" required class="form-control" >
				    <option value="">--Select Hospital--</option>
					<?php 
					  $sql2 = "select * from hospital";
					  $result2 = mysqli_query($con, $sql2);
					  while ($row2 = mysqli_fetch_array($result2))
					  {
					?>
					<option <?php if($row['hid'] == $row2['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
			  
              <div class="form-group col-sm-6 col-xs-12">
                 <label>Name</label>
                 <input class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                 
             </div>
			  <div class="form-group col-sm-6 col-xs-12">
                 <label>Email*</label>
                 <input class="form-control" name="email" value="<?php echo $row['email']; ?>" >
             </div>
             
             <?php /*?><div class="form-group col-xs-12 col-sm-6">
                 <label>Stars</label>
                 <select name="stars" class="form-control">
                  <option></option>
                                <option <?php if($row['stars'] == 1){ ?> selected <?php } ?> value="1">1</option>
                                <option <?php if($row['stars'] == 2){ ?> selected <?php } ?> value="2">2</option>
                                 <option <?php if($row['stars'] == 3){ ?> selected <?php } ?> value="3">3</option>
                                  <option <?php if($row['stars'] == 4){ ?> selected <?php } ?> value="4">4</option>
                                   <option <?php if($row['stars'] == 5){ ?> selected <?php } ?> value="5">5</option>
                 </select>
                 
             </div><?php */?>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Delivery Type</label>
                 <select name="delivery" class="form-control">
                 <option></option>
                                <option <?php if($row['delivery'] == 1){ ?> selected <?php } ?> value="1">1</option>
                                <option <?php if($row['delivery'] == 2){ ?> selected <?php } ?> value="2">2</option>
                                 <option <?php if($row['delivery'] == 3){ ?> selected <?php } ?> value="3">3</option>
                                  <option <?php if($row['delivery'] == 4){ ?> selected <?php } ?> value="4">4</option>
                                   <option <?php if($row['delivery'] == 5){ ?> selected <?php } ?> value="5">5</option>
                 </select>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Cost Friendly</label>
                 <select name="cost_friendly" class="form-control">
                 <option></option>
                                <option <?php if($row['cost_friendly'] == 1){ ?> selected <?php } ?> value="1">1</option>
                                <option <?php if($row['cost_friendly'] == 2){ ?> selected <?php } ?> value="2">2</option>
                                 <option <?php if($row['cost_friendly'] == 3){ ?> selected <?php } ?> value="3">3</option>
                                  <option <?php if($row['cost_friendly'] == 4){ ?> selected <?php } ?> value="4">4</option>
                                   <option <?php if($row['cost_friendly'] == 5){ ?> selected <?php } ?> value="5">5</option>
                 </select>
                 
             </div>
             
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Professionalism</label>
                 <select name="professionalism" class="form-control">
                 <option></option>
                                <option <?php if($row['professionalism'] == 1){ ?> selected <?php } ?> value="1">1</option>
                                <option <?php if($row['professionalism'] == 2){ ?> selected <?php } ?> value="2">2</option>
                                 <option <?php if($row['professionalism'] == 3){ ?> selected <?php } ?> value="3">3</option>
                                  <option <?php if($row['professionalism'] == 4){ ?> selected <?php } ?> value="4">4</option>
                                   <option <?php if($row['professionalism'] == 5){ ?> selected <?php } ?> value="5">5</option>
                 </select>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Comment</label>
                 <select name="comment_review" class="form-control">
                 <option></option>
                                <option <?php if($row['comment_review'] == 1){ ?> selected <?php } ?> value="1">1</option>
                                <option <?php if($row['comment_review'] == 2){ ?> selected <?php } ?> value="2">2</option>
                                 <option <?php if($row['comment_review'] == 3){ ?> selected <?php } ?> value="3">3</option>
                                  <option <?php if($row['comment_review'] == 4){ ?> selected <?php } ?> value="4">4</option>
                                   <option <?php if($row['comment_review'] == 5){ ?> selected <?php } ?> value="5">5</option>
                 </select>
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Cleanliness</label>
                 <select name="cleanliness" class="form-control">
                 <option></option>
                                <option <?php if($row['cleanliness'] == 1){ ?> selected <?php } ?> value="1">1</option>
                                <option <?php if($row['cleanliness'] == 2){ ?> selected <?php } ?> value="2">2</option>
                                 <option <?php if($row['cleanliness'] == 3){ ?> selected <?php } ?> value="3">3</option>
                                  <option <?php if($row['cleanliness'] == 4){ ?> selected <?php } ?> value="4">4</option>
                                   <option <?php if($row['cleanliness'] == 5){ ?> selected <?php } ?> value="5">5</option>
                 </select>
                 
             </div>
             
             
			  
			  <div class="form-group col-sm-12 col-xs-12">
                 <label>Comment</label>
                 <textarea name="comment" class="form-control" style="height:220px;"><?php echo $row['comment']; ?></textarea>
                 
             </div>
			 
             <div class="form-group col-sm-12">
                 Status: <input name="status" type="checkbox" <?php if($row['status'] == 1){ ?> checked <?php } ?>>
                 
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
