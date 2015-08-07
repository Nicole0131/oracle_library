<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎访问甲骨文公司图书馆</title>
    <!--   -->
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


<body> 

<div id="Layer1" style="position:absolute; width:100%; height:151%; z-index:-100">    
<img id="kk" src="assets/images/bg2.jpg" height="151%" width="100%"/>    
</div>


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
    </table>
    <br>


        <!-- Search Function -->
        <table border="0" width="800">
            <form action="searchprocess.php" method="post" name="booksearch" onSubmit="return affirm();">
                <!-- onSubmit="return validateform( this.form )"> -->
                <tr align='center'>
<!--
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="name" class="mdl-textfield__input" type="text" name="bookname" id="bookName"/>
                            <label class="mdl-textfield__label" for="bookName">书名</label>
                        </div>
                    </td>

                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="author" class="mdl-textfield__input" type="text" name="author" id="authorName"/>
                            <label class="mdl-textfield__label" for="authorName">作者</label>
                        </div>
                    </td>
-->
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="keyword" class="mdl-textfield__input" type="text" name="keyword" id="keywordName"/>
                            <label class="mdl-textfield__label" for="keywordName">Keyword</label>
                        </div>
                    </td>
                    <!--
                        <table border="0" width="1080">

                    -->
                    <td><input type="image" src="./assets/images/Search.png" height="35" align='left'></td>
                </tr>
            </form>
	    <script>
		function affirm()
		{
		    var a = document.getElementById("name");
		    var b = document.getElementById("author");
		    var c = document.getElementById("keyword");
		    if(a.value == "" && b.value == "" && c.value =="")
		    {
			return false;
		    }
		    else return true;
		}
	    </script>
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

        <div class="container">
            <table class="table">
                <tr>
                    <td width="250" align="left" colspan="3">
                        <img src="pics/date.png" width="16" height="16" align="left">
                        <?php
                        $day = date("Y-m-d");
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
                        条记录[每页30条]&nbsp;&nbsp;&nbsp;&nbsp;<br>
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
                    $bookname = $data['BookName'];
                    $bookauthor = $data['Author'];
                    $bookpress = $data['Publisher'];
                    $booktype = $data['Status'] =="available" ? "在架":"借出";
                    $bookid = $data['ID'];
		    
    		    if (!$result) {
        		die('Invalid query: ' . mysql_error());
    		    }
                    ?>

                    <tr>
                        <td align="center"><?php echo "$bookid" ?></td>
                        <td align="center"><?php echo "$bookname" ?></td>
                        <td align="center"><?php echo "$bookauthor" ?></td>
                        <td align="center"><?php echo "$bookpress" ?></td>
                        <td align="center"><?php echo "$booktype" ?></td>
                      <!--  <td align="center">
                            <a href="bookinfo.php?bookid=<?php echo "$bookid" ?>">
                                <img src="assets/images/info_icon.png" alt="显示详细信息" border="0" width="34"
                                     height="34"></a>
                        </td> --> 
                        <td  align="center">
				<?php
				if ($booktype=="借出"){
					$query1 = "select ReturnDay from record where book_ID='$bookid'";
            				$result1 = mysql_query($query1);
					mysql_data_seek($result1, 0);
                    			$data1 = @mysql_fetch_array($result1);
					$returnday=$data1['ReturnDay'];
					$day_list=explode("-",$day);
					$returnday_list=explode("-",$returnday);
					$d1=mktime(0,0,0,$day_list[1],$day_list[2],$day_list[0]);
					$d2=mktime(0,0,0,$returnday_list[1],$returnday_list[2],$returnday_list[0]);
					$days=round(($d2-$d1)/3600/24);
					if ($days<=0)
						echo "剩余 0 天";
				
					else echo "剩余 $days 天";
						
				}
				else{
					echo "<a href='borrow.php?bookid=$bookid'>借阅</a>";
				}
                        	?>




                        <!--    <a  href="borrow.php?bookid=<?php echo "$bookid" ?>">借阅</a>
                                <img src="assets/images/Book_icon.png" alt="借阅" border="0" width="34" height="34"> 
				else
				{
					var a=document.createElement("a");
					a.href="borrow.php?bookid=<?php echo "$bookid" ?>";
					a.innerHTML="借阅";
					document.body.appendChild(a);
				}


				$j = 0;
					$querya = "select * from record where book_ID='$bookid'";
            				$resulta = mysql_query($querya);
					$rowsa = mysql_num_rows($resulta);
					mysql_data_seek($resulta, $j);
                    			$data1 = @mysql_fetch_array($resulta);
					$returnday=$data1['ReturnDay'];
					echo "$returnday";-->
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
                        echo "<a href='library_v2.php?page_no=1'>首页</a>";
                        echo "&nbsp;";
                        echo "<a href='library_v2.php?page_no=" . ($page_no - 1) . "'>上一页</a>";
                        echo "&nbsp;";
                        echo "<span style=\"color:#454545\">第" . $page_no . "页 [共" . $page_total . "页]</span>";
                        echo "&nbsp;";
                        echo "<a href='library_v2.php?page_no=" . ($page_no + 1) . "'>下一页</a>";
                        echo "&nbsp;";
                        echo "<a href='library_v2.php?page_no=" . $page_total . "'>尾页</a>";
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
    <!--
        <table border="0">
            <tr>
                <td>
                    <img src="./assets/images/bg5.jpg" width="1080" height="250">
                </td>


            </tr>
        </table>
        -->
</div>

<script>
function change(){   
    var myDate = new Date();   
    flag = myDate.getDate();          
    flag = myDate.getMinutes();    
    var img1= document.getElementById('kk'); 
    flag = flag%5+1; 
    img1.src="assets/images/bg"+flag+".jpg";   

    window.setTimeout(function(){change()},1000);
}   
change();
</script>

</body>

</html>
