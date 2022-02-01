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

$sql = "SELECT `clm_device_number`,`clm_device_apps` FROM `tbl_packages` WHERE clm_device_number=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
         echo "<tr>";
       echo "<td>"."  Device IMEI : " .  $row["clm_device_number"] ."</td>"."<br>";
        echo "<td>"." Installed Apps[Packages] : " .  $row["clm_device_apps"] ."</td>"."<br>";
     //  echo "<td>"."  Message : ".$row["clm_"] ."</td>"."<br>";

        echo "<tr>"."<--------------------------------EOLINE----------------------------------->";

        echo "</tr>";
    }
    
} else {
    echo "No App Packages found! Please add the command again!";
}