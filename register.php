<?php 
require_once 'engine/db.php';
if(isset($_SESSION['loggedin'])){
	header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ثبت نام در سایت</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
 
	<div id="users">
		<form action="engine/do-resgister.php" method="post">
			<input type="text" name="display-name" class="input" placeholder="نام ..." required ><br>
			<input type="text" name="email" class="input" placeholder="ایمیل ..." required ><br>
			<input type="password" name="password" class="input" placeholder="رمز ..." required ><br>
			<input type="password" name="password-conf" class="input" placeholder="تکرار رمز ..." required ><br>
			<div class="input">
			<p>سطح کاربری</p>
			<span>استاد</span>
			<input type="radio" name="group1"  value='master'  /> <br>
			<span>دانشجو</span>
			<input type="radio" name="group1"  value='student' checked />
			</div>
			<input type="submit" name="do-register" value="ثبت نام"><br>
			<a href="login.php">آیا قبلا در سایت ثبت نام کرده اید؟ وارد شوید</a>
			<br><a href="mainPage.php">رفتن به صفحه اصلی سایت</a>
	 
		</form>
	</div>
	
</body>
</html>