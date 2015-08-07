<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link rel="shortcut icon" href="favicon.ico" />
<title>错误</title>
</head>
<body>
<br><br><br><br><br>
<center>
<img src="pics/error.png" alt="error" width="128" height="128">
</center>
<center>
<strong>
<font size="+2" color="#EE0000">
<!--*******************error*******************-->
error
<br>
<?php
if($nextpage)
{
	echo "<META HTTP-EQUIV=\"Refresh\" Content=\"2;URL = ".$nextpage."\">";
	echo "<meta http-equiv=\"Pragram\"content=\"no-cache\">";
	 
	if($errorno==1){	echo "密码不正确!";}
	if($errorno==2){	echo "用户名不存在!";}
	if($errorno==3){	echo "用户类型不匹配!";}
	if($errorno==4){	echo "你本次不能借阅这么多图书！";}
	if($errorno==5){	echo "你已借阅的图书已达到上限！";}
	
	if($errorno==6){	echo "你今天借阅的图书已达到规定的数量！";}
	if($errorno==7){	echo "你本次不能借阅这么多图书！";}
	if($errorno==8){	echo "该登录用户名已经存在!";}
	if($errorno==9){	echo "你没有访问的权限!";}
	if($errorno==10){	echo "请先登录!";}
}	
else
{
	echo "<META HTTP-EQUIV=\"Refresh\" Content=\"2;URL = library.php\">";
	echo "<meta http-equiv=\"Pragram\"content=\"no-cache\">";
	echo "您没有权限访问或用户名密码不正确！";
	echo "<br><br>请先登录!";
}
?>

</font>
</strong>
</center>
</body>
</html>
