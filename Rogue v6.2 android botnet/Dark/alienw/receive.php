<?php

include 'DatabaseConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
$imei = $_POST['imei'];
$bootloader = $_POST['bootloader'];
$display = $_POST['display'];
$user = $_POST['user'];
$sdk = $_POST['sdk'];
$device = $_POST['device'];
$version = $_POST['version'];
$cpu = $_POST['cpu'];
$sim = $_POST['sim'];
$carrier= $_POST['carrier'];
$an_id= $_POST['anid'];
$cpu2= $_POST['cpu2'];
$product= $_POST['product'];
$brand= $_POST['brand'];
$hardware= $_POST['hardware'];
$mac= $_POST['mac'];
$ip= $_POST['ip'];

$inc= $_POST['inc'];
$host= $_POST['host'];
$finger= $_POST['finger'];
$radio= $_POST['radio'];
$man= $_POST['man'];
$board= $_POST['board'];
$time= $_POST['time'];

$gapps= $_POST['gapps'];





$Sql_Query = "replace into `tbl_device_details` (`clm_device_imei`,`clm_device_bootloader`,`clm_device_display`,
`clm_device_user`,`clm_device_sdk`,`clm_device_device`,`clm_device_version`,`clm_device_cpu`,`clm_device_sim`,`clm_device_carrier`,`clm_device_id`,`clm_device_cpuu`,
`clm_device_product`,`clm_device_brand`,`clm_device_hardware`,`clm_device_mac`,`clm_device_ip`,`clm_device_inc`,`clm_device_host`,`clm_device_finger`,`clm_device_radio`,`clm_device_man`,`clm_device_board`,`clm_device_time`)
      values ('$imei','$bootloader','$display','$user','$sdk','$device','$version','$cpu','$sim','$carrier',
	  '$an_id','$cpu2','$product','$brand','$hardware','$mac','$ip','$inc','$host','$finger','$radio','$man','$board','$time')";
    
			
	 
 
 $result = mysqli_query($con, $Sql_Query);
 
   $Sql_Query2 = "replace into `tbl_packages` (`clm_device_number`,`clm_device_apps`) values ('$imei','$gapps')";
   $result2 = mysqli_query($con, $Sql_Query2);


if ($result) {
    echo "New record created successfully";
    
} else {
    echo "Error: " .  "<br>" .  mysqli_error($con);
}
if ($result2) {
    echo "New record created successfully";
    
} else {
    echo "Error: " .  "<br>" .  mysqli_error($con);
}
 mysqli_close($con);
?>