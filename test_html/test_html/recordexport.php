<script>
<!--
	function showsuccess()
	{
		window.alert ("导出成功!");
		window.location.href='recordmanage.php';
		return true;
	}
	function showfalse()
	{
		window.alert ("导出失败，请重新操作或检查服务器!");
		window.location.href='recordmanage.php';
		return false;
	}
	function xSaveAsxls(xResult,xFileName)
	{
		var ow=window.open();
		with(ow)
		{
			document.write(xResult);
			document.execCommand('Saveas',true,xFileName);
			close();
		}
	}


//-->
</script>

<?php
	require_once "dbaccess.php";
	$query="select ID,BookName,Author,Publisher,Status,user_Name,user_Manager,user_Admin,Layout,ReturnDay,user_Telephone,user_Email from books left join record on books.ID = record.book_ID left join user on record.user_ID=user.user_ID order by books.ID ASC";
	$result = mysql_query($query);
	$rows = @mysql_num_rows($result);
	//if($result)
	//{
		//echo "<script language='javascript'>showsuccess()</script>";
	//}
	//else
	//{
	//	echo "<script language='javascript'>showfalse()</script>";
	//}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="favicon.ico" />
<title>备份信息</title>
<link href="lms.css" rel="stylesheet" type="text/css">
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
	<td width="1550"> 
	<div align="center"><input type = "button" value="保存为Excel文件" onclick=xSaveAsxls(document.all.div_ID.innerHTML,'图书馆备份文件.xls')></div>
	</td>
	</tr>
</table>
<div id=div_ID>
<table border="1" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
	<td width="100"><div align="center">ID</div></td>
	<td width="150"><div align="center">书名</div></td>
	<td width="100"><div align="center">作者</div></td>
	<td width="200"><div align="center">出版社</div></td>
	<td width="50"><div align="center">状态</div></td>
	<td width="150"><div align="center">借阅人</div></td>
	<td width="150"><div align="center">借出时间</div></td>
	<td width="150"><div align="center">应还时间</div></td>
	<td width="150"><div align="center">经理</div></td>
	<td width="150"><div align="center">管理员</div></td>
	<td width="100"><div align="center">电话号码</div></td>
	<td width="100"><div align="center">邮箱</div></td>
	</tr>
	<?php
		for($i=0;$i<$rows;$i++)
		{
			mysql_data_seek($result,$i);
			$data = @mysql_fetch_array($result);
			$bookId = $data['ID'];
			$bookname = $data['BookName'];
			$bookauthor = $data['Author'];
			$bookpublisher = $data['Publisher'];
			$booktype = $data['Status'];
			$user = $data['user_Name'];
			$manager = $data['user_Manager'];
			$admin = $data['user_Admin'];
			$telephone = $data['user_Telephone'];
			$email = $data['user_Email'];
			$layout = $data['Layout'];
			$returnday = $data['ReturnDay'];
	?>
	
	<tr>
	<td width="100"><div align="center"><?php echo "$bookId" ?></div></td>
	<td width="150"><div align="center"><?php echo "$bookname" ?></div></td>
	<td width="100"><div align="center"><?php echo "$bookauthor" ?></div></td>
	<td width="200"><div align="center"><?php echo "$bookpublisher" ?></div></td>
	<td width="50"><div align="center"><?php echo "$booktype" ?></div></td>
	<td width="150"><div align="center"><?php echo "$user" ?></div></td>
	<td width="150"><div align="center"><?php echo "$layout" ?></div></td>
	<td width="150"><div align="center"><?php echo "$returnday" ?></div></td>
	<td width="150"><div align="center"><?php echo "$manager" ?></div></td>
	<td width="150"><div align="center"><?php echo "$admin" ?></div></td>
	<td width="100"><div align="center"><?php echo "$telephone" ?></div></td>
	<td width="100"><div align="center"><?php echo "$email" ?></div></td>
	</tr>
	<?php
		}
		require_once "dbclose.php";
	?>
</table>
</div>
</body>
</html>