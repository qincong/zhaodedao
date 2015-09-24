<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传丢失的物品</title>
<link href="upload.css" rel="stylesheet" type="text/css" />
<link href="display.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include("daohanglan.php");?>
	<div class="main">
        <div class="body">
            <?php
				$gid = $_GET['gid'];
				require_once("sys_conf.inc");
				$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
				mysql_select_db($DBNAME);
				
				$str = "select * from goods_message where gid = ".$gid.";";
				$result = mysql_query($str,$link_id);
				list($gid,$is_lost,$goods_name,$photodir,$location,$gettime,$description,$user_email,$user_phone) = mysql_fetch_row($result);echo $photodir;
				echo "<div class='detail_goods detail_goods_1' onclick='toDetail(".$gid.")'>
    					<div class='img'>
						
        					<img class='img' src='upload_image/" .$photodir. "' />
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
			?>
            <div class="email" style="position:absolute;top:400px;left:130px;">
            	<form action="sendEmail.php<?php echo "?hisemail=$user_email";?>" method="POST" name="email">给对方发送邮件：<br>
                	<textarea rows="6" name="mail_body" cols='46.3' wrap='VIRTUAL'></textarea>
                    <br>我的邮箱：<input type="email" name="my_email" />
                    <input type="submit" name="send" value="发送" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>