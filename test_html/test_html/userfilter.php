<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "User,Admin,SuperAdmin";
$MM_donotCheckaccess = "false";
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  $isValid = False; 
  if (!empty($UserName)) { 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}
$MM_restrictGoTo = "error.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="favicon.ico" />
<title>�û�����</title>
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
    <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a href="usermanage.php">�û�����</a>&lt;]</td>
	</tr>
</table>
</center>
<!--************************************************************-->
<div align="center">
<center>
	<?php
		$name = $_POST['name'];
	        $admin = $_POST['admin'];
		$manager = $_POST['manager'];
    		require_once "dbaccess.php";
   		$querywhere = "select * from user where 1='1' ";
		if($name != ""){ $querywhere = $querywhere."and user_Name="."\"".$name."\""; }
		if($admin != ""){$querywhere = $querywhere."and user_Admin like'%".$admin."%'";}
		if($manager != ""){$querywhere = $querywhere."and user_Manager like'%".$manager."%'";}
		$result = mysql_query($querywhere );
		$rows_total = @mysql_num_rows($result);// ����������
	
		@$page_no = $_GET['page_no'];
		
		$page_num = 10;//ÿҳ��¼��
		$page_total = floor($rows_total/10);//������ҳ��
		if($rows_total%10!=0)
		{
			$page_total=$page_total+1;
		}
		if($page_no>$page_total)
		{
			$page_no = $page_total;
		}
		if(!$page_no)//page_no��
		{
			$page_no = 1;
		}
		$start_num = $page_num * ($page_no-1);//ҳ��
		$sql = $querywhere."limit $start_num,$page_num";
		$result = mysql_query($sql);
		$rows = @mysql_num_rows($result);
	?>
	
<center>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="pics/user.png" alt="�û�����" width="50" height="50" align="absmiddle">
	<strong><font color="#66CCFF" size="5">�û�����</font></strong>	</td>
	</tr>
</table>
</center>	
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr valign="bottom">
	<td width="140">&nbsp;</td>
	<td>
	<div align="left">
	&nbsp;&nbsp;
	����
	<font color="#FF6600"><?php echo "$rows_total"?></font>
	����¼[ÿҳ10��]	</div>	</td>
    </tr>
</table>
<center>
</div>

<div align="center">
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr>
	<td width="15%"><div align="center">����</div></td>
	<td width="20%"><div align="center">����</div></td>
	<td width="20%"><div align="center">��ϵ�绰</div></td>
	<td width="15%"><div align="center">����</div></td>
	<td width="15%"><div align="center">�û�����</div></td>
	<td width="15%" colspan="3"><div align="center">����</div></td>
	</tr>
	<?php
		for($i=0;$i<$rows;$i++)
		{
			mysql_data_seek($result,$i);
			$data = @mysql_fetch_array($result);
			$username = $data['user_Name'];
			$mailbox = $data['user_Email'];
			$phonenum = $data['user_Telephone'];
			$usertype = $data['user_Type'];
			$manager = $data['user_Manager'];
			$userid = $data['user_ID'];
	?>
	
	<tr>
	<td width="15%"><div align="center"><?php echo "$username" ?></div></td>
	<td width="20%"><div align="center"><?php echo "$mailbox" ?></div></td>
	<td width="15%"><div align="center"><?php echo "$phonenum" ?></div></td>
	<td width="20%"><div align="center"><?php echo "$manager" ?></div></td>
	<td width="15%"><div align="center"><?php echo "$usertype" ?></div></td>
	
	<td width="5%"><div align="center">
	<a href="userinfo.php?userid=<?php echo "$userid"?>">
	<img src="pics/view.png" alt="��ʾ��ϸ��Ϣ" border="0" width="30" height="30"></a></div></td>
	<td width="5%"><div align="center">
	<a href="userdelete.php?userid=<?php echo "$userid"?>">
	<img src="pics/delete.png" alt="ɾ��" border="0" width="30" height="30"></a></div></td>
	</tr>
	<?php
		}
		require_once "dbclose.php";
	?>
</table>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
<tr>
<td align="center">
<?php
echo "<a href='usermanage.php?page_no=1'>��ҳ</a>";
echo "&nbsp;";
echo "<a href='usermanage.php?page_no=".($page_no-1)."'>��һҳ</a>";
echo "&nbsp;";
echo "��".$page_no."ҳ [��".$page_total."ҳ]";
echo "&nbsp;";
echo "<a href='usermanage.php?page_no=".($page_no+1)."'>��һҳ</a>";
echo "&nbsp;";
echo "<a href='usermanage.php?page_no=".$page_total."'>βҳ</a>";
?>
</td>
</tr>
</table>
</div>
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