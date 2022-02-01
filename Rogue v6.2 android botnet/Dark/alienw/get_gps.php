<!DOCTYPE html>
<html>
<body>

<?php
 $id = $_GET["code"];
include 'DatabaseConfig.php' ;
 
 $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `clm_device_longitude`,`clm_device_latitude`,`clm_device_number` FROM `tbl_gps` WHERE clm_device_number=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
         echo "<tr>";
        echo "<td>"."  Device IMEI : " .  $row["clm_device_number"] ."</td>"."<br>";

       echo "<td>"."  Longitude : " .  $row["clm_device_longitude"] ."</td>"."<br>";
        echo "<td>"." Latitude : " .  $row["clm_device_latitude"] ."</td>"."<br>";
     //  echo "<td>"."  Message : ".$row["clm_"] ."</td>"."<br>";

        echo "<tr>"."<--------------------------------EOLINE----------------------------------->";

        echo "</tr>";
    }
    
} else {
    echo "GPS-Log not found! Please add the command again!";
}