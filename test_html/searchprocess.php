<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico"/>
    <title>检索结果</title>
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
                <li><a href="library_v2.php"><div>Oracle BDC Book Library</div></a></li>
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
    </table>
    <br>
    <table border="0" width="800">
            <form action="searchprocess.php" method="post" name="booksearch">
                <!-- onSubmit="return validateform( this.form )"> -->
				
                <tr align="center"><!--
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
					-->
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="keyword" id="keywordName"/>
                            <label class="mdl-textfield__label" for="keywordName">关键字</label>
                        </div>
                    </td>
                    <!--
                        <table border="0" width="1080">

                    -->
                    <td><input type="image" src="./assets/images/Search.png" height="35" align = "lift"></td>
                </tr>
            </form>

            <!--     <form action="searchprocess.php" method="post" name="booksearch"
                  onSubmit="return validateform( this.form )">
                <tr height="30">
                    <td>书名:&nbsp;<input type="text" name="bookname" size="30"></td>
                    <td>作者:&nbsp;<input type="text" name="author" size="30"></td>
                    <td>关键字:&nbsp;<input type="text" name="keyword" size="30"></td>
                    <td><input type="submit" value=" 搜 索 "></td>
                </tr>
            </form>
            -->
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
            <tr>
                <td colspan="4">
                    <hr size="1">
                </td>
            </tr>
        </table>	


    <?php
    //@$bookname = $_POST['bookname'];
    //@$author = $_POST['author'];
    @$keyword = $_POST['keyword'];
    if ($keyword == "") {
        //@$bookname = $_GET['bookname'];
        //@$author = $_GET['author'];
        @$keyword = $_GET['keyword'];
    }
    require_once "dbaccess.php";
    //$querywhere = " where 1='1'";
   // if ($bookname != "") {
       // $querywhere = $querywhere . "and BookName=" . "\"" . $bookname . "\"";
      // $booknameQuery = 
    //}
    //if ($author != "") {
   //     $querywhere = $querywhere . "and Author like'%" . $author . "%'";
   // }
    //if ($keyword != "") {
   //     $querywhere = $querywhere . "and BookName like'%" . $keyword . "%'";
    //}
	$querywhere = "where ID like '%" . $keyword . "%'" . " or BookName like '%" . $keyword . "%'" . " or Author like'%" . $keyword . "%'" . " or Publisher like'%" . $keyword . "%'";
	
    $query = "select * from books " . $querywhere;
//	echo "<script type='text/javascript'>alert(\"$query\");</script>";
    $result = mysql_query($query);
    $rows_total = @mysql_num_rows($result);
    @$page_no = $_GET['page_no'];

    @$page_no = $_GET['page_no'];//每页记录数
    $page_num = 10;//每页记录数
    $page_total = floor($rows_total / 10);//记下总页数
    if ($rows_total % 10 != 0) {
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
                    <th width="5%">
                        <div align="center">ID</div>
                    </th>
                    <th width="35%">
                        <div align="center">书名</div>
                    </th>
                    <th width="20%">
                        <div align="center">作者</div>
                    </th>
                    <th width="20%">
                        <div align="center">出版社</div>
                    </th>
                    <th width="10%">
                        <div align="center">状态</div>
                    </th>
                    <th width="10%" >
                        <div align="center">操作</div>
                    </th>
                </tr>
 

		<?php
        	for ($i = 0; $i < $rows; $i++) {
            	mysql_data_seek($result, $i);
            	$data = @mysql_fetch_array($result);
            	$bookName = $data['BookName'];
            	$bookauthor = $data['Author'];
            	$bookpress = $data['Publisher'];
            	$booktype = $data['Status']=="available"? "在架":"借出";
            	$bookid = $data['ID'];
            	?>
		<tr>
                        <td align="center"><?php echo "$bookid" ?></td>
                        <td align="center"><?php echo "$bookName" ?></td>
                        <td align="center"><?php echo "$bookauthor" ?></td>
                        <td align="center"><?php echo "$bookpress" ?></td>
                        <td align="center"><?php echo "$booktype" ?></td>
                      <!--  <td align="center">
                            <a href="bookinfo.php?bookid=<?php echo "$bookid" ?>">
                                <img src="assets/images/info_icon.png" alt="显示详细信息" border="0" width="34"
                                     height="34"></a>
                        </td> -->
                        <td align="center">
                            <a href="borrow.php?bookid=<?php echo "$bookid" ?>">
                              <!--  <img src="assets/images/Book_icon.png" alt="借阅" border="0" width="34" height="34"> -->
                              借阅</a>
                        </td>
               	</tr>

		<?php
        	}
        	require_once "dbclose.php";
        	?>
    		</table>

    	   <table border="0" width="1080" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <?php
                	echo "<a href='library_v2.php'>首页</a>";
                	echo "&nbsp;";
	
                	echo "<a href='searchprocess.php?page_no=" . ($page_no - 1) . "'>上一页</a>";
                	echo "&nbsp;";
                	echo "第" . $page_no . "页 [共" . $page_total . "页]";
                	echo "&nbsp;";
                	echo "<a href='searchprocess.php?page_no=" . ($page_no + 1) . "&bookname=" . $bookName . "&author=" . $bookauthor . "&keyword=" . 		$keyword . "'>下一页</a>";

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
    <br>
    <br>
    <br>
    </div>
</body>
</html>


<!--
    < align="center">
    
    <table border="0" width="1080">
        <tr>
            <td><img src="assets/images/Oracle_building.jpeg" width="1080" height="200"></td>
        </tr>
    </table>

    <?php
    @$bookname = $_POST['bookname'];
    @$author = $_POST['author'];
    @$keyword = $_POST['keyword'];
    if (($bookname == "") && ($author == "") && ($keyword == "")) {
        @$bookname = $_GET['bookname'];
        @$author = $_GET['author'];
        @$keyword = $_GET['keyword'];
    }
    require_once "dbaccess.php";
    $querywhere = " where 1='1'";
    if ($bookname != "") {
        //$querywhere = $querywhere . "and BookName=" . "\"" . $bookname . "\"";
        $querywhere = $querywhere . "and BookName like '%" . $bookname . "%'";
    }
    if ($author != "") {
        $querywhere = $querywhere . "and Author like'%" . $author . "%'";
    }
    if ($keyword != "") {
        $querywhere = $querywhere . "and BookName like'%" . $keyword . "%'";
    }
    $query = "select * from books" . $querywhere;
    $result = mysql_query($query);
    $rows_total = @mysql_num_rows($result);
    @$page_no = $_GET['page_no'];

    @$page_no = $_GET['page_no'];//每页记录数
    $page_num = 10;//每页记录数
    $page_total = floor($rows_total / 10);//记下总页数
    if ($rows_total % 10 != 0) {
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
    <table border="1" width="1080" cellspacing="0" cellpadding="0" bgcolor="#C0DEED" bordercolorlight="#C2C2C2"
           bordercolordark="#FFFFFF">
        <tr>
            <td align="left"><a href="library.php"><<返回主页</a></td>
            <td align="right">
                    符合条件的记录有
                    <font color="#FF6600"><?php echo "$rows_total" ?></font>
                    条&nbsp;&nbsp;
            </td>
        </tr>
    </table>

    <table border="1" width="1080" cellspacing="0" cellpadding="0" bgcolor="#C0DEED" bordercolorlight="#C2C2C2"
           bordercolordark="#FFFFFF">
        <tr>
            <td width="5%">
                <div align="center">ID</div>
            </td>
            <td width="25%">
                <div align="center">书名</div>
            </td>
            <td width="20%">
                <div align="center">作者</div>
            </td>
            <td width="20%">
                <div align="center">出版社</div>
            </td>
            <td width="15%">
                <div align="center">状态</div>
            </td>
            <td width="15%" colspan="3">
                <div align="center">操作</div>
            </td>
        </tr>
        <?php
        for ($i = 0; $i < $rows; $i++) {
            mysql_data_seek($result, $i);
            $data = @mysql_fetch_array($result);
            $bookName = $data['BookName'];
            $bookauthor = $data['Author'];
            $bookpress = $data['Publisher'];
            $booktype = $data['Status'];
            $bookid = $data['ID'];
            ?>

            <tr height="30">
                <td width="5%">
                    <div align="center"><?php echo "$bookid" ?></div>
                </td>
                <td width="25%">
                    <div align="center"><?php echo "$bookName" ?></div>
                </td>
                <td width="20%">
                    <div align="center"><?php echo "$bookauthor" ?></div>
                </td>
                <td width="20%">
                    <div align="center"><?php echo "$bookpress" ?></div>
                </td>
                <td width="15%">
                    <div align="center"><?php echo "$booktype" ?></div>
                </td>
                <td width="5%">
                    <div align="center" class="button">
                        <li><a href="borrow.php?bookid=<?php echo "$bookid" ?>"><b>借阅</b></a></li>
                    </div>
                </td>
            </tr>
            <?php
        }
        require_once "dbclose.php";
        ?>
    </table>

    <table border="1" width="1080" cellspacing="0" cellpadding="0" bgcolor="#C0DEED" bordercolorlight="#C2C2C2"
           bordercolordark="#FFFFFF">
        <tr>
            <td align="center">
                <?php
                echo "<a href='searchprocess.php?page_no=1'>首页</a>";
                echo "&nbsp;";
                echo "<a href='searchprocess.php?page_no=" . ($page_no - 1) . "'>上一页</a>";
                echo "&nbsp;";
                echo "第" . $page_no . "页 [共" . $page_total . "页]";
                echo "&nbsp;";
//                echo "<a href='searchprocess.php?page_no=" . ($page_no + 1) . "&bookname=" . $bookname . "&author=" . $author . "&keyword=" . $keyword . "'>下一页</a>"; 
                echo "<a href='searchprocess.php?page_no=" . ($page_no + 1) . "&keyword=" . $keyword . "'>下一页</a>"; 
                echo "&nbsp;";
                echo "<a href='searchprocess.php?page_no=" . $page_total . "'>尾页</a>";
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
-->
