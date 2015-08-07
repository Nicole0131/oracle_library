<html>
<head>
    <meta charset="UTF-8">
    <script>
        <!--
        function showsuccess(userid) {
            window.alert("续借成功!");
            window.location.href = 'personal.php?userid=' + userid;
            return false;
        }
        function showfail(userid) {
            window.alert("该图书已经续借过一次，请归还重新借阅!");
            window.location.href = 'personal.php?userid=' + userid;
            return true;
        }
        function shownotnecessary(userid) {
            window.alert("尚未到归还时间，无需续借!");
            window.location.href = 'personal.php?userid=' + userid;
            return true;
        }
        //-->
    </script>
    <?php
    require_once "dbaccess.php";
    $userid = $_GET['userid'];
    $Query = "SELECT * FROM record WHERE user_ID='".$userid."'";
    $result = mysql_query($Query) or die(mysql_error());
    $data = @mysql_fetch_array($result);
    $borrowtime = $data['Layout'];
    echo $borrowtime;
    $borrowtimeU = strtotime($borrowtime);
    $day = date('d', $borrowtimeU);
    $mounth = date('m', $borrowtimeU);
    $olddate = mktime(12, 0, 0, $mounth, $day + 18);
    $newdate = mktime(12, 0, 0, $mounth, $day + 42);
    $returndate = date('Y-m-d', $newdate);
    $timestamp = time();
    if (($newdate > $timestamp) && ($timestamp > $olddate)) {
        $Update = "update record 	set ReturnDay='".$returndate."' where user_ID='".$userid."'";
        $result = mysql_query($Update) or die(mysql_error());
        echo "<script language='javascript'>showsuccess($userid)</script>";
    } elseif ($olddate > $timestamp) {
        echo "<script language='javascript'>shownotnecessary($userid)</script>";
    } else {
        echo "<script language='javascript'>showfail($userid)</script>";
    }
    require_once "dbclose.php";
    ?>
</head>
</html>
