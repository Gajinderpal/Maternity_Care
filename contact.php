<?php
    include 'error/manage.php';
	$sql = "select * from page where id = 15";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);	
?>
<?php include '_head.php' ?>
<style>
  #contact a
  {
   color:#f95259;
  }
  #contact:after
  {
  opacity:1;
  }
  
</style>
<body>
  <!--==========================
    Header
  ============================-->
  <?php include 'header.php' ?>

  <!--==========================
    Slider Section
  ============================-->
  <div class="banner" style="background-image:url(img/contact_banner.jpg)">
     <div class="container">
        <div class="text-center">
          <h1><?php echo $row['page']; ?></h1>
        </div>
     </div>
   </div>

  <main id="main">

   <!--==========================
      Span1 Section
    ============================-->
    
    <div class="span1 page">
      <div class="container">
         
         <div class="row">
           <div class="col-12 col-md-4">
             <div class="con1">
             <h4>Contact Details</h4>
               <?php echo $row['content']; ?>
             </div>
           </div>
           <div class="col-12 col-md-8 abt">
             <div class="con2">
               <h4>Contact Form</h4>
               <?php /*?><?php 
		    if($id == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Message Successfully Submit.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       There was an error while submitting the form. Please try again later.
               </div>
							
		<?php } ?><?php */?>
               <form action="query.php" method="post" class="cmxform" id="commentForm" novalidate="novalidate">
                
                 <div class="row">

				        <div class="col-12 col-md-6 pd15">

							

                            <div class="input"><input type="text" name="name" class="form-control cont" required="" placeholder="Your Name*"></div>

						</div> 

						 <div class="col-12 col-md-6 pd15">

							

                            <div class="input"><input type="text" name="phone" class="form-control cont" required="" placeholder="Phone*"></div>
                           </div>

							

						<div class="col-12 col-md-12 pd15">
                           

                            <div class="input"><input type="email" name="email" class="form-control cont" required="" placeholder="Email Address*"></div>
                           </div>

						  <div class="col-12 col-md-12 pd15">

						 

                          <div class="input"><textarea name="content" class="form-control content" style="height:130px; resize:none;" placeholder="content"></textarea></div>
                          

						 </div> 
                         <div class="col-12 pd15"><input type="submit" class="btn2" name="submit" value="Submit Your Message"></div>
                      </div>
                     </form>
             </div>
           </div>
         </div>
         
      </div>
    </div>
    
   

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php include 'footer.php' ?>

 
</body>
</html>
