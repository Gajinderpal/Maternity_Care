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
  $sql = "select * from faq where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
<style>
    #faq
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
          <h1 class="page-header">Edit FAQs</h1>
		  <div class="bredcrum"><a href="faq.php">All faqs</a> &raquo; Edit FAQs</div>
         <form action="faqUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
           	<div class="form-group col-sm-6 col-xs-12">
                 <label>Serial Number</label>
                 <input class="form-control" name="sno" value="<?php echo $row['sno']; ?>" required>
                 
             </div>
			  
              <div class="form-group col-sm-6 col-xs-12">
                 <label>Questions</label>
                 <input class="form-control" name="ques" value="<?php echo $row['ques']; ?>" required>
                 
             </div>
			  
             
             
             
             
			  
			  <div class="form-group col-sm-12 col-xs-12">
                 <label>Answer</label>
                 <textarea name="ans" class="form-control" style="height:220px;"><?php echo $row['ans']; ?></textarea>
                 
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
