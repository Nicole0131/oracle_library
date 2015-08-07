<html>
<head>
    <meta charset="UTF-8">
    <script>

        function showsuccess() {
            window.alert("删除成功!");
            history.back();
            return true;
        }
        function showfalse() {
            window.alert("出错，请重新操作!");
            window.location.href = 'recordmanage.php';
            return false;
        }
        function shownopower() {
            window.alert("您不是SuperAdmin，没有权限删除借阅记录!");
            window.location.href = 'recordmanage.php';
            return false;
        }

    </script>

    <?php

    if (!isset($_SESSION)) {
        session_start();
    }
    $MM_authorizedUsers = "SuperAdmin";
    $MM_donotCheckaccess = "false";
    function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup)
    {
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
    if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("", $MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {
        echo "<script language='javascript'>shownopower()</script>";
        exit;
    }
    ?>
    <?php
    $bookid = $_GET['bookid'];
    require_once "dbaccess.php";
    $query = "select * from recordbak where book_ID = '".$bookid."';";
    $result = mysql_query($query);
    $data = mysql_fetch_array($result);
    $bookID = $data['book_ID'];
    require_once "dbclose.php";
    @ $link = mysqli_connect('localhost', 'root', '19963', 'db_library');
    mysqli_query($link, "set names utf8");
    if (mysqli_connect_errno()) {
        echo "<script language='javascript'>showfalse()</script>";
    }
    $query = "delete from recordbak where book_ID='".$bookid."';";
    //$query = $query."update books set Status=\"在架\" where ID='".$bookID."';";
    $result = mysqli_multi_query($link, $query);
    if (!$result) {
        die('Invalid query: '.mysql_error());
    } else {
        echo "<script language='javascript'>showsuccess()</script>";
    }
    mysqli_close($link);
    ?>
</head>
</html>
