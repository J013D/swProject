<?php 
require_once 'db.php';
 if(!isset($_SESSION['loggedin'])){
	header('Location: login.php');
}
$user_email = $_SESSION['loggedin'];
$sql = mysqli_query($db, "SELECT * FROM users WHERE email='$user_email'");
$fetch = mysqli_fetch_array($sql); 
$uName =$fetch['userName'];

$txtPost =  $_POST["area"];
$user_email = $_SESSION['loggedin'];
$headPost = $_POST["headPost"];
$idPost = $_POST["idPost"];

date_default_timezone_set("Asia/Tehran");
$timeDate=date("Y/m/d")." ". date("h:i:sa");

$reg = mysqli_query($db, "INSERT INTO posts (userEmail,userName, head, number, text, time) VALUES ('$user_email','$uName', '$headPost','$idPost', '$txtPost', '$timeDate')");
if($reg){
		echo 'پست شما ارسال شد';
		?><br><a href="../showPostPage.php">همه ی پست های شما</a>
		<br><a href="../mainPage.php">رفتن به صفحه ی اصلی سایت</a>
	 <?php
	}else{
		echo 'پست شما ارسال نشد';
		echo "<a href=\"javascript:history.go(-1)\">برگشتن به صفحه ی قبل</a>";
		?>
		<br><a href="../showPostPage.php">همه ی پست های شما</a>
		<br><a href="../mainPage.php">رفتن به صفحه ی اصلی سایت</a>
	
	<?php }		


?>