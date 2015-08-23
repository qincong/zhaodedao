<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传捡到的物品</title>
<link href="upload.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	require("smtp.php"); 
	$hisemail = $_GET['hisemail'];
	$smtpserver = "smtp.qq.com";
	$smtpserverport = 25;
	$smtpusermail = "1309740551@qq.com";
	$smtpemailto = $hisemail;
	$smtpuser = "1309740551";
	$smtppass = "pzwwca695";
	$mailsubject = "找得到邮件通知";
	$mailbody =$_POST['mail_body'];
	$myemail = $_POST['my_email'];
	$mailtype = "TXT";
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	$smtp->debug = false;
	$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
	if($res!="")
		echo "<script> alert('发送成功');location = 'shouye.php';</script>";
?>
</body>
</html>