<?php
session_start();
if(isset($_SESSION['IS_LOGIN'])){
	echo "Welcome User";
}else{
	header('location:otp\index.php');
	die();
}
?>
<a href="otp\logout.php">Logout</a>