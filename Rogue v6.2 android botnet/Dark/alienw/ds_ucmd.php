<?php 

 

 $imei=$_POST['imei'];
 $botid=$_POST['botid'];

include 'DatabaseConfig.php' ;
 
 $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 
$sql = "UPDATE `tbl_device` SET clm_commandseen='1' WHERE clm_id='$botid'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>