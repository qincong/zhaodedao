<?php
	require_once("sys_conf.inc");
	$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
		
	$goods_name = $_POST['goods_name'];
	$img_dir = $_FILES['img']['name'];
	$img_tmp_name = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_tmp_name,'upload_image/'.$img_dir);
	$description = $_POST['description'];
	$time = $_POST['time'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$is_lost = $_GET['is_lost'];
	
	$str = "insert into goods_message (is_lost,goods_name,photodir,location,gettime,description,user_email)";
	$str .= "values ('$is_lost','$goods_name','$img_dir','$location','$time','$description','$email');";
	$result = mysql_query($str,$link_id);
	mysql_close($link_id);
	if($result){
		echo "<script>";
		echo "alert ('上传成功');";
		echo "location = 'shouye.php';";
		echo "</script>";
	}
?>