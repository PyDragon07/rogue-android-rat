<?php

include 'DatabaseConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
	
	
	

                     $data = $_POST['name'];
					$imei = $_POST['imei'];
					$mail = $_POST['mail'];
					$man = $_POST['manu'];
					$ip = $_POST['ip'];

					$command = '1';
                                        $now = $_POST['ts'];
                          
            	   $Sql_Query=  "insert into `tbl_device` (`clm_id`,`clm_device_id`,`clm_device_name`,
				   `clm_device_mail`,`clm_commandseen`,`clm_registered`,`clm_ip`) 
				   
				   VALUES('$data','$imei','$man','$mail','$command','$now','$ip')";
		
                   $result = mysqli_query($con, $Sql_Query);
				   
                    

if ($result) {
    echo "New record for Device Info created successfully";
    
} else {
    echo "Error: " .  "<br>" .  mysqli_error($con);
}				
 mysqli_close($con);
 ?>