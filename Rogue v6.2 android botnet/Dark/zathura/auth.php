<?php  
 require('db_connect.php');
 session_start();


if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

$query = "SELECT * FROM `tbl_user` WHERE `clm_userid`='$username' and `clm_password`='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
  
	   $_SESSION["username"] = $username;
		 $_SESSION['user_id'] = $username;

		header("Location: home.php");




}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
		header("Location: index.php");

}
}
?>