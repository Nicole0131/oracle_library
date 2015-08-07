<script>
<!--
	function validateform()
	{
		if(document.addbook.bookid.value == "")
		{
			window.alert ("请输入图书编号!")
			return false;
		}
		if(document.addbook.bookname.value == "")
		{
			window.alert ("请输入图书名称!")
			return false;
		}
		if(document.addbook.bookauthor.value == "")
		{
			window.alert ("请输入图书作者!")
			return false;
		}
		if(document.addbook.bookpublisher.value == "")
		{
			window.alert ("请输入出版社!")
			return false;
		}
		if(document.addbook.booktype.value == "")
		{
			window.alert ("请输入图书状态!")
			return false;
		}
		
	}
//-->
</script>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="favicon.ico" />
<title>添加图书</title>
<link href="lms.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<form ACTION="addbooker.php" METHOD="POST" name="addbook" onSubmit="return validateform( this.form )">
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
    <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a href="addbook.php">添加图书</a>  图书管理&lt;]</td>
	</tr>
</table>
</center>	
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" rowspan="10" align="center"><img src="pics/book.png" alt="图书照片" width="128" height="128"></td>
	</tr>
	<tr>
  	<td>编号：</td>
        <td>
	<input type="text" name="bookid" size="20"/>
	<font color="#8080C0">*</font><font size="2" color="#8080C0">   最长不超过20个字符，不能重复</font>
	</td>
	</tr>
	<tr>
  	<td>书名：</td>
        <td>
	<input type="text" name="bookname" size="20"/>
	<font color="#8080C0">*</font><font size="2" color="#8080C0">   最长不超过50个字符</font>
	</td></tr>
        <tr>
  	<td>作者：</td>
	<td>
	<input type="text" name="bookauthor" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>出版社：</td>
	<td>
	<input type="text" name="bookpublisher" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>状态：</td>
	<td>
	<select name="booktype" style="WIDTH:152px">
	<option value="在架">在架</option>
	<option value="借出">借出</option>
	</select>
	<font color="#8080C0">*</font>
	</td>
	</select>
	</tr>
	<tr>
	<td colspan="2" >
	<input type="reset" value="重置" />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="提交" />
	</td>
	</tr>
</table>
</form>
</center>
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