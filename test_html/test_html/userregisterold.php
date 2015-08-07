<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注册信息</title>
</head>
<body>
<?php
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
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}
?>
<script>
<!--
	function showfalse()
	{
		window.alert ("帐号已被注册，请更换帐号重新注册!")
		return false;
	}
	function showsuccess()
	{
		window.alert ("恭喜您，注册成功!")
		return true;
	}
//-->
</script>
<?php
mysql_select_db($database_connectLMS, $connectLMS);
$loginUserID=$_POST['userid'];
$loginUserName=$_POST['username'];
echo $loginUserName;
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
	showfalse();
	header( $MM_RegistFail );
}
else
{
	echo $loginUserName;
  $LoginRS__query=sprintf("INSERT INTO user VALUES %s,%s",$loginUserID, $loginUserName);
  echo $loginUserName; 
  $LoginRS = mysql_query($LoginRS__query, $connectLMS) or die(mysql_error());
        echo $loginUserName;
  showsuccess();
  header( $MM_RegistFail );
}
?>
</body>
</html>
