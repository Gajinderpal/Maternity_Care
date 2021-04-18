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

	 $sql = "select * from page";

	 $result = mysqli_query($con, $sql);

	 

   

   ?>

<?php include '_head.php' ?>



<style>

    #page

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

                       Page Successfully Added.

               </div>

							

		<?php } ?>

		

		

		<?php 

		    if($id == 2)

			{

			   ?>

			   <div class="alert alert-success alert-dismissable">

                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                       Page Updated.

               </div>

							

		<?php } ?>

		

		<?php 

		    if($id == 3)

			{

			   ?>

			   <div class="alert alert-danger alert-dismissable">

                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                       Page Name Already Exists.

               </div>

							

		<?php } ?>

        

        <div class="bg"> 

          <h2 class="sub-header">All Pages</h2><div class="newpage"><a href="pageadd.php">Add Page</a></div>

		  

		  <div id="first-container">    

          <div class="table-responsive">

            <table class="table table-striped" id="rounded-corner">

              <thead>

			  

			  

                <tr>

                  

                  <th>Page Name</th>

                  <th>Page Title</th>

                  <th>Edit </th>

                  <th>Delete</th>

                </tr>

              </thead>

              <tbody>

			  

			  <?php

			      while($row = mysqli_fetch_array($result))

				  {

			  ?>

                <tr>

                  

                  <td><?php echo $row['page']; ?></td>

                  <td><?php echo $row['title']; ?></td>

                  <td><a href="pageEdit.php?id=<?php echo $row['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>

                  <td><a href="delete.php?row=<?php echo $row['id']; ?>&tbl=page" class="ask" title="Delete"><img src="images/trash.png"></a></td>

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

	

	<?php include 'footer.php' ?>

  </body>

</html>

<?php } ?>

