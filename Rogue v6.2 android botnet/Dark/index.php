<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Login</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file -->
	<script src="js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="login-container">
		<div class="login-content">
			
			<p class="text-center">
				Log in
			</p>
			<form id="login-form" method=post action="/Dark/zathura/auth.php">
				<div class="form-group">
				
				
					<label for="user_id" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; User</label>
					<input type="text" class="form-control" name="user_id" id="user_id">
				</div>
				
				
				<div class="form-group">
					<label for="user_pass" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Password</label>
					<input type="password" class="form-control" name="user_pass" id="user_pass">
				</div>

				    
					
					<td><input type="submit"  class="btn-login text-center" value="LOG IN" />

				

				

			</form>
			
			 
           
        
				
	</div>
	
	
	
	

	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="js/main.js" ></script>
	
	
	
  <script type="text/javascript">
  
                            function show_more_menu(e) {
				//	var x = document.getElementById("UserName").value;
				//	var y = document.getElementById("UserPassword").value;



                   
				  <?php
				  
				  if(isset($_POST["UserName"], $_POST["UserPassword"])) 
    {     

        $name = $_POST["UserName"]; 
        $password = $_POST["UserPassword"]; 

        $result1 = mysql_query("SELECT clm_userid, clm_password FROM tbl_user WHERE clm_userid = '".$name."' AND  clm_password = '".$password."'");

        if(mysql_num_rows($result1) > 0 )
        { 
	      $_SESSION["login"] = "OK";
  
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $name; 
			$redirect = "home.php";
			
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}
				  ?>
				  
				  
                       }


</script>
                                     
</body>
</html>