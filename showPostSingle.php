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

$sql2 = mysqli_query($db, "SELECT * FROM comments WHERE idOfPosts='$idd'");
$fetch2 = mysqli_fetch_array($sql2); 



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
	 <br>
	 <hr>
		<h4>نظرات</h4>
	 
	 <div>
	 <?php
		while($fetch2 = mysqli_fetch_array($sql2)){ 
			if($fetch2['acceptability']=="allow"){
				?> 
				<p> <?php echo "نظر منتشر شده توسط ".$fetch2['name']; ?> </p>			
				<?php $tim=$fetch2['time'];
				$rat=$fetch2['rating'];
					if($rat=="yes"){
						$like="پسندید";
					}
					else{
						$like="نپسندید";
					}
					echo "در تاریخ و ساعت ".$tim ?> </br>
					<?php echo " که پست را ".$like; ?> </br>
					<?php $txt2=$fetch2['text'];
					echo "متن نظر: ".$txt2;
					?>
					</br>
					</br>
					<?php
					} //end of if	
				} //end of while
	 ?>
	</div>
	 
	 
	 
	 
	 <br>
	 <hr>
	<form action="/project/engine/do-commenting.php" method="post">
		<h4>درج نظر</h4>
		
		<?php
		if ($userNameVis==""){ ?>
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
			<span>پسندیدن</span>
			<input type="radio" name="group1"  value='yes' checked /> <br>
			<span>نپسندیدن</span>
			<input type="radio" name="group1"  value='no'  />
						
				
			<p>شرح نظر</p>
			<textarea name="textComment" rows="8" cols="33" required="required" ></textarea>
			
		<input type="submit" name="do-posting" value="ارسال"> <br>
		
		<?php echo "<a href=\"javascript:history.go(-1)\">برگشتن به صفحه اصلی سایت</a>";
		?>
		 

		
	</form>
	</div>	
	</div>

	
</body>
</html>