<?php session_start();?>
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
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery
/jquery-1.4.min.js"></script>
<script type="text/javascript"> 
var tag = 0;
function chang_slide(i){
	if(i == 1)
		$(".down_1").fadeIn("slow");
	if(i == 2)
		$(".down_2").fadeIn("slow");
	if(i == 3)
		$(".down_3").fadeIn("slow");
  }
function set_tag_0(i) {
	tag=0;
	if(i == 1)
		setTimeout(function(){if(tag == 0) $(".down_1").fadeOut("slow");},300);
	if(i == 2)
		setTimeout(function(){if(tag == 0) $(".down_2").fadeOut("slow");},300);
	if(i == 3)
		setTimeout(function(){if(tag == 0) $(".down_3").fadeOut("slow");},300);
}
function set_tag_1() { tag = 1;}
function change_slide(i) {
	if(i==1)
		setTimeout(function(){if(tag == 0) $(".down_1").fadeOut("slow");},500);
	if(i==2)
		setTimeout(function(){if(tag == 0) $(".down_2").fadeOut("slow");},500);
	if(i==3)
		setTimeout(function(){if(tag == 0) $(".down_3").fadeOut("slow");},500);		
}
function home() {
	location = "http://localhost/zhaodedao/shouye.php";
}

	
</script>
</head>

<body>
	<div  style="position:absolute;top:0px; height:100%;">
        	<div class="daohanglan">
                <div onclick="home();" class="logo"><img src="image/logo.png" height=70px;/></div>
                <div class="search">
                	<form name="search" action="display.php">
                    	<input type="text" name="keyword" style="height:28px;width:300px;">
                        <input type="submit" name="submit" value="找失物" />
                        <input type="submit" name="submit" value="找失主" />
                    </form>
                </div>
                <div class="woyao" id="zhaodongxi">
                    <div ><a href="http://www.baidu.com"  class="lianjie lianjie_1 slid_1" onmouseover="chang_slide(1)" onmouseout="change_slide(1)">找失物</a></div>
                    <div class="down down_1" id="down_11" onmouseover="set_tag_1(1)" onmouseout="set_tag_0(1)" >
                        <ul>
                            <li class="lianjie"><a href="http://localhost/zhaodedao/display.php?keyword=all&submit=找失物"> 浏览招领信息息</a></li>
                            <li class="lianjie"><a href="baoxun.php">报寻</a></li>
                        </ul>
                    </div>
                </div>
                <div class="woyao" id="zhaoshizhu">
                    <div><a href="http://www.baidu.com"  class="lianjie lianjie_1 slid_2" onmouseover="chang_slide(2)" onmouseout="change_slide(2)">找失主</a></div>
                    <div class="down down_2" onmouseover="set_tag_1(2)" onmouseout="set_tag_0(2)">
                        <ul>
                            <li class="lianjie"><a href="http://localhost/zhaodedao/display.php?keyword=all&submit=找失主">浏览报寻信息</a></li>
                            <li class="lianjie"><a href="fabu.php">公布</a></li>
                        </ul>
                    </div>
                </div>
                <div class="woyao" id="about">
                    <div><a href="http://www.baidu.com"  class="lianjie lianjie_1 slid_3"   onmouseover="chang_slide(3)" onmouseout="change_slide(3)">帮助</a></div>
                    <div class="down down_3" onmouseover="set_tag_1(3)" onmouseout="set_tag_0(3)">
                        <ul>
                            <li class="lianjie"><a href="about:blank">联系我们</a></li>
                            <li class="lianjie"><a href="about:blank">本站简介</a></li>
                        </ul>
                    </div>
                </div>
          </div></div></body></html>
