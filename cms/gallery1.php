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
	 $sql = "select * from gallery";
	 $result = mysqli_query($con, $sql);
	 
   
   ?>
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
        
        <div class="row">   
         <div class="col-xs-12 col-sm-3"> <h2 class="sub-header">All Pages</h2> </div>
		  
          <div class="col-xs-12 col-sm-6">
		   &nbsp;
          </div>
		  
		  <div class="col-xs-12 col-sm-3"><div class="newpage"><a href="gallery-add.php">Add Photo</a></div></div>
      </div>       
             <div class="row mrg30">
             <?php
			      
					   
					   
					   $sql0 = "select * from specification order by heading";
					   $res0 = mysqli_query($con, $sql0);
					  while($row0 = mysqli_fetch_array($res0))
					  {
					      $title1 = $row0['id'];
					      $sql1 = "select * from gallery where title = $title1";
						  $res1 = mysqli_query($con, $sql1);
						  $num_row = mysqli_num_rows($res1);
                       
					  ?>
                      <div class="col-xs-12 col-sm-4 col-md-3 center">
					    <div class="gal-folder"><a href="gallery.php?id=<?php echo $row0['id']; ?>"><img src="images/Folder.ico"> <br><?php echo $row0['heading']; ?> (<?php echo $num_row; ?>)</a></div>
                      </div>
                      <?php 
					  }
					 ?>
			
                <div class="col-xs-12 col-sm-4">
                   
                </div>
             </div>
          
		   <?php /*?><div id="first-container">    
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
			  
			  
                <tr>
                  
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
                  
				  
                  <td>
                     <?php
					   $title = $row['title'];
					   
					   $sql0 = "select * from specification where id = '$title'";
					   $res0 = mysqli_query($con, $sql0);
					   $row0 = mysqli_fetch_array($res0);
					   echo $row0['heading'];
					 ?>
                  </td>
				  
                  <td><img src="<?php echo $row['ThumbName']; ?>" width="150" /></td>
                 <td><a href="galleryEdit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                  <td><a href="delete.php?row=<?php echo $row['id']; ?>&tbl=gallery" class="ask"><img src="images/trash.png"></a></td>
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
</div><?php */?>


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
