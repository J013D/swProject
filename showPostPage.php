<?php 
require_once 'engine/db.php';
if(!isset($_SESSION['loggedin'])){ //اگر لاگین نکرده است، نتواند وارد شود
	header('Location: login.php');
}
$user_email = $_SESSION['loggedin'];

$sql1 = mysqli_query($db, "SELECT * FROM users WHERE email='$user_email'");
$fetch1 = mysqli_fetch_array($sql1); 
$lvl1 =$fetch1['level'];
$masterr1 ='master';
if($lvl1!=$masterr1){ //اگر دانشجو است به صفحه پست گذاشتن نرود
	header('Location: profile.php');
}

$sql = mysqli_query($db, "SELECT * FROM posts WHERE userEmail='$user_email'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ثبت نام در سایت</title>
	<link rel="stylesheet" href="styles.css">
</head>
<div id="users">
<div class="input">
<h3>پست های شما <?php echo $user_email ?>عزیز</h3>
<?php
while($fetch = mysqli_fetch_array($sql)){ 
?>
<h4> <?php echo $fetch['head']; ?> </h4>
<?php echo $fetch['time']; ?> </br> </br>
<?php echo $fetch['text']; ?> </br>
<hr>
<?php
}
?>
</div>
<a href="profile.php">بازگشت به پروفایل کاربری</a>
</div>
