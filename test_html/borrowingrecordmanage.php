<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <title>借阅管理</title>
    <link href="lms.css" rel="stylesheet" type="text/css">
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $MM_authorizedUsers = "Admin,SuperAdmin";
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
        $MM_qsChar = "?";
        $MM_referrer = $_SERVER['PHP_SELF'];
        if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
        if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0)
            $MM_referrer .= "?" . $QUERY_STRING;
        $MM_restrictGoTo = $MM_restrictGoTo . $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
        header("Location: " . $MM_restrictGoTo);
        exit;
    }
    ?>

</head>
<body>
<center>
    <table border="1" width="900" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2"
           bordercolordark="#FFFFFF">
        <tr height="256">
            <td colspan="7"><img src="pics/banner.png" width="796" height="254"></td>
        </tr>
        <tr height="50">
            <td width="115">
                <div class="button">
                    <li><a href="library.php"><b>主页</b></a></li>
                </div>
            </td>
            <td width="115">
                <div class="button">
                    <li><a href="search.php"><b>检索图书</b></a></li>
                </div>
            </td>
            <td width="115">
                <div class="button">
                    <li><a href="login.php"><b>用户登入</b></a></li>
                </div>
            </td>
            <td width="115">
                <div class="button">
                    <li><a href="bookmanage.php"><b>图书管理</b></a></li>
                </div>
            </td>
            <td width="115">
                <div class="button">
                    <li><a href="usermanage.php"><b>用户管理</b></a></li>
                </div>
            </td>
            <td width="115">
                <div class="button">
                    <li><a href="recordmanage.php"><b>借阅管理</b></a></li>
                </div>
            </td>
            <td width="115">
                <div class="button">
                    <li><a href="borrowingrecordmanage.php"><b>预借管理</b></a></li>
                </div>
            </td>
        </tr>
    </table>
</center>
<center>
    <table border="1" width="900" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4"
           bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
        <tr>
            <td width="234" align="center">
                <img src="pics/position.png" width="16" height="16" align="absmiddle">&nbsp;你的位置
            </td>
            <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a href="recordmanage.php">借阅管理</a>&lt;]
            </td>
        </tr>
    </table>
</center>
<!--************************************************************-->
<div align="center">
    <center>
        <?php
        require_once "dbaccess.php";
        $query = "select * from books join record on books.ID = record.book_ID join user on user.user_ID = record.user_ID where books.Status = 'borrowing' order by books.ID asc ";
        $result = mysql_query($query);
        $rows_total = @mysql_num_rows($result);// 记下总行数

        @$page_no = $_GET['page_no'];

        $page_num = 20;//每页记录数
        $page_total = floor($rows_total / 20);//记下总页数
        if ($rows_total % 20 != 0) {
            $page_total = $page_total + 1;
        }
        if ($page_no > $page_total) {
            $page_no = $page_total;
        }
        if (!$page_no)//page_no空
        {
            $page_no = 1;
        }
        $start_num = $page_num * ($page_no - 1);//页号
        $sql = $query . " limit $start_num,$page_num";
        $result = mysql_query($sql);
        $rows = @mysql_num_rows($result);
        ?>

        <center>
            <table border="1" width="900" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2"
                   bordercolordark="#FFFFFF">
                <tr>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="pics/recordmanage.png" alt="借阅管理" width="50" height="50" align="absmiddle">
                        <strong><font color="#66CCFF" size="5">借阅管理</font></strong></td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong><font color="#66CCFF" size="5">导出备份</font></strong>
                        <a href="recordexport.php">
                            <img src="pics/recordexport.png" alt="导出备份" border="0" width="50" height="50"
                                 align="absmiddle"></a>
                    </td>
                </tr>
            </table>
        </center>
        <table border="1" width="900" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2"
               bordercolordark="#FFFFFF">
            <tr valign="bottom">
                <td width="30">&nbsp;</td>
                <td>
                    <div align="left">
                        &nbsp;&nbsp;
                        共有
                        <font color="#FF6600"><?php echo "$rows_total" ?></font>
                        条记录[每页20条]
                    </div>
                </td>
            </tr>
        </table>
        <center>
</div>

<div align="center">
    <table border="1" width="900" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2"
           bordercolordark="#FFFFFF">
        <tr>
            <td width="10%">
                <div align="center">姓名</div>
            </td>
            <td width="10%">
                <div align="center">联系电话</div>
            </td>
            <td width="10%">
                <div align="center">图书ID</div>
            </td>
            <td width="20%">
                <div align="center">所借图书</div>
            </td>
            <td width="12.5%">
                <div align="center">预借日期</div>
            </td>
            <!--<td width="12.5%">
                <div align="center">应还日期</div>
            </td>-->
            <td width="15%">
                <div align="center">管理员</div>
            </td>
            <td width="10%" colspan="3">
                <div align="center">操作</div>
            </td>
        </tr>
        <?php
        for ($i = 0; $i < $rows; $i++) {
            mysql_data_seek($result, $i);
            $data = @mysql_fetch_array($result);
            $username = $data['user_Name'];
            $tel = $data['user_Telephone'];
            $bname = $data['BookName'];
            $layout = $data['ReturnDate'];//added by Daijie on 2014/2/11
            //$returnday = $data['borrowingDate'];
            $admin = $data['user_Admin'];
            $userID = $data['user_ID'];
            $bookid = $data['ID'];//added by Daijie on 2014/2/11
            ?>

            <tr>
                <td width="10%">
                    <div align="center"><?php echo "$username" ?></div>
                </td>
                <td width="10%">
                    <div align="center"><?php echo "$tel" ?></div>
                </td>
                <td width="10%">
                    <div align="center"><?php echo "$bookid" ?></div>
                </td>
                <td width="20%">
                    <div align="center"><?php echo "$bname" ?></div>
                </td>
                <td width="12.5%">
                    <div align="center"><?php echo "$layout" ?></div>
                </td>
                <!--<td width="12.5%">
                    <div align="center"><?php echo "$returnday" ?></div>
                </td>-->
                <td width="15%">
                    <div align="center"><?php echo "$admin" ?></div>
                </td>


                <td width="11%">
                    <div align="center">
                        <a href="recorddelete.php?bookid=<?php echo "$bookid" ?>">
                            <img src="pics/delete.png" alt="删除" border="0" width="30" height="30"></a></div>
                </td>
				 <td width="11%">
                    <div align="center">
                       <a href="recordupdate.php?bookid=<?php echo "$bookid" ?>">
                            <img src="pics/success.png" alt="删除" border="0" width="30" height="30"></a></div>
                </td>
            </tr>
            <?php
        }
        require_once "dbclose.php";
        ?>
    </table>
    <table border="1" width="900" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2"
           bordercolordark="#FFFFFF">
        <tr>
            <td align="center">
                <?php
                echo "<a href='borrowingrecordmanage.php?page_no=1'>首页</a>";
                echo "&nbsp;";
                echo "<a href='borrowingrecordmanage.php?page_no=" . ($page_no - 1) . "'>上一页</a>";
                echo "&nbsp;";
                echo "第" . $page_no . "页 [共" . $page_total . "页]";
                echo "&nbsp;";
                echo "<a href='borrowingrecordmanage.php?page_no=" . ($page_no + 1) . "'>下一页</a>";
                echo "&nbsp;";
                echo "<a href='borrowingrecordmanage.php?page_no=" . $page_total . "'>尾页</a>";
                ?>
            </td>
        </tr>
    </table>
</div>
<center>
    <table border="0" width="900" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <hr size="1">
            </td>
        </tr>
    </table>
    <table border="1" width="8900" height="50" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4"
           bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
        <tr>
            <td align="center" height="23" style="font-size:10.5pt">版权所有(C)2013 北京市海淀区-甲骨文公司系统平台部
                E-Mail:<a href="#">联系我们</a>
                <a href="library.php">返回主页</a></td>
        </tr>
    </table>
</center>
</body>
</html>
