<?php
require_once 'db.php';

if(!isset($_POST['idcom'])){ //اگر هنوز آیدی کامنتی ست نشده باشد
	header ("location:javascript://history.go(-1)"); 
}
else{
	$idcom=$_POST['idcom'];
}

echo $_POST['group1'];
if($_POST['group1']=="تایید"){
	$value="allow";
	$register = mysqli_query($db, "UPDATE comments SET acceptability='$value' WHERE id='$idcom' ");
	echo "کامنت توسط شما تایید و نمایش داده خواهد شد";
}
else{
	$value="disallow";
	$register = mysqli_query($db, "UPDATE comments SET acceptability='$value' WHERE id='$idcom' ");
	echo "کامنت توسط شما تایید نشد و به نمایش درنخواهد آمد";
}


?>