<?php 
require_once 'db.php';
 
$display_name =  $_POST["display-name"];
$email = $_POST['email'];
$password = md5($_POST['password']);
$password_conf = md5($_POST['password-conf']);
$level= $_POST['group1'];
date_default_timezone_set("Asia/Tehran");
$timeDate=date("Y/m/d")." ". date("h:i:sa");
 
 
if($password != $password_conf){
	echo 'رمز شما و تکرار آن برابر نیستند';
}else{
	$register = mysqli_query($db, "INSERT INTO users (userName, email, password, level, time) VALUES ('$display_name', '$email','$password', '$level', '$timeDate')");
	if($register){
		header('Location: ../login.php');
	}else{
		echo 'error';
		echo '';
	}
}
?>