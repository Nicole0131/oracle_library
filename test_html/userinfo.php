<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="favicon.ico" />
<title>�û���Ϣ</title>
<link href="lms.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
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
    <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a href="usermanage.php">�û�����</a>  �û���Ϣ&lt;]</td>
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
  	<td width="234" rowspan="10" align="center"><img src="pics/default.png" alt="�û���Ƭ" width="128" height="128"></td>
        <td>�ʺţ�<?php echo "$data[user_ID]"?></td>
	</tr>
	<tr>
  	<td>������<?php echo "$data[user_Name]"?></td>
	</tr>
	<tr>
  	<td>����<?php echo "$data[user_Manager]"?></td>
	</tr><tr>
  	<td>����Ա��<?php echo "$data[user_Admin]"?></td>
	</tr>
	<tr>
  	<td>���䣺<?php echo "$data[user_Email]"?></td>
	</tr>
	<tr>
  	<td>�绰��<?php echo "$data[user_Telephone]"?></td>
	</tr>
	<tr>
  	<td>�û����ͣ�<?php echo "$data[user_Type]"?></td>
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
		<td align="center" height="23" style="font-size:10.5pt">��Ȩ����(C)2013 �����к�����-�׹��Ĺ�˾ϵͳƽ̨��
		E-Mail:<a href="#">��ϵ����</a>
		<a href="library.php">������ҳ</a> </td>
	</tr>
	</table>
</center>
</body>
</html>