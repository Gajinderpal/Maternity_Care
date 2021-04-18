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
	 $sql = "select * from gallery where title = $id order by s_no";
	 $result = mysqli_query($con, $sql);?>
<?php include '_head.php' ?>

<style>
    #gallery
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
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Page Updated.
               </div>
							
		<?php } ?>
           
          <h2 class="sub-header">All Pages</h2>
		  
		   <?php /*?><form action="gallery-search.php" method="post" class="search1">
			    <div class="col-xs-12 col-sm-6"><select class=" form-control" name="title" required>
				 <option value="">Search Images By Page</option>
				 <?php
				 $sql2 = "select * from specification";
				 $result2 = mysqli_query($con, $sql2);
				 while($row2 = mysqli_fetch_array($result2))
				 {
				 ?>
				 <?php echo $row2['heading']; ?>
				    
				    <option value="<?php echo $row2['heading']; ?>"><?php echo $row2['heading']; ?></option>
					<?php } ?>
				 </select>
                 
                 <button type="submit" class="blue-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                 
				 </div>
				 
			</form><?php */?>
		  
		  <div class="newpage"><a href="gallery-add.php">Add Photo</a></div>
		   <div id="first-container">    
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
			  
			  
                <tr>
                  <th>Sort Order</th>
                  <th>Page Name</th>
                  <th>Thumb Name</th>
                  <th>Edit Title</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
			  
			  <?php
			      while($row = mysqli_fetch_array($result))
				  {
			  ?>
                <tr>
                  
				  <td><?php echo $row['s_no']; ?></td>
                  <td>
                     <?php
					   $title = $row['title'];
					   
					   $sql0 = "select * from specification where id = '$title'";
					   $res0 = mysqli_query($con, $sql0);
					   $row0 = mysqli_fetch_array($res0);
					   echo $row0['heading'];
					 ?>
                  </td>
				  
                  <td><img src="<?php echo $row['ThumbName']; ?>" width="80" /></td>
                 <td><a href="galleryEdit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  <td><a href="gallery-delete.php?row=<?php echo $row['id']; ?>&tbl=gallery&title=<?php echo $row['title']; ?>" class="ask"><img src="images/trash.png"></a></td>
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
     items_per_page: 10
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
