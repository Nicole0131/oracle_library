<script>
<!--
	function validateform()
	{
		if(document.addbook.bookid.value == "")
		{
			window.alert ("������ͼ����!")
			return false;
		}
		if(document.addbook.bookname.value == "")
		{
			window.alert ("������ͼ������!")
			return false;
		}
		if(document.addbook.bookauthor.value == "")
		{
			window.alert ("������ͼ������!")
			return false;
		}
		if(document.addbook.bookpublisher.value == "")
		{
			window.alert ("�����������!")
			return false;
		}
		if(document.addbook.booktype.value == "")
		{
			window.alert ("������ͼ��״̬!")
			return false;
		}
		
	}
//-->
</script>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="favicon.ico" />
<title>���ͼ��</title>
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
    <td width="100"><div class="button"><li><a href="library.php"><b>��ҳ</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="search.php"><b>����ͼ��</b></a></li>
    </div></td>
	 <td width="130"><div class="button"><li><a href="login.php"><b>�û�����</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="bookmanage.php"><b>ͼ�����</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="usermanage.php"><b>�û�����</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="recordmanage.php"><b>���Ĺ���</b></a></li>
    </div></td>
  </tr>
</table>
</center>
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" align="center">
  	<img src="pics/position.png" width="16" height="16" align="absmiddle">&nbsp;���λ��	</td>
    <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a href="addbook.php">���ͼ��</a>  ͼ�����&lt;]</td>
	</tr>
</table>
</center>	
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" rowspan="10" align="center"><img src="pics/book.png" alt="ͼ����Ƭ" width="128" height="128"></td>
	</tr>
	<tr>
  	<td>��ţ�</td>
        <td>
	<input type="text" name="bookid" size="20"/>
	<font color="#8080C0">*</font><font size="2" color="#8080C0">   �������20���ַ��������ظ�</font>
	</td>
	</tr>
	<tr>
  	<td>������</td>
        <td>
	<input type="text" name="bookname" size="20"/>
	<font color="#8080C0">*</font><font size="2" color="#8080C0">   �������50���ַ�</font>
	</td></tr>
        <tr>
  	<td>���ߣ�</td>
	<td>
	<input type="text" name="bookauthor" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>�����磺</td>
	<td>
	<input type="text" name="bookpublisher" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>״̬��</td>
	<td>
	<select name="booktype" style="WIDTH:152px">
	<option value="�ڼ�">�ڼ�</option>
	<option value="���">���</option>
	</select>
	<font color="#8080C0">*</font>
	</td>
	</select>
	</tr>
	<tr>
	<td colspan="2" >
	<input type="reset" value="����" />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="�ύ" />
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
		<td align="center" height="23" style="font-size:10.5pt">��Ȩ����(C)2013 �����к�����-�׹��Ĺ�˾ϵͳƽ̨��
		E-Mail:<a href="#">��ϵ����</a>
		<a href="library.php">������ҳ</a> </td>
	</tr>
	</table>
</center>
</body>
</html>