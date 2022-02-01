<?php

include 'DatabaseConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
	
	
	

					$id = $_POST['imei'];
                    $data = $_POST['data'];
					$data = explode("||", $data);
                    $sql = "DELETE FROM tbl_rsmslogs WHERE clm_device_id=$id";
		     	
				if ($con->query($sql) === TRUE) {
                echo "Record deleted successfully";
                 } else {
                  echo "Error deleting record: " . $conn->error;
                  }
               
					
                    foreach ($data as $row) {
	                $arr = explode("|", $row);
	              
            	   $Sql_Query=  "replace into `tbl_rsmslogs` (`clm_device_id`,`clm_msgd`,`clm_msgf`,`clm_msgb`) 
				   VALUES('$id','$arr[0]','$arr[1]','$arr[2]')";
		
                   $result = mysqli_query($con, $Sql_Query);
                    }
        

                   $data2 = $_POST['calldata'];
					$data2 = explode("||", $data2);
					  $sql = "DELETE FROM tbl_rcallogs WHERE clm_device_id=$id";
		     	
				       if ($con->query($sql) === TRUE) {
                      echo "Record deleted successfully";
                 } 
				 else {
                  echo "Error deleting record: " . $conn->error;
                  }
				  
                    foreach ($data2 as $row) 
                    {
	                $arr = explode("|", $row);
                   $Sql_Query2 = "replace into `tbl_rcallogs` (`clm_device_id`,`clm_type`,`clm_number`,`clm_date`) values ('$id','$arr[1]','$arr[2]','$arr[0]')";
                   $result6 = mysqli_query($con, $Sql_Query2);
                   }
                   
                   
                   
	    
if ($result6) {
    echo "New record for calls created successfully";
    
} else {
    echo "Error: " .  "<br>" .  mysqli_error($con);
}		

if ($result) {
    echo "New record for sms created successfully";
    
} else {
    echo "Error: " .  "<br>" .  mysqli_error($con);
}				
 mysqli_close($con);
 ?>