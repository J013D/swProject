<?php 
require_once 'engine/db.php';
if(!isset($_SESSION['loggedin'])){
	header('Location: login.php');

}
$user_email = $_SESSION['loggedin'];
$sql = mysqli_query($db, "SELECT * FROM users WHERE email='$user_email'");
$fetch = mysqli_fetch_array($sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ارسال پست</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div id="posts">
	<form action="engine/do-post.php" method="post">
	<div class="post">
		<?php $uName =$fetch['userName']?>
		<h2><?php echo $uName ; ?> عزیز، صفحه ی ارسال پست</h2>
		<?php
		echo "امروز: " . date("Y/m/d") . "<br>";
		?>
		<br>
		<input type="text" name="headPost"  placeholder="تیتر مطلب"><br>
		<input type="text" name="idPost"  placeholder="شماره مطلب"><br>
			
	<div id="sample">
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
      //<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
	  </script>
      <textarea name="area" style="width: 520px; height: 300px" >
		</textarea>
	</div>
	<p>http://www.nicedit.com</p>
	<input type="submit" name="do-posting" value="ارسال">
	</div>
	</form>
	</div>
</body>
</html>