<?php 
if($_SERVER['HTTP_HOST'] == 'localhost') {
        define('DB_HOST', 'localhost');
		define('DB_USER', 'root');
		define('DB_PASSWORD', ''); 
		define('DB_DATABASE', 'hospital');
		
}
else
{
  
   define('DB_HOST', 'localhost');
		define('DB_USER', 'stealthm_carloan');
		define('DB_PASSWORD', 'EvKg*GKqfO.A'); 
		define('DB_DATABASE', 'stealthm_carloan');
}
   
   
?>