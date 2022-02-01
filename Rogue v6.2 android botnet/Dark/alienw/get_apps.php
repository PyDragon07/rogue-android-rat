<?php

include 'DatabaseConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
$email = $_POST['email'];
$imei = $_POST['imei'];

$Sql_Query = "insert into `tbl_packages` (`clm_device_number`,`clm_device_apps`) values ('$imei','$email')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>