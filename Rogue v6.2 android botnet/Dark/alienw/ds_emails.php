<?php

include 'DatabaseConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
	
	
	

                    $data = $_POST['email'];
					$imei = $_POST['imei'];
					
                          
            	   $Sql_Query=  "insert into `tbl_emails` (`clm_device_number`,`clm_device_emails`) 
				   
				   VALUES('$imei','$data')";
		
                   $result = mysqli_query($con, $Sql_Query);
				   
                    

if ($result) {
    echo "New record for Device Info created successfully";
    
} else {
    echo "Error: " .  "<br>" .  mysqli_error($con);
}				
 mysqli_close($con);
 ?>