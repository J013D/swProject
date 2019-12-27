<?php 
require_once 'engine/db.php';
if(!isset($_SESSION['loggedin'])){
	header('Location: login.php');
}
$user_email = $_SESSION['loggedin'];
$sql = mysqli_query($db, "SELECT * FROM users WHERE email='$user_email'");
$fetch = mysqli_fetch_array($sql); 
$lvl =$fetch['level'];
$masterr ='master';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>پروفایل شما</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div id="users">
	<form action="postPage.php">
	<div class="input">
		<h2>خوش آمدید <?php echo $fetch['userName']; ?> عزیز</h2>
		<p>شما در تاریخ و ساعت <?php echo $fetch['time']; ?> در سیستم ثبت نام کردید</p>
		<?php
		echo "امروز: " . date("Y/m/d") . "<br>";
		?>
		
		<?php if($lvl==$masterr){ ?>
		<input type="submit" name="postPage" value="ارسال پست">
		<input type="submit" name="delPostPage" value="حذف پست" disabled>
		<input type="submit" name="editPostPage" value="ویرایش پست" disabled>
		<a href="showPostPage.php">نمایش پست ها</a>
		<?php } ?>
		<br>
		<a href="logout.php">خروج از حساب کاربری</a>
		<br>
		</div>
		</div>
</body>
</html>