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
	 $sql = "select * from page LIMIT 10";
	 $result = mysqli_query($con, $sql);
	 
   
   ?>
<?php include '_head.php' ?>

<style>
    #home
	{
	 background: linear-gradient(60deg, #B24592, #F15F79);
     color:#fff;
	}
</style>

<style type="text/css">
${demo.css}
</style>


  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script>
      var map;
      function initialize() {
	  
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: new google.maps.LatLng(-36.8865, 174.796810),
         scrollwheel: false,
		 
		});
		
		var marker = new google.maps.Marker({
          position: new google.maps.LatLng(-36.8861, 174.7975),
          map: map,
          title: 'The Commerce Club Auckland'
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRdmwYnpms0w3UtjmiDYUF3hi7eClsjvg&callback=initialize">
    </script>
    
    
     <?php include 'header.php' ?>
    
    <div class="container-fluid">
      
      <div class="row">
        <?php include 'sidebar.php' ?>
        <div class="col-sm-8  col-md-10 pd0 new-main">
        
        <div class="main">
        
          <h1 class="page-header">Dashboard</h1>

          
        
        
        <div class="bg">
          <h2 class="sub-header">All Pages</h2>
          
          <div class="table-responsive">
            <table class="table table-striped">
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
          </div>
          </div>
          
          
        </div>
      </div>
    </div>
	<?php include 'footer.php' ?>
	
  </body>
</html>
<?php } ?>
