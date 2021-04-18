<?php
    include 'error/manage.php';
	$sql = "select * from page where id = 10";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);	
	
	$query = "select * from hospital";
	$result23 = mysqli_query($con, $query);
	$rows = mysqli_fetch_array($result23);
?>
<?php include '_head.php' ?>
<style>
  #home a
  {
   color:#f95259;
  }
  #home:after
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
  <?php include 'slider.php' ?>

  <main id="main">

   <!--==========================
      Span1 Section
    ============================-->
    
    <div class="span1">
      <div class="container">
         <div class="span11">
         <form action="search.php" method="post">
           <div class="row">
             <?php /*?><div class="col-12 col-md-4 col-lg-5">
              <label>Hospital Name*</label>
              <select name="name" class="form-control" required>
                <option value="">--- Hospital Name ---</option>
                <?php 
					  $sql3 = "select * from hospital order by name";
					  $result3 = mysqli_query($con, $sql3);
					  while ($row3 = mysqli_fetch_array($result3))
					  {
					?>
					<option value="<?php echo $row3['id']; ?>"><?php echo $row3['name']; ?></option>
					
					<?php } ?>
              </select>
             </div><?php */?>
             
             <div class="col-12 col-md-4 col-lg-5">
              <label>Search State*</label>
              <select name="area" class="form-control" required id="country">
                <option value="">--- Select State ---</option>
                <?php 
					  $sql2 = "select * from area";
					  $result2 = mysqli_query($con, $sql2);
					  while ($row2 = mysqli_fetch_array($result2))
					  {
					?>
					<option value="<?php echo $row2['id']; ?>"><?php echo $row2['area']; ?></option>
					
					<?php } ?>
              </select>
             </div>
             
             <div class="col-12 col-md-4 col-lg-5">
                 <label>Region</label>  
             <select id="state" name="region" required class="form-control">
                <option value="">Select Area first</option>
            </select>
          </div>
             
             <?php /*?><div class="col-12 col-md-4 col-lg-5">
              <label>Region</label>
              <select name="name" class="form-control" required>
                <option value="">--- Select Region ---</option>
                <?php 
					  $sql3 = "select * from region order by name";
					  $result3 = mysqli_query($con, $sql3);
					  while ($row3 = mysqli_fetch_array($result3))
					  {
					?>
					<option value="<?php echo $row3['id']; ?>"><?php echo $row3['name']; ?></option>
					
					<?php } ?>
              </select>
             </div><?php */?>
             
             <div class="col-12 col-md-4 col-lg-2">
               <button type="submit" class="search_btn"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
             </div>
             
           </div>
         </form>
         </div>
         
         <div class="mrg100"></div>
         
     <div class="row">
           <div class="col-12 col-md-6">
             <div class="box1_img"><a href="#"><img src="img/map.png"></a></div>
           </div>
           <div class="col-12 col-md-6 abt">
             <div class="heading">
              <h2>Good Health <br> Moves Us Forward</h2>
              <div class="line"></div>
             </div>
             <?php echo $row['content']; ?>
             <a href="#" class="btn2">Read More</a>
           </div>
         </div>
         
         
         
      </div>
    </div>
    
    <!--==========================
      parallex
    ============================-->
    
    

    <!--==========================
      About span2
    ============================-->
    
       <div class="span2">
         <div class="container">
          <div class="heading text-center">
            <h2>Top Hospitals</h2>
            <div class="line"></div>
          </div>
            
               <div class="services-carousel owl-carousel">
					<?php 
					  $sql8 = "select * from hospital";
					  $result8 = mysqli_query($con, $sql8);
					  while ($row8 = mysqli_fetch_array($result8))
					  {
					?>
                  <a class="box2">
                     <div class="list_item">
                       <img src="img/hos1.jpeg">
                       <div class="listing_item_content">
                         <span class="tag">Top Hospital</span>
                         <h3> <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
                         <span><?php echo $row8['name']; ?></span>
						 <span><?php echo $row8['address']; ?></span>
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
					   <?php } ?>
					
                  </a>
                  
                  
                               
            </div>
         </div>
       </div>
     
       
    <!--==========================
      span3 Section
    ============================-->
       
       <div class="span3">
         <div class="container-fluid p-0">
           <div class="row no-gutters">
             <div class="col-12 col-md-6 span31" style="background-image:url(img/h1-img-1.jpg);"></div>
             <div class="col-12 col-md-6 span32">
               <div class="box3">
                 <h2>Best Laboratory <br>Analysis Available</h2>
                 <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat duis autem vel eum iriure augue duis dolore.</p>
                 <a href="#" class="btn2">Read More</a>
               </div>
             </div>
           </div>
         </div>
       </div>
    
      
        
    

    <!--==========================
     span4 Section
    ============================-->
    
    
     <!--==========================
     span5 Section
    ============================-->
    
    <div class="span5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
             <div class="heading text-center"><h2>Testimonials</h2> <div class="line"></div></div>
             <?php 
					  $sql7 = "select * from review";
					  $result7 = mysqli_query($con, $sql7);
					  while ($row7 = mysqli_fetch_array($result7))
					  {
					?>
					
					
					
             
             <div class="owl-carousel testimonials-carousel">
             
             <div class="testi text-center">
                <div class="testi_txt">
                  <p><?php echo $row7['comment']; ?></p>
                </div>
                <h6><?php echo $row7['name']; ?></h6>
             </div>
             <?php } ?>
             <!--<div class="testi text-center">
                <div class="testi_txt">
                  <p>Hi again, I was thrilled that our pool won a GOLD MEDAL in the Swimming Pool Guild photographic competition for pools uner $50k!</p>
                </div>
                <h6>L - North Auckland</h6>
             </div>
             
             
             <div class="testi text-center">
                <div class="testi_txt">
                  <p>You built our pool back in 1976 and I must tell you it's still going strong. I really thankful to you for this.</p>
                </div>
                <h6>Valet service. - L</h6>
             </div>-->
             
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
 <script>
$(document).ready(function(){
    $('#country').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'area='+countryID,
                success:function(html){
                    $('#state').html(html);
                   
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Area first</option>');
            
        }
    });
    
});
</script>
 
</body>
</html>
