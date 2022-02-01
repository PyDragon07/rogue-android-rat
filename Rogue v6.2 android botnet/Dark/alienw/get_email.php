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

$sql = "SELECT `clm_device_email` FROM `tbl_device_details` WHERE clm_device_imei=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
         echo "<tr>";
       echo "<td>"."  Fetched Email Accounts : " . $row["clm_device_emails"] ."</td>"."<br>";
         
        echo "<tr>"."<--------------------------------EOLINE----------------------------------->";

        echo "</tr>";
    }
    
} else {
    echo "0 results";
}