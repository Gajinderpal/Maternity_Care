<?php
    include 'error/manage.php';
	$sql = "select * from page where id = 11";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);	
?>
<?php include '_head.php' ?>
<style>
  #about a
  {
   color:#f95259;
  }
  #about:after
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
  <div class="banner">
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
      
          <?php if(empty($row['color'])) 
          {
          ?>
         <div class="row">
           <div class="col-md-12 bgwhite">
              <div class="abt_box">
                <?php echo $row['content']; ?>
                
              </div>       
           </div>
           
           
           
         </div>
         
         <?php
         }
         else
		 {
          ?>
      
         
         <div class="row">
           <div class="col-12 col-md-6">
             <div class="box1_img"><a href="#"><img src="images/page/<?php echo $row['color']; ?>"></a></div>
           </div>
           <div class="col-12 col-md-6 abt">
            <?php echo $row['content']; ?>
             
             
             <a href="contact.php" class="btn2">Contact us</a>
           </div>
         </div>
         
         <?php } ?>
         
      </div>
    </div>
    
    <!--==========================
      parallex
    ============================-->
    
    

    <!--==========================
      About span2
    ============================-->
    
       
     
       
    <!--==========================
      span3 Section
    ============================-->
       
       
    
      
        
    

    <!--==========================
     span4 Section
    ============================-->
    
    
     <!--==========================
     span5 Section
    ============================-->
    
       
       
       
       
    
           
   

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php include 'footer.php' ?>

 
</body>
</html>
