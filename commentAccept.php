<?php 
require_once 'engine/db.php';
if(!isset($_SESSION['loggedin'])){
	header('Location: login.php');
}
$user_email = $_SESSION['loggedin'];

$sql = mysqli_query($db, "SELECT * FROM posts WHERE userEmail='$user_email'");
$fetch = mysqli_fetch_array($sql); 
//$sql1 = mysqli_query($db, "SELECT * FROM commnets");
//$fetch1 = mysqli_fetch_array($sql1);


$sql2 = mysqli_query($db, "SELECT * FROM comments ");
$fetch2 = mysqli_fetch_array($sql2); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>بررسی کامنت</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>



<div id="users"> 
<a href="profile.php">بازگشت به پروفایل کاربری</a>
	 
<?php

while($fetch = mysqli_fetch_array($sql)){ 
		$postId=$fetch['id'];
		?> <div class="input"> <?php
		
		while($fetch2 = mysqli_fetch_array($sql2)){
			if($fetch2['idOfPosts']==$postId){	
				if($fetch2['acceptability']=="wait"){
					$commentId=$fetch2['id'];
					?> 
					<p> <?php echo "نظر منتشر شده توسط ".$fetch2['name']; ?> <p>			
					<?php $tim=$fetch2['time'];
					$rat=$fetch2['rating'];
					if($rat=="yes"){
						$like="پسندید";
					}
					else{
						$like="نپسندید";
					}
					echo "در تاریخ و ساعت ".$tim ?> <br>
				
					<?php
					$headPost=$fetch['head'];
					$numberPost=$fetch['number'];
					echo "که پست شما با عنوان ".$headPost; ?> <br><?php
					echo "و با شماره مطلب ".$numberPost; ?> <br><?php
					echo "را ".$like; ?> <br><br>
					<?php $txt1=$fetch2['text'];
					echo "متن نظر: ".$txt1;
					?>
					<br>
					<form action="engine/do-commentAccept.php" method="post">
					<input type="submit" name="allow" value="تایید">
					<input type="hidden" name="idcom" value="<?php echo $commentId; ?>">
					<input type="submit" name="disallow" value="عدم تایید"> <br>
					</form>
					<br>
					<br>
					<?php
				}
			}
		}	
		
	?></div> <?php
}
?>
</div>
</body>