<?php 
require_once 'db.php';
 
if($_SESSION['idOfPost']=="used") //اگر کامنت یکبار ثبت شده باشد
 {
	 header('Location: ../mainPage.php');
 }
  
if(!isset($_SESSION['idOfPost'])){ //اگر هنوز آیدی پستی ست نشده باشد

	header('Location: ../mainPage.php'); 
}

if(isset($_SESSION['loggedin'])){ //اگر کاربری وارد شده باشد اطلاعاتش از دیتا بیس گرفته شود
	$user_emailComment = $_SESSION['loggedin'];
	$sql1 = mysqli_query($db, "SELECT * FROM users WHERE email='$user_emailComment'");
	$fetch1 = mysqli_fetch_array($sql1); 
	$userNameComment = $fetch1['userName']; 	
}
else {
	$userNameComment = $_POST["userNameComment"];
	$user_emailComment = $_POST["userEmailComment"];
}

$idOfPostComment = $_SESSION['idOfPost']; 
$txtComment =  $_POST["textComment"];
$acceptabilityComment="wait";
$ratingComment= $_POST=["ratingComment"];
$websiteomment= $_POST=["websiteComment"];

date_default_timezone_set("Asia/Tehran");
$timeComment=date("Y/m/d")." ". date("h:i:sa");


?> 













 <?php
$_SESSION['idOfPost']="used";
 ?>