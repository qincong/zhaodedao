<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传捡到的物品</title>
<link href="display.css" rel="stylesheet" type="text/css" />
<script>
	function toDetail(i) {
		location = "http://localhost/zhaodedao/detail.php?gid="+i;}
</script>
</head>
<body>
<?php include("daohanglan.php");?>
<?php
	$search = $_GET['keyword'];
	$tag = $_GET['submit'];
	if($tag == "找失物")
		$isLost = 1;
	if($tag == "找失主")
		$isLost = 0;
	echo $isLost;
?>	
<div class="main">
	<?php
		require_once("sys_conf.inc");
		$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
		mysql_select_db($DBNAME);
		
		$str = "select * from goods_message where is_lost = ".$isLost." order by gid desc;";
		$result = mysql_query($str,$link_id);
		$n = mysql_num_rows($result);
		for($i=0;$i<$n;$i++) {
			list($gid,$is_lost,$goods_name,$photodir,$location,$gettime,$description,$user_email,$user_phone) = mysql_fetch_row($result);
			if($search!='all')
			{ 
				if(ereg($search,$goods_name)||ereg($search,$description)) {
					echo "<div class='detail_goods detail_goods_1' onclick='toDetail(".$gid.")'>
							<div class='img'>
								<img class='img' src='upload_image/".$photodir."' />
						   </div>
						 <div class='message'>
							<div class='detail_name'>
								".$goods_name."
						</div>
						<div class='detail_position'>".$location."</div>
						<div class='detail_time'>".$gettime."</div>
						<div class='detail_description'>".$description."</div>
						</div>
						</div>	";
				}
			}
			else 
			{
				echo "<div class='detail_goods detail_goods_1' onclick='toDetail(".$gid.")'>
							<div class='img'>
								<img class='img' src='upload_image/".$photodir."' />
						   </div>
						 <div class='message'>
							<div class='detail_name'>
								".$goods_name."
						</div>
						<div class='detail_position'>".$location."</div>
						<div class='detail_time'>".$gettime."</div>
						<div class='detail_description'>".$description."</div>
						</div>
						</div>	";
			}
		}
	?>
</div>
</body>
</html>
















