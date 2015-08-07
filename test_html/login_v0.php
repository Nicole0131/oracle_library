<?php
$hostname_connectLMS = "localhost";
$database_connectLMS = "db_library";
$username_connectLMS = "root";
$password_connectLMS = "19963";
$connectLMS = mysql_pconnect($hostname_connectLMS, $username_connectLMS, $password_connectLMS) or trigger_error(mysql_error(), E_USER_ERROR);
?>
<?php

if (!isset($_SESSION)) {
    session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
    $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}
if (isset($_POST['username'])) {
    $loginUsername = $_POST['username'];
    $password = $_POST['password'];
    $MM_fldUserAuthorization = "u_type";
    $MM_redirectLoginSuccess = "library.php";
    $MM_redirectLoginFailed = "error.php";
    $MM_redirecttoReferrer = false;
    mysql_select_db($database_connectLMS, $connectLMS);

    $LoginRS__query = sprintf("SELECT user_ID, user_PassWord, user_Type FROM user WHERE user_ID='%s' AND user_PassWord='%s'",
        get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password));
    $LoginRS = mysql_query($LoginRS__query, $connectLMS) or die(mysql_error());
    $loginFoundUser = mysql_num_rows($LoginRS);
    if ($loginFoundUser) {
        $loginStrGroup = mysql_result($LoginRS, 0, 'user_Type');

        //declare two session variables and assign them
        $_SESSION['MM_Username'] = $loginUsername;
        $_SESSION['MM_UserGroup'] = $loginStrGroup;
        mysql_close($connectLMS);
        if (isset($_SESSION['PrevUrl']) && false) {
            $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];
        }
        header("Location: " . $MM_redirectLoginSuccess);
    } else {
        header("Location: " . $MM_redirectLoginFailed);
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>用户登陆</title>
    <script>
        <!--
        function validateform() {
            if (document.checkuser.username.value == "") {
                window.alert("请输入你的登录名!")
                return false;
            }
            if (document.checkuser.password.value == "") {
                window.alert("密码不能为空!")
                return false;
            }
        }
        //-->
    </script>
</head>
<body bgcolor="172232">
<br/>
<br/>
<br/>
<br/>
<br/>

<div align="center">
    <font color="red" size="3"> 用户登陆 </font>

    <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" name="checkuser"
          onSubmit="return validateform( this.form )">
        <table border="1" bgcolor="#C0DEED">
            <tr>
                <td>
                    登录名:
                </td>
                <td>
                    <input type="text" name="username" size="20"/>
                    <font color="#8080C0">*</font>
                </td>
            </tr>
            <!--*********************************-->

            <tr>
                <td>
                    密 码:
                </td>
                <td>
                    <input type="password" name="password" size="20"/>
                    <font color="#8080C0">*</font>
                </td>
            </tr>
            <!--*********************************-->

            <!--*********************************-->

            <tr>
                <td colspan="2" align="center">
                    <input type="reset" value="重置"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="提交"/>
                </td>
            </tr>
        </table>
        <a href="logout.php"></a>
    </form>
</div>
</body>
</html>
