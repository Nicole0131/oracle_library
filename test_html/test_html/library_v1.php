<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎访问甲骨文公司图书馆</title>

    <link rel="stylesheet" href="./assets/css/material.css"/>
    <script src="./assets/js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- Compiled and minified CSS
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     Compiled and minified JavaScript
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    -->
    <!--
        <link href="assets/css/jquery.dataTables.css" rel="stylesheet">
        <link h ref="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
    -->
    <!--<link href="lms.css" rel="stylesheet" type="text/css">-->
</head>
<!--<body background="assets/images/bb.jpg"> -->
<body bgcolor="#172232">


<div align="center">
    <!--Banner Picture-->
    <table border="0" width="1080">
        <tr>
            <td><img src="assets/images/Oracle_building.jpeg" width="1080" height="200"></td>
        </tr>
    </table>

    <!-- Login/Signup -->
    <table class="mdl-data-table" border="1" max-width="1080" bgcolor="#C0DEED" border-collapse="collapse">
        <tr height="30" width="1080">
            <td width="1080" align="right">
                <?php
                if (isset($_SESSION['MM_Username'])) {
                    $userid = $_SESSION['MM_Username'];
                    echo "<font size=\"3\"><b>欢迎登陆</b></font>";
                    echo "<a href=\"personal.php?userid=$userid\"><b>" . $_SESSION['MM_Username'] . "</b></a>";
                } else {
                    echo "<a href=\"login.php\"><b>登录</b></a>&nbsp;&nbsp;";
                    echo "<a href=\"userregist.php\"><b>注册</b></a>";
                }
                ?>
            </td>
        </tr>
    </table>

    <!-- Search Function -->
    <table class="mdl-data-table" border="0" width="1080">
        <form action="searchprocess.php" method="post" name="booksearch" >
              <!-- onSubmit="return validateform( this.form )"> -->
            <tr>
                <td>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="bookname" id="bookName"/>
                        <label class="mdl-textfield__label" for="bookName">书名</label>
                    </div>
                </td>

                <td>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="author" id="authorName"/>
                        <label class="mdl-textfield__label" for="authorName">作者</label>
                    </div>
                </td>
                <!--
                <td>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="keyword" id="keywordName"/>
                        <label class="mdl-textfield__label" for="keywordName">关键字</label>
                    </div>
                </td>
                -->
                <td ><input type="image" src="./assets/images/Search.png" height="35"></td>
            </tr>
        </form>

        <?php
        require_once "dbaccess.php";
        $query = "select * from books order by ID";
        $result = mysql_query($query);
        $rows_total = @mysql_num_rows($result);// 记下总行数

        @$page_no = $_GET['page_no'];

        $page_num = 30;//每页记录数
        $page_total = floor($rows_total / $page_num);//记下总页数
        if ($rows_total % $page_num != 0) {
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
        $sql = "select * from books ORDER BY ID ASC,Status ASC limit $start_num,$page_num";
        $result = mysql_query($sql);
        $rows = @mysql_num_rows($result);
        ?>
    </table>

    <table border="0" width="1080" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <hr size="1">
            </td>
        </tr>
    </table>

    <!-- Time Function -->
    <table class="mdl-data-table" border="0" bgcolor="#C0DEED">
        <tr>
            <td class="mdl-data-table__cell--non-numeric">
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
            <td align="right">
                共有
                <font color="#FF6600"><?php echo "$rows_total" ?></font>
                条记录[每页30条]&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
    </table>


    <!-- Book Table -->
    <!-- <table border="1" width="1080" bgcolor="#C0DEED"> -->
        <table class="mdl-data-table mdl-js-datatable mdl-shadow--2dp" width="1080">
            <thead>
            <tr>
                <th width="8%">
                    <div align="center">ID</div>
                </th>
                <th width="35%">
                    <div align="center">书名</div>
                </th>
                <th width="22%">
                    <div align="center">作者</div>
                </th>
                <th width="20%">
                    <div align="center">出版社</div>
                </th>
                <th width="7%">
                    <div align="center">状态</div>
                </th>
                <th width="8%" colspan="2">
                    <div align="center">操作</div>
                </th>
            </tr>
            </thead>
            <?php
            for ($i = 0;
                 $i < $rows;
                 $i++) {
                mysql_data_seek($result, $i);
                $data = @mysql_fetch_array($result);
                $bookname = $data['BookName'];
                $bookauthor = $data['Author'];
                $bookpress = $data['Publisher'];
                $booktype = $data['Status'];
                $bookid = $data['ID'];
                ?>

                <tr>
                    <td align="center"><?php echo "$bookid" ?></td>
                    <td class="mdl-data-table__cell--non-numeric align=" center
                    "><?php echo "$bookname" ?></td>
                    <td class="mdl-data-table__cell--non-numeric align=" center
                    "><?php echo "$bookauthor" ?></td>
                    <td class="mdl-data-table__cell--non-numeric align=" center
                    "><?php echo "$bookpress" ?></td>
                    <td class="mdl-data-table__cell--non-numeric align=" center
                    "><?php echo "$booktype" ?></td>

                    <!--
                    <td class="mdl-data-table__cell--non-numeric align=" center
                    ">
                    <a href="bookinfo.php?bookid=<?php echo "$bookid" ?>">
                        <img src="assets/images/info_icon.png" alt="显示详细信息" border="0"
                             height="25"></a>
                    </td>
                    -->
                    <td>

                        <a href="borrow.php?bookid=<?php echo "$bookid" ?>">
                            <img src="assets/images/letterB.png" alt="借阅" border="0" height="25"></a>
                    </td>
                </tr>
                <?php
            }
            require_once "dbclose.php";
            ?>
        </table>
    <br>
    <!-- Footpage Number Function -->
    <table class="mdl-data-table">
        <tr>
            <td class="mdl-data-table__cell--non-numeric">
                <?php
                echo "<a href='library_v1.php?page_no=1'>首页</a>";
                echo "&nbsp;";
                echo "<a href='library_v1.php?page_no=" . ($page_no - 1) . "'>上一页</a>";
                echo "&nbsp;";
                echo "第" . $page_no . "页 [共" . $page_total . "页]";
                echo "&nbsp;";
                echo "<a href='library_v1.php?page_no=" . ($page_no + 1) . "'>下一页</a>";
                echo "&nbsp;";
                echo "<a href='library_v1.php?page_no=" . $page_total . "'>尾页</a>";
                ?>
            </td>
        </tr>
    </table>

    <table border="0" width="1080" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <hr size="1">
            </td>
        </tr>
    </table>
    <table class="mdl-data-table" border="1" width="1080" height="50" cellspacing="0" cellpadding="0" bgcolor="#C0DEED"
           bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
        <tr>
            <td class="mdl-data-table__cell--non-numeric" height="23" style="font-size:10.5pt">版权所有(C)2015 大中华区甲骨文研究院
                E-Mail:<a href="mailto:oraclehcts@gmail.com">联系我们</a>
                <a href="library_old.php">怀念旧版</a>
                <a href="library_v1.php">新版V1</a></td>
        </tr>
    </table>
    <br><br>
</div>

</body>
</html>
