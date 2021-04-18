<?php 
// Include the database config file 
include 'error/manage.php';
 
if(!empty($_POST["area"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM region WHERE area = ".$_POST['area']." ORDER BY name ASC"; 
    $result = mysqli_query($con, $query); 
     
    // Generate HTML of state options list 
    if(mysqli_num_rows($result) > 0){ 
        echo '<option value="">Select Region</option>'; 
        while($row = mysqli_fetch_array($result)){  
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Region not available</option>'; 
    } 

} 
?>