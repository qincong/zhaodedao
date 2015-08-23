<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传丢失的物品</title>
<link href="upload.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include("daohanglan.php");?>
	<div class="main">
        <div class="body">
            <div class="biaoti" > 上传丢失的物品</div>
            <div class="table">
            	<form method="POST" name="frmAdd" action="check_goods.php?is_lost=0" enctype="multipart/form-data">
                	<table>
                    	<tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">名称</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	钱包
                            </td>
                        </tr>
                        <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">丢失地点</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	济南
                            </td>
                        </tr>
                         <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">丢失时间</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	2014年
                            </td>
                        </tr>
                        <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">图片</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	<img src="image/beijing_03.jpg" style="width:200px; height:200px;" />
                            </td>
                        </tr>
                        <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">描述</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	so beautiful
                            </td>
                        </tr>
                        
                         <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">我的邮箱</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	jin@qq.com
                            </td>
                        </tr>
                        <div class="setEmail" >
                        	<div>给他发邮件</div>
                            <textarea rows="6" name="description" cols='46.3' wrap='VIRTUAL'></textarea>
                            <input type="submit" value="发送" />
                        </div>
                    </table>           
                </form>
            </div>
        </div>
    </div>
</body>
</html>