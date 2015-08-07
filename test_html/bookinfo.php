<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <title>图书信息</title>
</head>

<body bgcolor="#172232">
<div align="center">
    <!--Banner Picture-->
    <table border="0" width="1080">
        <tr>
            <td><img src="assets/images/Oracle_building.jpeg" width="1080" height="200"></td>
        </tr>
    </table>

    <table border="0" width="1080" height="30" cellspacing="0" cellpadding="0" bgcolor="#C0DEED">
        <tr>
            <td width="234" align="center">
                <img src="pics/position.png" width="16" height="16" align="absmiddle">&nbsp;你的位置
            </td>
            <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[<a
                    href="bookmanage.php">图书管理</a>
                &nbsp;&nbsp;图书信息&nbsp;]
            </td>
            <td align="right">
                <a href="library.php">返回主页</a>&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
    </table>


    <?php
    $bookid = $_GET['bookid'];
    require_once "dbaccess.php";

    $query = "select * from books where ID='" . $bookid . "'";
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
                <td width="234" rowspan="10" align="center"><img src="pics/book.png" alt="用户照片" width="128"
                                                                 height="128"></td>
                <td>编号：<?php echo "$data[ID]" ?></td>
            </tr>
            <tr>
                <td>书名：<?php echo "$data[BookName]" ?></td>
            </tr>
            <tr>
                <td>作者：<?php echo "$data[Author]" ?></td>
            </tr>
            <tr>
                <td>出版社：<?php echo "$data[Publisher]" ?></td>
            </tr>
            <tr>
                <td>图书价格：<?php echo "未知" ?></td>
            </tr>
            <tr>
                <td>出版日期：<?php echo "未知" ?></td>
            </tr>
            <tr>
                <td>入馆日期：<?php echo "未知" ?></td>
            </tr>
            <tr>
                <td>状态：<?php echo "$data[Status]" ?></td>
            </tr>
            <tr>
                <td>简介：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "无" ?></td>
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