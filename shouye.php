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



	
</script>
</head>

<body>
	<div class="main">
    	<div class="topest">
        	<div class="daohanglan">
                <div class="logo"><img src="image/logo.png" height=70px;/></div>
                <div class="woyao" id="zhaodongxi">
                    <div ><a href="http://www.baidu.com"  class="lianjie lianjie_1 slid_1" onmouseover="chang_slide(1)" onmouseout="change_slide(1)">找失物</a></div>
                    <div class="down down_1" id="down_11" onmouseover="set_tag_1(1)" onmouseout="set_tag_0(1)" >
                        <ul>
                            <li class="lianjie"><a href="about:blank"> 浏览招领信息息</a></li>
                            <li class="lianjie"><a href="fabu.php">报寻</a></li>
                        </ul>
                    </div>
                </div>
                <div class="woyao" id="zhaoshizhu">
                    <div><a href="http://www.baidu.com"  class="lianjie lianjie_1 slid_2" onmouseover="chang_slide(2)" onmouseout="change_slide(2)">找失主</a></div>
                    <div class="down down_2" onmouseover="set_tag_1(2)" onmouseout="set_tag_0(2)">
                        <ul>
                            <li class="lianjie"><a href="about:blank">浏览报寻信息</a></li>
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
            </div>
            <div class="image">		<!--大型滚动画-->
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
