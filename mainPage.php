<?php 
require_once 'engine/db.php';
if(isset($_SESSION['loggedin'])){
	$user_email = $_SESSION['loggedin'];
}
else {
	$user_email="";
}

$sql = mysqli_query($db, "SELECT * FROM posts");
$fetch = mysqli_fetch_array($sql); 


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>صفحه اصلی</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
 
	<div id="users">
	<div class="input">

	<div class="input">
		
	<?php
		if ($user_email!=""){ ?>
		 <a href="profile.php">مشاهده پروفایل کاربری</a>
		 <br>
	<?php
		}
			else{
			?> 
				<a href="login.php">وارد شدن به سایت</a><br>
			<?php
			}
	?>	
	</div>


	<?php
	while($fetch = mysqli_fetch_array($sql)){ 
	?> 
	<h4> <?php echo $fetch['head']; ?> </h4> </br>
	
	<?php $ti=$fetch['time'];
		$us=$fetch['userName'];
	?>
	<?php echo "پست منتشر شده در تاریخ   ".$ti." توسط ".$us; ?> </br> </br>
	<?php 
	$str=$fetch['text'];
	//echo $str;
	$pieces = substr($str, 0, 400);
	echo "خلاصه ی پست: ".$pieces."";
	
	?>
	
	 <a href="showPostSingle.php/?id=<?php  echo $fetch['id']?>"> نمایش بیشتر ...</a>
		</br></br>
	<hr>
	<?php
	}
	?>

	</div>
	</div>
	
</body>
</html>