<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "User,Admin,SuperAdmin";
$MM_donotCheckaccess = "false";
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
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
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" />
<title>检索图书</title>
<link href="lms.css" rel="stylesheet" type="text/css">
<script>
<!--
	function validateform()
	{
		if(document.booksearch.bookname.value == "" && document.booksearch.author.value == "" && document.booksearch.keyword.value == "")
		{
			window.alert ("请输入你要搜索的信息!")
			return false;
		}
	}
//-->
</script>
</head>
<body>
<center>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
  <tr height="256">
    <td colspan="6"><img src="pics/banner.png" width="796" height="254"></td>
  </tr>
  <tr height="50">
    <td width="100"><div class="button"><li><a href="library.php"><b>主页</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="search.php"><b>检索图书</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="login.php"><b>用户登入</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="bookmanage.php"><b>图书管理</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="usermanage.php"><b>用户管理</b></a></li>
    </div></td>
    <td width="130"><div class="button"><li><a href="recordmanage.php"><b>借阅管理</b></a></li>
    </div></td>
  </tr>
</table>
</center>
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" align="center">
  	<img src="pics/position.png" width="16" height="16" align="absmiddle">&nbsp;你的位置	</td>
    <td><img src="pics/rightdir.png" width="16" height="16" align="absmiddle">[&gt;<a href="search.php">检索图书</a>&lt;]</td>
	</tr>
</table>
</center>

<center>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="pics/booksearch.png" alt="检索图书" width="50" height="50" align="absmiddle">
	<strong><font color="#66CCFF" size="5">检索图书</font></strong>	</td>
</table>
</center>
<!--***************************************************************-->
<center>
 <table border="0" width="800" cellspacing="0" cellpadding="0">
  	<tr>
	<td width="100%">
<form action="searchprocess.php" method="post" name="booksearch" onSubmit="return validateform( this.form )">
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr height="30">
	<td>书名:<input type="text" name="bookname" size="20"></td>
	<td>作者:<input type="text" name="author" size="30"></td>
	<td>关键字:<input type="text" name="keyword" size="30"></td>
	<td><input type="submit" value=" 搜 索 "></td>
	</tr>
</table>
</form>
	</td>
	</tr>
</table>
</center>
<div align="center">
<center>
	<?php
		require_once "dbaccess.php";
		$query = "select * from books order by ID";
		$result = mysql_query($query);
		$rows_total = @mysql_num_rows($result);// 记下总行数
	
		@$page_no = $_GET['page_no'];
		
		$page_num = 25;//每页记录数
		$page_total = floor($rows_total/25);//记下总页数
		if($rows_total%25!=0)
		{
			$page_total=$page_total+1;
		}
		if($page_no>$page_total)
		{
			$page_no = $page_total;
		}
		if(!$page_no)//page_no空
		{
			$page_no = 1;
		}
		$start_num = $page_num * ($page_no-1);//页号
		$sql = "select * from books ORDER BY ID ASC,Status ASC limit $start_num,$page_num";
		$result = mysql_query($sql);
		$rows = @mysql_num_rows($result);
	?>
</center>
</tr>
<tr>	
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
    <tr valign="bottom">
	<td width="30">
	&nbsp;
        </td>
        <td>
	<div align="left">
	共有
	<font color="#FF6600"><?php echo "$rows_total"?></font>
	条记录[每页25条]
	</div>
	</td>
	</tr>
</table>
</tr>
</table>
</center>
<center>
</div>
<center>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
<tr>
	<td width="5%"><div align="center">ID</div></td>
	<td width="25%"><div align="center">书名</div></td>
	<td width="20%"><div align="center">作者</div></td>
	<td width="20%"><div align="center">出版社</div></td>
	<td width="15%"><div align="center">状态</div></td>
	<td width="15%" colspan="3"><div align="center">操作</div></td>
	</tr>
	<?php
		for($i=0;$i<$rows;$i++)
		{
			mysql_data_seek($result,$i);
			$data = @mysql_fetch_array($result);
			$bookname = $data['BookName'];
			$bookauthor = $data['Author'];
			$bookpress = $data['Publisher'];
			$booktype = $data['Status']=="available"?"在架":($data['Status']=="borrowed"?"借出":"预借");
			$bookid = $data['ID'];
	?>
	
	<tr>
	<td width="5%"><div align="center"><?php echo "$bookid" ?></div></td>
	<td width="25%"><div align="center"><?php echo "$bookname" ?></div></td>
	<td width="20%"><div align="center"><?php echo "$bookauthor" ?></div></td>
	<td width="20%"><div align="center"><?php echo "$bookpress" ?></div></td>
	<td width="15%"><div align="center"><?php echo "$booktype" ?></div></td>	
	<td width="5%"><div align="center">
	<a href="bookinfo.php?bookid=<?php echo "$bookid"?>">
	<img src="pics/bookview.png" alt="显示详细信息" border="0" width="34" height="34"></a></div></td>
	<td width="5%"><div align="center">
	<a href="borrow.php?bookid=<?php echo "$bookid"?>">
	<img src="pics/borrow.png" alt="借阅" border="0" width="34" height="34"></a></div></td>
	</tr>
	<?php
		}
		require_once "dbclose.php";
	?>
</table>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
<tr>
<td align="center">
<?php
echo "<a href='search.php?page_no=1'>首页</a>";
echo "&nbsp;";
echo "<a href='search.php?page_no=".($page_no-1)."'>上一页</a>";
echo "&nbsp;";
echo "第".$page_no."页 [共".$page_total."页]";
echo "&nbsp;";
echo "<a href='search.php?page_no=".($page_no+1)."'>下一页</a>";
echo "&nbsp;";
echo "<a href='search.php?page_no=".$page_total."'>尾页</a>";
?>
</td>
</tr>
</table>
</center>
<center>
	<table border="0" width="800" cellspacing="0" cellpadding="0">
	<tr>
		<td><hr size="1"></td>
	</tr>
	</table>
	<table border="1" width="800" height="50" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
		<td align="center" height="23" style="font-size:10.5pt">版权所有(C)2013 北京市海淀区-甲骨文公司系统平台部
		E-Mail:<a href="#">联系我们</a>
		<a href="library.php">返回主页</a>		</td>
	</tr>
	</table>
</center>
</body>
</html>
