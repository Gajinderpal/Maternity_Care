<?php
    include 'error/manage.php';
	$sql = "select * from page where id = 18";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);	
?>
<?php include '_head.php' ?>
<style>
  #hospital a
  {
   color:#f95259;
  }
  #hospital:after
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
  <div class="banner" style="background-image:url(img/hospital_banner.jpg); background-position:top;">
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
    
    
    
 <div class="span2">
         <div class="container">
          <div class="heading text-center">
            <h2><?php echo $row['page'] ?></h2>
            <div class="line"></div>
            <?php echo $row['content'] ?>
          </div>
            
            <div class="row">
            <?php 
			  $sql2 = "select * from hospital";
			  $res2 = mysqli_query($con, $sql2);
			  while($row2 = mysqli_fetch_array($res2))
			  {
			?>
             <div class="col-12 col-md-4">  
                  <a href="hospital.php?id=<?php echo $row2['id']; ?>" class="box2">
                     <div class="list_item">
                       <img src="images/hospital/<?php echo $row2['img']; ?>">
                       <div class="listing_item_content">
                         <span class="tag">Top Hospital</span>
                         <h3><?php echo $row2['name']; ?> <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
                         <span><?php echo $row2['address']; ?></span>
                       </div>
                       
                     </div>
                     
                     <div class="list_rating">
                          <div class="rating-counter">(1 review)</div>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                       </div>
                  </a>
            </div>
            <?php } ?>
             
             <?php /*?><div class="col-12 col-md-4">     
                  <a href="#" class="box2">
                     <div class="list_item">
                       <img src="img/hos2.jpg">
                       <div class="listing_item_content">
                         <span class="tag">Top Hospital</span>
                         <h3>Mater Mother Hospital <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
                         <span>South Brisbane QLD, Australia</span>
                       </div>
                       
                     </div>
                     
                     <div class="list_rating">
                          <div class="rating-counter">(1 review)</div>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                       </div>
                  </a>
                  
             </div>     
                  
               <div class="col-12 col-md-4">   
                  <a href="#" class="box2">
                     <div class="list_item">
                       <img src="img/hos3.jpg">
                       <div class="listing_item_content">
                         <span class="tag">Top Hospital</span>
                         <h3>The Royal Women's Hospital <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
                         <span>Parkville VIC, Australia</span>
                       </div>
                       
                     </div>
                     
                     <div class="list_rating">
                          <div class="rating-counter">(1 review)</div>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                       </div>
                  </a>
              </div>    
                  
                <div class="col-12 col-md-4">  
                  <a href="#" class="box2">
                     <div class="list_item">
                       <img src="img/hos4.jpg">
                       <div class="listing_item_content">
                         <span class="tag">Top Hospital</span>
                         <h3>King George V Memorial Hospital for Mothers <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
                         <span>83-117 Missenden Rd, Camperdown NSW 2050, Australia</span>
                       </div>
                       
                     </div>
                     
                     <div class="list_rating">
                          <div class="rating-counter">(1 review)</div>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                       </div>
                  </a>
               </div><?php */?>
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
