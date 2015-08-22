<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>找得到--在这里找到你丢失的宝贝</title>
<link href="shouye_yangshi.css" rel="stylesheet" type="text/css" />
<script>
	function change_image(i) {
		document.getElementById('beijing_01').style.display='none';
		document.getElementById('beijing_02').style.display='none';
		document.getElementById('beijing_03').style.display='none';
		document.getElementById('beijing_04').style.display='none';
		document.getElementById('beijing_05').style.display='none';
		if(i == 1)
			document.getElementById('beijing_01').style.display='block';
		if(i == 2)
			document.getElementById('beijing_02').style.display='block';
		if(i == 3)
			document.getElementById('beijing_03').style.display='block';
		if(i == 4)
			document.getElementById('beijing_04').style.display='block';
		if(i == 5)
			document.getElementById('beijing_05').style.display='block';
	}
</script>

</head>

<body>
	<?php include("daohanglan.php");?>
	<div class="main">
    	<div class="topest">
            <div class="image">		
            	<div	class="big_image">
                	<img class="width_image" id="beijing_01" src="image/beijing_01.jpg" />
                    <img class="width_image" id="beijing_02" src="image/beijing_02.jpg" />
                    <img class="width_image" id="beijing_03" src="image/beijing_03.jpg" />
                    <img class="width_image" id="beijing_04" src="image/beijing_04.jpg" />
                    <img class="width_image" id="beijing_05" src="image/beijing_05.jpg" />
                    <div class="button">
                    	<div class="small_button" id="small_button_01" onmouseover="change_image(1)"></div>
                        <div class="small_button" id="small_button_02" onmouseover="change_image(2)"></div>
                        <div class="small_button" id="small_button_03" onmouseover="change_image(3)"></div>
                        <div class="small_button" id="small_button_04" onmouseover="change_image(4)"></div>
                        <div class="small_button" id="small_button_05" onmouseover="change_image(5)"></div>
                    </div>
                    <div class="bantouming">
                    	
                    </div>
                </div>
            </div>
        </div>
        <div class="xianbai">
        	<div class="tupian"></div>
            <div class="data"></div>
      	</div>
        <div class="latest-image">		<!--利用php输出最近的物品-->
        	<div class="goods">
            	<div class="goods_image">
                	<img class="goods_image" src="upload_image/logo.gif" />
                </div>
                <div class="goods_name">
                	钱包
                </div>
                <div class="time">
                	2014年2月17日
                </div>
                <div class="position">
                	shandong province
                </div>
            </div>
            <?php
            	require_once("sys_conf.inc");
				$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
				mysql_select_db($DBNAME);
				$str = "select * from goods_message order by gid desc;";
				$result = mysql_query($str,$link_id);
				for($i=0;$i<2;$i++) {
				list($gid,$is_lost,$goods_name,$photodir,$location,$gettime,$description,$user_email,$user_phone) = mysql_fetch_row($result);
				echo "<div class='goods'>
					<div class='goods_image'>
						<img class='goods_image' src='upload_image/".$photodir."' />
					</div>
					<div class='goods_name'>"
						.$goods_name."
					</div>
					<div class='time'>"
						.$gettime."
					</div>
					<div class='position'>"
						.$location."
					</div>
				</div>"; 
				}
			?>
            <div class="goods">
            
            </div>
            <div class="goods">
            
            </div>
            <div class="goods">
            
            </div>
            <div class="goods">
            
            </div>
            <div class="goods">
            
            </div>
            <div class="goods">
            
            </div>
            <div class="goods">
            
            </div>
            
        </div>
        <div class="throw">hello</div>
        <div class="wei">
        asdfafd
        </div>
    </div>
</body>
</html>
