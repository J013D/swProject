<?php 
require_once 'engine/db.php';

if(isset($_SESSION['loggedin'])){
	$user_emailVis = $_SESSION['loggedin'];
	$sql1 = mysqli_query($db, "SELECT * FROM users WHERE email='$user_emailVis'");
	$fetch1 = mysqli_fetch_array($sql1); 
	$userNameVis = $fetch1['userName']; 	
}
else {
	$userNameVis =""; 
}


$idd =$_GET['id'];
$_SESSION['idOfPost']=$idd;


$sql = mysqli_query($db, "SELECT * FROM posts WHERE id='$idd'");
$fetch = mysqli_fetch_array($sql); 


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php //<title>پست</title>
	//<link rel="stylesheet" href="styles.css">
	?>
</head>
<body>

	<div style= "background: #E9EAED;
	text-align: center;
	width: 300px;
	margin: auto;
	padding: 10px;
	border-radius: 20px;">

	<div style= "padding: 8px;
	width: 280px;
	margin: 3px;
	border-radius: 10px;
	font-family: tahoma;">
	
	<h4> <?php echo $fetch['head']; ?> </h4> </br>
	<?php $ti=$fetch['time'];
		$us=$fetch['userName'];
	?>
	<?php echo "پست منتشر شده در تاریخ   ".$ti." توسط ".$us; ?> </br> </br>
	<?php 
	$str=$fetch['text'];
	echo $str;
	?>
	
	<?php //کامنت ?>
	 
	<form action="/project/engine/do-commenting.php" method="post">
		<h4>درج نظر</h4>
		
		<?php
		if ($userNameVis==""){ ?>
		 <br>
		 <input type="text" name="userNameComment" placeholder="نام شما ..." required="required" ><br>
		 <input type="text" name="userEmailComment" placeholder="ایمیل شما ..." required="required" ><br>
		 <?php
		}
		else {
			echo "نام شما ".$userNameVis; ?> <br> <?php
			echo "ایمیل شما ".$user_emailVis; ?> <br><br> <?php
		}
		?>
		<p>امتیاز شما به پست</p>
			<span>1</span>
			<input type="radio" name="ratingComment"  value='1'  />
			<span>2</span>
			<input type="radio" name="ratingComment"  value='2' />
			<span>3</span>
			<input type="radio" name="ratingComment"  value='3'  />
			<span>4</span>
			<input type="radio" name="ratingComment"  value='4' />
			<span>5</span>
			<input type="radio" name="ratingComment"  value='5' checked />
			<input type="text" name="websiteComment"  placeholder="وبسایت شما ..."><br>		
			<p>شرح نظر</p>
			<textarea name="textComment" rows="7" cols="35" required="required" ></textarea>
			
		<input type="submit" name="do-posting" value="ارسال"> <br>
		
		<?php echo "<a href=\"javascript:history.go(-1)\">برگشتن به صفحه اصلی سایت</a>";
		?>
		 

		
	</form>
	</div>	
	</div>

	
</body>
</html>