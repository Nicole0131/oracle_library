<html>
<head>
    <meta charset="UTF-8">
    <script>
        <!--
        function showsuccess() {
            window.alert("借书成功，请联系本部门图书管理员取书!");
            window.location.href = 'library.php';
            return true;
        }
        function showfalse() {
            window.alert("出错，请重新操作!");
            window.location.href = 'search.php';
            return false;
        }
        //-->
    </script>
    <?php
    session_start();
    $bookID = $_SESSION['Borrow_BookID'];
    $userID = $_SESSION['Borrow_UserID'];
    $borrowDate = $_SESSION['Borrow_BorrowDate'];
    $returnDate = $_SESSION['Borrow_ReturnDate'];
    if (!get_magic_quotes_gpc()) {
        $bookID = addslashes($bookID);
        $userID = addslashes($userID);
        $borrowDate = addslashes($borrowDate);
        $returnDate = addslashes($returnDate);
    }

    $Query = "update books set Status=\"borrowed\" where ID='".$bookID."';";
    $Query = $Query."insert into record values('".$userID."','".$bookID."','".$borrowDate."','". $returnDate."');";
    @ $link = mysqli_connect('localhost', 'root', '19963', 'db_library');
    mysqli_query($link, "set names utf8");
    if (mysqli_connect_errno()) {
        echo "<script language='javascript'>showfalse()</script>";
    }
    $Result = mysqli_multi_query($link, $Query) or die(mysqli_error($link));
    if ($Result) {
        echo "<script language='javascript'>showsuccess()</script>";
    } else {
        echo "<script language='javascript'>showfalse()</script>";
    }
    mysqli_close($link);
    ?>
</head>
</html>
