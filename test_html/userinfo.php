<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="favicon.ico" />
<title>用户信息</title>
<link href="lms.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
  <tr height="256">
    <td colspan="6"><img src="pics/banner.png" width="796" height="254"></td>
  </tr>
  <tr height="50">
    <td width="100"><div class="button"><li><a href="library.php"><b>主页</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="search.php"><b>检索图书</b></a></li>
    </div></td>
	 <td width="130"><div class="button"><li><a href="login.php"><b>用户登入</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="bookmanage.php"><b>图书管理</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="usermanage.php"><b>用户管理</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="recordmanage.php"><b>借阅管理</b></a></li>
    </div></td>
  </tr>
</table>
</center>
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" align="center">
  	<img src="pics/position.png" width="16" height="16" align="absmiddle">&nbsp;你的位置	</td>
    <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a href="usermanage.php">用户管理</a>  用户信息&lt;]</td>
	</tr>
</table>
</center>

<?php 
	$userid = $_GET['userid'];
	require_once "dbaccess.php";
	
	$query = "select * from user where user_ID='".$userid."'";
	$result = mysql_query($query);
	if (!$result) {
    	die('Invalid query: ' . mysql_error());
	}
	$rows = mysql_num_rows($result);
	if($rows!=0)
	{
		$rows=$rows-1;
	
		mysql_data_seek($result,$rows);
		$data = @mysql_fetch_array($result);
?>	
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" rowspan="10" align="center"><img src="pics/default.png" alt="用户照片" width="128" height="128"></td>
        <td>帐号：<?php echo "$data[user_ID]"?></td>
	</tr>
	<tr>
  	<td>姓名：<?php echo "$data[user_Name]"?></td>
	</tr>
	<tr>
  	<td>经理：<?php echo "$data[user_Manager]"?></td>
	</tr><tr>
  	<td>管理员：<?php echo "$data[user_Admin]"?></td>
	</tr>
	<tr>
  	<td>邮箱：<?php echo "$data[user_Email]"?></td>
	</tr>
	<tr>
  	<td>电话：<?php echo "$data[user_Telephone]"?></td>
	</tr>
	<tr>
  	<td>用户类型：<?php echo "$data[user_Type]"?></td>
	</tr>
</table>
</center>
<?php
		}
	//require_once "freeresult.php";
	require_once "dbclose.php";
?>
<center>
	<table border="0" width="800" cellspacing="0" cellpadding="0">
	<tr>
		<td><hr size="1"></td>
	</tr>
	</table>
	<table border="1" width="800" height="50" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
		<td align="center" height="23" style="font-size:10.5pt">版权所有(C)2013 北京市海淀区-甲骨文公司系统平台部
		E-Mail:<a href="#">联系我们</a>
		<a href="library.php">返回主页</a> </td>
	</tr>
	</table>
</center>
</body>
</html>