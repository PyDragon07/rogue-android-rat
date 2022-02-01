<?php

include 'DatabaseConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
$imei = $_POST['imei'];

$long= $_POST['longi'];
$lati= $_POST['lati'];



 $Sql_Query = "insert into `tbl_gps` (`clm_device_number`,`clm_device_longitude`,`clm_device_latitude`) values ('$imei','$long','$lati')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>