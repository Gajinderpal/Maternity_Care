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
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Sub Page Updated.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 3)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Sub Page Already Exists.
               </div>
							
		<?php } ?>
         
          <h2 class="sub-header">All Pages</h2><div class="newpage"><a href="specificationadd.php">Add New Sub Page</a></div>
		  
		  <div id="first-container">    
          <div class="table-responsive">
            <table class="table table-striped" id="rounded-corner">
              <thead>
			  
			  
                <tr>
                  <th>Page</th>
                  <th>Sub Page</th>
				 
                  <th>Edit </th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
			  
			  <?php
			  include '../error/manage.php';
	          $sql = "select * from specification order by category";
	          $result = mysqli_query($con, $sql);
			      while($row = mysqli_fetch_array($result))
				  {
			  ?>
                <tr>
                <td>
                  <?php $category = $row['category'];
				      $sql2 = "select * from page where id='$category'";
					  $res2 = mysqli_query($con, $sql2);
					  $row2 = mysqli_fetch_array($res2);
					  echo $row2['page'];
				   ?>
                </td>
                
                  <td><?php echo $row['heading']; ?></td>
                  
                  
                  <td><a href="specificationEdit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  <td><a href="delete.php?row=<?php echo $row['id']; ?>&tbl=specification" class="ask"><img src="images/trash.png"></a></td>
                </tr>
				
	  <?php } ?>			
               
               
              </tbody>
            </table>
          </div>
        
		<div class="my-navigation">
			<div class="simple-pagination-first page-btn"></div>
			<div class="simple-pagination-previous page-btn"></div>
			<div class="simple-pagination-page-numbers page-btn"></div>
			<div class="simple-pagination-next page-btn"></div>
			<div class="simple-pagination-last page-btn"></div>
	</div>
	<div class="simple-pagination-page-x-of-x"></div>
	<div class="simple-pagination-showing-x-of-x"></div>


<div class="page-display">
		Display <select class="simple-pagination-items-per-page"></select> items per page.
	</div >
	<div class="page-display">
		Go directly to page <select class="simple-pagination-select-specific-page"></select>.
	</div>
</div>
 <script src="js/jquery-simple-pagination-plugin.js"></script>

<script>
(function($){

$('#first-container').simplePagination({
     items_per_page: 20
});

})(jQuery);
</script>
	
</div>	
        
        </div>
		
      </div>
    </div>
	
	<?php include 'footer.php' ?>
  </body>
</html>
<?php } ?>
