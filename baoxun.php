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
                            	<input type="text" name="goods_name" size="60"  />
                            </td>
                        </tr>
                        <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">丢失地点</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	<input type="text" name="location" size="60"  />
                            </td>
                        </tr>
                         <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">丢失时间</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	<input type="text" name="time" size="60"  />
                            </td>
                        </tr>
                        <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">图片</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	<input style="position:'absolute';margin-left:-182px;" type="file" name="img" accept="image/gif, image/jpeg">
                            </td>
                        </tr>
                        <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">描述</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	<textarea rows="6" name="description" cols='46.3' wrap='VIRTUAL'></textarea>
                            </td>
                        </tr>
                        
                         <tr>
                        	<td style="width:200px;height:29px;backgrond:blue;">我的邮箱</td>
                            <td style="width:480px;height:29px;backgrund:blue;" >
                            	<input type="email" name="email"  size="60" />
                            </td>
                        </tr>
                        <div class="submit">
                        	<input type="submit" value="提交" /></td>
                            <input type="reset" value="重写" name="cencel">
                        </div>
                    </table>           
                </form>
            </div>
        </div>
    </div>
</body>
</html>