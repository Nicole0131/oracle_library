<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <div align="center">
        <!--Banner Picture-->
        <table border="0" width="1080">
            <tr>
                <td><img src="assets/images/Oracle_building.jpeg" width="1080" height="200"></td>
            </tr>
        </table>
        <script>
            <!--
            function shownologin() {
                window.alert("您还未登录，请先登录!");
                window.location.href = 'login.php';
                return false;
            }
            function shownocompetence() {
                window.alert("目前只能借阅一本，请检查是否有图书尚未归还!");
                window.location.href = 'library.php';
                return true;
            }
            function shownothere() {
                window.alert("图书已被借出!");
                window.location.href = 'library.php';
                return true;
            }
            //-->
        </script>

        <?php
        session_start();
        $userid = $_SESSION['MM_Username'];
        $bookid = $_GET['bookid'];
        ?>

        <?php
        require_once "dbaccess.php";
        if (!isset($_SESSION['MM_Username'])) {
            echo "<script language='javascript'>shownologin()</script>";
            exit;
        }
        $bookId = $bookid;
        $loginUserID = $userid;
        $bookId = get_magic_quotes_gpc() ? $bookId : addslashes($bookId);
        #$bookId=$bookId;
        $LoginRS__query = sprintf("SELECT * FROM record WHERE user_ID='%s'", get_magic_quotes_gpc() ? $loginUserID : addslashes($loginUserID));
        $LoginRS = mysql_query($LoginRS__query) or die(mysql_error());
        $FoundUser = mysql_num_rows($LoginRS);
        if ($FoundUser) {
            require_once "dbclose.php";
            echo "<script language='javascript'>shownocompetence()</script>";
            exit;
        }
        $LoginRS__query = sprintf("SELECT * FROM record WHERE book_ID='%s'", get_magic_quotes_gpc() ? $bookId : addslashes($bookId));
        $LoginRS = mysql_query($LoginRS__query) or die(mysql_error());
        $FoundUser = mysql_num_rows($LoginRS);
        if ($FoundUser) {
            require_once "dbclose.php";
            echo "<script language='javascript'>shownothere()</script>";
            exit;
        }
        ?>

        <link rel="shortcut icon" href="favicon.ico"/>
        <title>图书借阅</title>
</head>
<body>
<table border="1" width="1080" height="30" cellspacing="0" cellpadding="0" bgcolor="#C0DEED"
       bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr>
        <td width="234" align="center">
            <img src="pics/position.png" width="16" height="16" align="absmiddle">&nbsp;你的位置
        </td>
        <td>
            &nbsp;&nbsp;<a href="library.php"><<返回主页</a>&nbsp;&nbsp;&nbsp;
            <img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a
                href="usermanage.php">图书借阅</a>&lt;]

        </td>

    </tr>
</table>


<?php
$borrowdate = date('Y-m-d');
$day = date('d');
$mounth = date('m');
$newdate = mktime(12, 0, 0, $mounth, $day + 21);
$returndate = date('Y-m-d', $newdate);
$LoginRS__query = sprintf("SELECT * FROM user WHERE user_ID='%s'", get_magic_quotes_gpc() ? $loginUserID : addslashes($loginUserID));
$result = mysql_query($LoginRS__query) or die(mysql_error());
$data = @mysql_fetch_array($result);
$adminName = $data['user_Admin'];
$LoginRS__query = sprintf("SELECT * FROM books WHERE ID='%s'", get_magic_quotes_gpc() ? $bookId : addslashes($bookId));
#$LoginRS__query=sprintf("SELECT * FROM books WHERE ID='%s'",$bookId); 
$result = mysql_query($LoginRS__query) or die(mysql_error());
$data = @mysql_fetch_array($result);
$bookName = $data['BookName'];
$_SESSION['Borrow_BookID'] = $bookId;
$_SESSION['Borrow_UserID'] = $loginUserID;
$_SESSION['Borrow_BorrowDate'] = $borrowdate;
$_SESSION['Borrow_ReturnDate'] = $returndate;
require_once "dbclose.php";
?>

<center>
    <form action="borrowing.php" method="post" name="borrowing">
        <table border="1" width="1080" height="30" cellspacing="0" cellpadding="0" bgcolor="#C0DEED"
               bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
            <tr>
                <td width="234" rowspan="10" align="center"><img src="pics/book.png" width="128" height="128"></td>
                <td>所借图书：<?php echo $bookName; ?></td>
            </tr>
            <tr>
                <td>借书日期：<?php echo $borrowdate; ?></td>
            </tr>
            <tr>
                <td>应还日期：<?php echo $returndate; ?></td>
            </tr>
            <tr>
                <td>管理员：<?php echo $adminName; ?></td>
            </tr>
            <tr>
                <td>
                    &nbsp;&nbsp;
                    <input type="submit" value="借阅此书"/>

                </td>
            </tr>

        </table>
</center>
<?php
require_once "dbclose.php";
?>
<table border="0" width="1080" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <hr size="1">
        </td>
    </tr>
</table>
<table border="1" width="1080" height="50" cellspacing="0" cellpadding="0" bgcolor="#C0DEED"
       bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr>
        <td align="center" height="23" style="font-size:10.5pt">版权所有(C)2015 大中华区甲骨文研究院
            E-Mail:<a href="mailto:oraclehcts@gmail.com">联系我们</a>
    </tr>
</table>
</div>
</body>
</html>