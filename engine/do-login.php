<?php 
require_once 'db.php';
 
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$check = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND password='$password'");
$check2 = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");

if(mysqli_num_rows($check) > 0){
	$_SESSION["loggedin"] = $email;
	header("Location: ../profile.php");
}else{
	if(mysqli_num_rows($check2) > 0){
		echo 'your password was incorrect';
	}
	else{
	echo 'you do not registered yet';
	}
}
 
 ?>