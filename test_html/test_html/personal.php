<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico"/>
    <title>个人信息管理</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/material.css"/>
    <script src="assets/js/material.js"></script>
    <style>
        .table {
            background-color: white;
        }

        .dataTables_filter input {
            width: 300px;
        }
    </style>
</head>
<body background="assets/images/bg5.jpg">


<nav class="navbar navbar-static">
    <div class="container">
        <div class="nav-collapse collase">
            <ul class="nav navbar-nav">
                <li><img src="./assets/images/sunoracle.png" height="50"></li>
                <li><a href="library_v2.php">Book Library</a></li>
            </ul>
        </div>
    </div>
</nav>
<div align="center">
    <table border="0">
        <tr height="30" width="1080">
            <td width="1080" align="right">
                <?php
                if (isset($_SESSION['MM_Username'])) {
                    $userid = $_SESSION['MM_Username'];
                    echo "<font size=\"3\"><b>欢迎登陆</b></font>";
                    echo "<a href=\"personal.php?userid=$userid\"><b>" . $_SESSION['MM_Username'] . "</b></a>";
                } else {
                    echo "<a href=\"login.php\"><font size=\"3\"><b>登录</b></font>";
                    echo "&nbsp";
                    echo "<a href=\"userregist.php\"><font size=\"3\"><b>注册</b></font>";
                }
                ?>
            </td>
        </tr>
        <tr height="30" width="1080" align="right">
            <td width="1080" align="right"><a href="logout.php">退出登录</a></td>
        </tr>

        <br>
        <?php


        $link = mysqli_connect('localhost', 'root', '19963', 'db_library');
        $query_SuperAdmin_ID = "select user_ID from user where user_Type = 'SuperAdmin'";
        if ($result_SuperAdmin_ID = mysqli_query($link, $query_SuperAdmin_ID)) {
            while ($row = mysqli_fetch_assoc($result_SuperAdmin_ID)) {
                if ($row["user_ID"] == $userid) {
                    echo "<tr><td align='right'><a href='library_old.php'>Library Management Page</a></td></tr>";
                }//SuperAdmin
            }
        }
        mysqli_close($link);


        $userid = $_GET['userid'];
        require_once "dbaccess.php";
        $query = "select * from books join record on books.ID = record.book_ID join user on user.user_ID = record.user_ID where record.user_ID = ";
        $query = $query . "\"" . $userid . "\"";
        $result = mysql_query($query);
        $rows_total = @mysql_num_rows($result);// 记下总行数
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }
        $rows = mysql_num_rows($result);
        if ($rows != 0) {
        $rows = $rows - 1;
        mysql_data_seek($result, $rows);
        $data = @mysql_fetch_array($result);
        ?>
    </table>
    <div class="container">
        <table class="table">
            <tr>
                <td width="250" align="left" colspan="3">
                    <img src="pics/date.png" width="16" height="16" align="left">
                    <?php
                    $day = date("Y年m月d日");
                    print("$day&nbsp;");
                    switch (date("D")) {
                        case "Mon":
                            echo "星期一";
                            break;
                        case "Tue":
                            echo "星期二";
                            break;
                        case "Wed":
                            echo "星期三";
                            break;
                        case "Thu":
                            echo "星期四";
                            break;
                        case "Fri":
                            echo "星期五";
                            break;
                        case "Sat":
                            echo "星期六";
                            break;
                        case "Sun":
                            echo "星期日";
                            break;
                    }
                    ?>
                </td>
                <td align="right" colspan="3">
                    共有
                    <font color="#FF6600"><?php echo "$rows_total" ?></font>
                    条记录&nbsp;&nbsp;&nbsp;&nbsp;<br>
                </td>
            </tr>

            <tr>
                <th width="20%">
                    <div align="center">所借图书</div>
                </th>
                <th width="20%">
                    <div align="center">借出日期</div>
                </th>
                <th width="20%">
                    <div align="center">应还日期</div>
                </th>
                <th width="20%">
                    <div align="center">管理员</div>
                </th>
                <th width="10%">
                    <div align="center">经理</div>
                </th>
                <th width="10%">
                    <div align="center">操作</div>
                </th>
            </tr>
            <?php
            $i = 0;
            mysql_data_seek($result, $i);
            $data = @mysql_fetch_array($result);
            $username = $data['BookName'];
            $tel = $data['Layout'];
            $bname = $data['ReturnDay'];
            $returnday = $data['user_Admin'];
            $manager = $data['user_Manager'];
            ?>
            <tr>
                <td align="center"><?php echo "$username" ?></td>
                <td align="center"><?php echo "$tel" ?></td>
                <td align="center"><?php echo "$bname" ?></td>
                <td align="center"><?php echo "$returnday" ?></td>
                <td align="center"><?php echo "$manager" ?></td>
                <!--  <td align="center">
                            <a href="bookinfo.php?bookid=<?php echo "$bookid" ?>">
                                <img src="assets/images/info_icon.png" alt="显示详细信息" border="0" width="34"
                                     height="34"></a>
                        </td> -->
                <td width="10%">
                    <div align="center">
                       <!-- <a href="continue.php?userid=<?php echo "$userid" ?>">--</a></div>-->
                </td>
            </tr>
        </table>

        <?php
        }else {
        ?>
        <div class="container">
            <table class="table">
                <tr>
                    <td width="250" align="left" colspan="3">
                        <img src="pics/date.png" width="16" height="16" align="left">
                        <?php
                        $day = date("Y年m月d日");
                        print("$day&nbsp;");
                        switch (date("D")) {
                            case "Mon":
                                echo "星期一";
                                break;
                            case "Tue":
                                echo "星期二";
                                break;
                            case "Wed":
                                echo "星期三";
                                break;
                            case "Thu":
                                echo "星期四";
                                break;
                            case "Fri":
                                echo "星期五";
                                break;
                            case "Sat":
                                echo "星期六";
                                break;
                            case "Sun":
                                echo "星期日";
                                break;
                        }
                        ?>
                    </td>
                    <td align="right" colspan="3">
                        共有
                        <font color="#FF6600"><?php echo "$rows_total" ?></font>
                        条记录&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    </td>
                </tr>

                <tr>
                    <td align="center" colspan="12">
                        您还没有借书，快去<a href="library.php">主页</a>借书吧
                    </td>
                </tr>
            </table>

            <?php
            }
            //require_once "freeresult.php";
            require_once "dbclose.php";
            ?>
            <table border="0" width="1080" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <?php
                        echo "<a href='library_v2.php'>返回首页</a>";
                        echo "&nbsp;";


                        echo "&nbsp;";
                        ?>
                    </td>

                </tr>
                <tr>
                    <td>
                        <hr size="1">
                    </td>
                </tr>
            </table>

            <table class="table">
                <tr>
                    <td align="center" height="23" style="font-size:10.5pt">版权所有(C)2015 大中华区甲骨文研究院
                        E-Mail:<a href="mailto:oraclehcts@gmail.com">联系我们</a>
                        <a href="library.php">怀念旧版</a>
                        <a href="library_v1.php">新版V1</a>
                        <a href="library_v2.php">新版V2</a>
                    </td>
                </tr>
            </table>

        </div>

</body>
</html>

<!--
<div align="center">
    <table border="0" width="1080">
        <tr>
            <td><img src="assets/images/Oracle_building.jpeg" width="1080" height="200"></td>
        </tr>
    </table>
    <table border="1" width="1080" height="30" cellspacing="0" cellpadding="0" bgcolor="#C0DEED"
           bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
        <tr>
            <td width="234" align="center">
                <img src="pics/position.png" width="16" height="16" align="absmiddle">&nbsp;你的位置
            </td>
            <td>&nbsp;&nbsp;<a href="library.php"><
                    <返回主页
                </a>&nbsp;&nbsp;&nbsp;
                <img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a
                    href="usermanage.php">个人信息管理</a>&lt;]
            </td>
            
        </tr>
    </table>

    <?php
$userid = $_GET['userid'];
require_once "dbaccess.php";
$query = "select * from books join record on books.ID = record.book_ID join user on user.user_ID = record.user_ID where record.user_ID = ";
$query = $query . "\"" . $userid . "\"";
$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
$rows = mysql_num_rows($result);
if ($rows != 0) {
    $rows = $rows - 1;

    mysql_data_seek($result, $rows);
    $data = @mysql_fetch_array($result);
    ?>
        <table border="1" width="1080" height="30" cellspacing="0" cellpadding="0" bgcolor="#C0DEED"
               bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
            <tr>
                <td width="15%">
                    <div align="center">所借图书</div>
                </td>
                <td width="20%">
                    <div align="center">借出日期</div>
                </td>
                <td width="20%">
                    <div align="center">应还日期</div>
                </td>
                <td width="15%">
                    <div align="center">管理员</div>
                </td>
                <td width="15%">
                    <div align="center">经理</div>
                </td>
                <td width="15%" colspan="3">
                    <div align="center">操作</div>
                </td>
            </tr>
            <?php
    $i = 0;
    mysql_data_seek($result, $i);
    $data = @mysql_fetch_array($result);
    $username = $data['BookName'];
    $tel = $data['Layout'];
    $bname = $data['ReturnDay'];
    $returnday = $data['user_Admin'];
    $manager = $data['user_Manager'];
    ?>

            <tr>
                <td width="15%">
                    <div align="center"><?php echo "$username" ?></div>
                </td>
                <td width="20%">
                    <div align="center"><?php echo "$tel" ?></div>
                </td>
                <td width="20%">
                    <div align="center"><?php echo "$bname" ?></div>
                </td>
                <td width="15%">
                    <div align="center"><?php echo "$returnday" ?></div>
                </td>
                <td width="15%">
                    <div align="center"><?php echo "$manager" ?></div>
                </td>


                <td width="10%">
                    <div align="center">
                        <a href="continue.php?userid=<?php echo "$userid" ?>">续借</a></div>
                </td>
            </tr>
        </table>
        <?php
} else {
    ?>
        <table border="1" width="1080" bgcolor="#C0DEED">
            <tr>
                <td align="center">
                    您还没有借书，快去<a href="library.php">主页</a>借书吧：）
                </td>
            </tr>
        </table>
    <?php
}
//require_once "freeresult.php";
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
--!>
