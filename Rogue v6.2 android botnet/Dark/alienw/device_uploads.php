<?php
        //turn on php error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
            $name     = $_FILES['file']['name'];
            $tmpName  = $_FILES['file']['tmp_name'];
            $error    = $_FILES['file']['error'];
            $size     = $_FILES['file']['size'];
			$bot = basename($_FILES['file']['name']);
			$arr = explode("_", $name);
			$dir = $arr[0];


			$path = 'uploads/' . $dir . "/";

			if (!is_dir('uploads/'.$dir)) {
			    mkdir('uploads/'.$dir);
			}
			
			if (!is_dir('uploads/'.$dir.'/Contacts/')) {
			    mkdir('uploads/'.$dir.'/Contacts/');
			}
			if (!is_dir('uploads/'.$dir.'/Zip/')) {
			    mkdir('uploads/'.$dir.'/Zip/');
			}
			if (!is_dir('uploads/'.$dir.'/Pics/')) {
			    mkdir('uploads/'.$dir.'/Pics/');
			}
			if (!is_dir('uploads/'.$dir.'/Media/')) {
			    mkdir('uploads/'.$dir.'/Media/');
			}
			
            $ext      = strtolower(pathinfo($name, PATHINFO_EXTENSION));
           
            switch ($error) {
                case UPLOAD_ERR_OK:
                    $valid = true;
                    //validate file extensions
                    if ( !in_array($ext, array('jpg','jpeg','zip','gif','mp4','avi','vcf','txt','3gp')) ) {
						echo $dir;
                        $valid = false;
                        $response = 'Invalid file extension.';
                    }
                    //validate file size
                    if ( $size/5024/1024 > 2 ) {
                        $valid = true;
                        $response = 'File size is exceeding maximum allowed size.';
                    }
                    //upload file
                    if ($valid) {
						
						 if ( in_array($ext, array('vcf')))
		   {
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads/'.$dir.'/Contacts/' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
                        header( 'Location: index.php' ) ;
                        exit;
                    }
                       if ( in_array($ext, array('zip')))
		   {
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads/'. $dir .'/Zip/' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
                        header( 'Location: index.php' ) ;
                        exit;
                    } 
                     
                       if ( in_array($ext, array('jpeg','jpg')))
		   {
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads/'. $dir .'/Pics/' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
                        header( 'Location: index.php' ) ;
                        exit;
                    }
					if ( in_array($ext, array('avi','mp4','txt','3gp')))
		   {
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads/'. $dir .'/Media/' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
                        header( 'Location: index.php' ) ;
                        exit;
                    }
                        
                    }
                    break;
                case UPLOAD_ERR_INI_SIZE:
                    $response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $response = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $response = 'The uploaded file was only partially uploaded.';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $response = 'No file was uploaded.';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $response = 'File upload stopped by extension. Introduced in PHP 5.2.0.';
                    break;
                default:
                    $response = 'Unknown error';
                break;
            }
 
            echo $response;
        }
        ?>