<?php
include 'error/manage.php';
if(isset($_GET['id']))
{
$id = $_GET['id'];
}
else
{
 $id = 0;
}
$sql = "select * from hospital where id = $id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);

$sql2 = "select births_per_year, cesarean_section_rate, vaginal_birth_rate, induction_rate, tear_rate from hospital where id = $id";
$res2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($res2);

			    
				 $php_data_array[] = $row2;
				 
				  json_encode($php_data_array);
				 echo "<script> var my_2d = ".json_encode($php_data_array)." </script>";
				 
				 $dataPoints = array(
	array("label"=> "Births Per Year", "y"=> $row['births_per_year']),
	array("label"=> "Cesarean Section Rate", "y"=> $row['cesarean_section_rate']),
	array("label"=> "Vaginal Birth Rate", "y"=> $row['vaginal_birth_rate']),
	array("label"=> "Induction Rate", "y"=> $row['induction_rate']),
	array("label"=> "Tear Rate", "y"=> $row['tear_rate'])
);
			   ?>   
<?php include '_head.php' ?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Maternity Data"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: ",##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

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
  <div class="banner"></div>
  
   <div class="breadcrum">
   <div class="container">
     <ul>
       <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
       <li>&raquo;</li>
       <li><?php echo $row['name']; ?></li>
     </ul>
    </div>
   </div>
  
  <main id="main">

   <!--==========================
      Span1 Section
    ============================-->
    
    <div class="span1 page">
      <div class="container">
         <div class="row">
           <div class="col-12 col-md-6">
             <div class="prod_img">
               <img src="images/hospital/<?php echo $row['img']; ?>">
             </div>
           </div>
           <div class="col-12 col-md-6 abt">
           
           
             
             <div class="prod_desc">
               <h3><?php echo $row['name']; ?></h3>
               
               <div id="chartContainer" style="height: 370px; width: 100%;"></div>
               
               
               <?php /*?><ul>
                 <li><?php echo $row['city']; ?></li>
                 <li><?php 
				     $area = $row['area']; 
                     $sql2 = "select * from area where id = $area";
					 $res2 = mysqli_query($con, $sql2);
					 $row2 = mysqli_fetch_array($res2);
					 echo $row2['area'];
					 ?>
                 </li>
                 <li><?php echo $row['address']; ?></li>
               </ul><?php */?>
               <div class="address"><i class="fa fa-map-marker"></i> <?php echo $row['address']; ?></div>
               <?php echo $row['content']; ?>
               
             </div> 
             
             
              
                                           
            
           </div>
         </div>
         
         <div class="row">
            <div class="col-12">
              
    <ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Client's Reviews</li>
		<li class="tab-link" data-tab="tab-2">Write Review</li>
		
	</ul>
    
      <div id="tab-1" class="tab-pane tab-content current">
      <?php 
	   $sql3 = "select * from review where status = 1 && hid = '$id'";
	   $res3 = mysqli_query($con, $sql3);
	   while($row3 = mysqli_fetch_array($res3))
	   {
	  ?>
      <div class="review">
        <h4><?php echo $row3['name']; ?></h4>
        <?php /*?><?php 
		   if($row3['stars'] == 1)
		   {
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
       <?php } 
	    elseif($row3['stars'] == 2)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		  elseif($row3['stars'] == 3)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		 elseif($row3['stars'] == 4)
		 {
		 ?>
          <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
        </div>
         <?php
		 }
		 else
		 {
		 ?>
         <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
        </div>
         <?php
		 }
	   ?><?php */?>
       
       <?php echo $row3['comment']; ?>
       
       <h6>Delivery Type</h6>
         <?php 
		   if($row3['delivery'] == 1)
		   {
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
       <?php } 
	    elseif($row3['delivery'] == 2)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		  elseif($row3['delivery'] == 3)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		 elseif($row3['delivery'] == 4)
		 {
		 ?>
          <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
        </div>
         <?php
		 }
		 else
		 {
		 ?>
         <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
        </div>
         <?php
		 }
	   ?>
       
       
       <h6>Cost Friendly</h6>
         <?php 
		   if($row3['cost_friendly'] == 1)
		   {
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
       <?php } 
	    elseif($row3['cost_friendly'] == 2)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		  elseif($row3['cost_friendly'] == 3)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		 elseif($row3['cost_friendly'] == 4)
		 {
		 ?>
          <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
        </div>
         <?php
		 }
		 else
		 {
		 ?>
         <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
        </div>
         <?php
		 }
	   ?>
       
       
       <h6>Professionalism</h6>
         <?php 
		   if($row3['professionalism'] == 1)
		   {
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
       <?php } 
	    elseif($row3['professionalism'] == 2)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		  elseif($row3['professionalism'] == 3)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		 elseif($row3['professionalism'] == 4)
		 {
		 ?>
          <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
        </div>
         <?php
		 }
		 else
		 {
		 ?>
         <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
        </div>
         <?php
		 }
	   ?>
       
       
       <h6>Cleanliness</h6>
         <?php 
		   if($row3['cleanliness'] == 1)
		   {
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
       <?php } 
	    elseif($row3['cleanliness'] == 2)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		  elseif($row3['cleanliness'] == 3)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		 elseif($row3['cleanliness'] == 4)
		 {
		 ?>
          <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
        </div>
         <?php
		 }
		 else
		 {
		 ?>
         <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
        </div>
         <?php
		 }
	   ?>
       
       
              <?php /*?><h6>Comment</h6>
         <?php 
		   if($row3['comment_review'] == 1)
		   {
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
       <?php } 
	    elseif($row3['comment_review'] == 2)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		  elseif($row3['comment_review'] == 3)
		{
		?>
        <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
         <i class="fa fa-star-o"></i>
        </div>
        <?php
		}
		 elseif($row3['comment_review'] == 4)
		 {
		 ?>
          <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
        </div>
         <?php
		 }
		 else
		 {
		 ?>
         <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
        </div>
         <?php
		 }
	   ?><?php */?>
       
        </div>
        
        <?php } ?>
        
        
        
      </div>
      
      <div id="tab-2" class="tab-content tab-pane">
        <form action="reviewadd.php?id=<?php echo $id; ?>" method="post" class="cmxform" id="commentForm" novalidate="novalidate">
                
                 <div class="row">
                 
                        <input type="hidden" value="<?php echo $id; ?>" name="hid">
				        <div class="col-12 col-md-6">
                             <label>Full Name*</label>
                             <div class="input"><input type="text" name="name" class="form-control cont" required="" placeholder="Your Name*"></div>
                         </div> 

						 

						<div class="col-12 col-md-6 pd15">
                           <label>Email*</label>
                           <div class="input"><input type="email" name="email" class="form-control cont" required="" placeholder="Email Address*"></div>
                        </div>
                        
                        <div class="col-12 col-md-6 pd15">
                           <div class="input">
                           <label>Delivery Type (Star Rating)</label>
                             <select name="delivery" class="form-control cont">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                             </select>
                           </div>
                        </div>
                        
                        
                        <div class="col-12 col-md-6 pd15">
                           <div class="input">
                           <label>Cost Friendly (Star Rating)</label>
                             <select name="cost_friendly" class="form-control cont">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                             </select>
                           </div>
                        </div>
                        
                        
                        <div class="col-12 col-md-6 pd15">
                           <div class="input">
                           <label>Professionalism (Star Rating)</label>
                             <select name="professionalism" class="form-control cont">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                             </select>
                           </div>
                        </div>
                        
                        <!--<div class="col-12 col-md-6 pd15">
                           <div class="input">
                           <label>Comment (Star Rating)</label>
                             <select name="comment_review" class="form-control cont">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                             </select>
                           </div>
                        </div>-->
                        
                        
                        <div class="col-12 col-md-6 pd15">
                           <div class="input">
                           <label>Cleanliness (Star Rating)</label>
                             <select name="cleanliness" class="form-control cont">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                             </select>
                           </div>
                        </div>
                        

						  <div class="col-12 col-md-12 pd15">   
                             <label>Comment</label>
                            <div class="input"><textarea name="comment" class="form-control cont" style="height:130px; resize:none;" placeholder="Comment"></textarea></div>
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
  <script src="js/canvasjs.min.js"></script>
  <script>
     $(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
  </script>
  <!-- NVD3 chart -->
   

 
</body>
</html>
