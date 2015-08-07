<script>
<!--
	function showfalse()
	{
		window.alert ("帐号已被注册，请更换帐号重新注册!");
		window.location.href='userregist.php';
		return false;
	}
	function showsuccess()
	{
		window.alert ("恭喜您，注册成功!");
		window.location.href='library.php';
		return true;
	}
//-->
</script>
<?php
header("Content-Type: text/html; charset=gb2312");
$hostname_connectLMS = "localhost";
$database_connectLMS = "db_library";
$username_connectLMS = "root";
$password_connectLMS = "19963";
$connectLMS = mysql_pconnect($hostname_connectLMS, $username_connectLMS, $password_connectLMS) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php

if (!isset($_SESSION)) {
  session_start();
}
?>

<?php
mysql_select_db($database_connectLMS, $connectLMS);
mysql_query("set names gb2312");
$loginUserID=$_POST['userid'];
$loginUserName=$_POST['username'];
$password=$_POST['userpasswordone'];
$manager=$_POST['usermanager'];
$admin=$_POST['useradmin'];
$email=$_POST['useremail'];
$telephone=$_POST['usertelephone'];
$type="User";
$MM_RegistFail="userregist.php";
$MM_RegistSuccess="index1.php";
$LoginRS__query=sprintf("SELECT user_ID FROM user WHERE user_ID='%s'",get_magic_quotes_gpc() ? $loginUserID : addslashes($loginUserID)); 
$LoginRS = mysql_query($LoginRS__query, $connectLMS) or die(mysql_error());
$loginFoundUser = mysql_num_rows($LoginRS);
if ($loginFoundUser) {
	echo "<script language='javascript'>showfalse()</script>";
}
else
{
  $LoginRS__query="INSERT INTO user VALUES ";
	if (!get_magic_quotes_gpc())
	{
	    addslashes($loginUserID);
	    addslashes($loginUserName);
	    addslashes($password);
	    addslashes($manager);
	    addslashes($admin);
	    addslashes($email);
	    addslashes($telephone);
	    addslashes($type);
	}
  $LoginRS__query = $LoginRS__query."('".$loginUserID."','".$loginUserName."','".$password."','".$manager."','".$admin."','".$type."','".$telephone."','".$email."')";
  $LoginRS = mysql_query($LoginRS__query, $connectLMS) or die(mysql_error());
  echo "<script language='javascript'>showsuccess()</script>";
}
mysql_close($connectLMS);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="favicon.ico" />
<title>用户注册</title>
<link href="lms.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
  <tr height="256">
    <td colspan="6"><img src="pics/banner.png" alt="banner" width="796" height="254"></td>
  </tr>
</table>
</center>
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" align="center">
  	<img src="pics/position.png" alt="position" width="16" height="16" align="absmiddle">&nbsp;你的位置	</td>
        <td><img src="pics/rightdir.png" alt="rightdir" width="16" height="16" align="absmiddle"><a href="userregist.php">[&gt;  用户注册&lt;]</a></td>
	</tr>
</table>
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