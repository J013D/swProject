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
	<title>ورود به حساب کاربری</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
 
	<div id="users">
	 <form action="engine/do-login.php" method="post">
		<p class="input">ورود به حساب کاربری</p>
	 	<input type="text" name="email" class="input" placeholder="ایمیل ..."><br>
	 	<input type="password" name="password" class="input" placeholder="رمز ..."><br>
	 	<input type="submit" name="do-login" value="ورود"><br>
		<a href="register.php">آیا قبلا ثبت نام نکرده اید؟</a>
	 </form>
	</div>
	
</body>
</html>