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
		<?php 
		    if($id == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       FQA Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       FQA Name Already Exists.
               </div>
							
		<?php } ?>
        
        <div class="bg">
          <h1 class="page-header">Add New FQA</h1>
		   
         <form action="faqaddscript.php" method="post" role="form" enctype="multipart/form-data">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label> Serial Number*</label>
                 <input class="form-control" name="sno" type="text" required>
                 
             </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label> Question*</label>
                 <input class="form-control" name="ques" type="text" required>
                 
             </div>
			  
			 
			 
			 
			 
			 
			 <div class="form-group col-sm-12">
                 <label>Answer</label>
                 <textarea name="ans" class="form-control" style="height:220px;"></textarea>
                 
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
