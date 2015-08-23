<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传捡到的物品</title>
<link href="display.css" rel="stylesheet" type="text/css" />
<script>
	function toDetail(i) {
		location = "http://www.baidu.com?gid="+i;}
</script>
</head>
<body>
<?php include("daohanglan.php");?>
<?php
	//$search = $_GET['keyword'];
	//$tag = $_GET['submit'];
?>	
<div class="main">
	<div class="detail_goods detail_goods_1" onclick="toDetail(1)">
    	<div class="img">
        	<img class="img" src="image/beijing_03.jpg" />
        </div>
        <div class="message">
        	<div class="detail_name">
            		钱包
            </div>
            <div class="detail_position">建安</div>
            <div class="detail_time">2014年</div>
            <div class="detail_description">黑色的</div>
        </div>
    </div>
    <div class="detail_goods detail_goods_1" onclick="toDetail()">
    	<div class="img">
        	<img class="img" src="image/beijing_03.jpg" />
        </div>
        <div class="message">
        	<div class="detail_name">
            		钱包
            </div>
            <div class="detail_position">建安</div>
            <div class="detail_time">2014年</div>
            <div class="detail_description">黑色的</div>
        </div>
    </div>
</div>
</body>
</html>