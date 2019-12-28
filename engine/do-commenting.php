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
//$ratingComment= $_POST=["group1"];
$level= $_POST['group1']; //rating of post
//$websiteComment= $_POST=["websiteComment"];

date_default_timezone_set("Asia/Tehran");
$timeComment=date("Y/m/d")." ". date("h:i:sa");


$reg = mysqli_query($db, "INSERT INTO comments (idOfPosts, text, acceptability, name, email, rating, time) VALUES ('$idOfPostComment', '$txtComment', '$acceptabilityComment', '$userNameComment', '$user_emailComment', '$level', '$timeComment')");
	

if($reg){
		echo 'کامنت شما ارسال شد و پس از تایید نمایش داده خواهد شد';
		$_SESSION['idOfPost']="used"; //آیدی پست پاک شود تا برای کامنت بعدی مکل ایجاد نکند
		?> <br><?php
		echo "<a href=\"javascript:history.go(-1)\">برگشتن به صفحه ی قبل</a>";
		?>
		<br><a href="../mainPage.php">رفتن به صفحه ی اصلی سایت</a>
	 <?php
	}else{
		echo 'کامن شما ارسال نشد'; ?> <br><?php
		echo "<a href=\"javascript:history.go(-1)\">برگشتن به صفحه ی قبل</a>";
		?>
		<br><a href="../mainPage.php">رفتن به صفحه ی اصلی سایت</a>
	
	<?php }	
?> 