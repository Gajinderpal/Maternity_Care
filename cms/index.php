<?php
   if(isset($_GET['id']))
   {
     $id = $_GET['id'];
   }
   else
   {
      $id = 0;
   }
?>
<?php include '_head.php' ?>

  <body style="background:url(images/bg.jpg); background-size:cover;">

    

    <div class="container-fluid">
      <div class="row">
       
        <div class="col-md-4 col-md-offset-4">
           <!--<div class="logo-main" style="margin:30px 0; text-align:center;">
             <img src="../images/logo2.png">
           </div>-->
        
	<?php if($id == 2) { ?>	
		<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Both Fields are required <a href="#" class="alert-link"></a>.
                            </div>
			<?php } ?>	
            
            <?php if($id == 1) { ?>	
		<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Incorrect Username and Password <a href="#" class="alert-link"></a>.
                            </div>
			<?php } ?>				
		
                <div class="login-panel panel panel-default">
				
				   <div class="main-heading center"><h4>Sign in</h4></div>			
                    <div class="panel-heading">
                        <div class="center"><img src="images/logo.png"></div>
                        
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login-script.php" method="post"  id="formID" class="formular">
                            
                                <div class="form-group">
                                    <input class="form-control cont1 validate[required]" placeholder="Username" name="user" type="text" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control cont1 validate[required]" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <!--<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>-->
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="center"><button type="submit" class="btn2">Login</button></div>
                            
                        </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
