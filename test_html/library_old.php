<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="file:///D|/wamp/www/favicon.ico" />
<title>图书馆管理系统</title>
<link href="file:///D|/wamp/www/lms.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
  <tr height="256">
    <td colspan="6"><img src="pics/banner.png" width="796" height="254"></td>
  </tr>
</table>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
  <tr height="30" width="800">
  <td width="800" align = "right" >
  <?php
      if(isset($_SESSION['MM_Username']))
      {
	  $userid=$_SESSION['MM_Username'];
          echo "<font size=\"3\"><b>欢迎</b></font>";
          echo "<a href=\"personal.php?userid=$userid\"><b>".$_SESSION['MM_Username']."</b></a>";
      }
      else
      {
	   echo "<a href=\"userregist.php\"><font size=\"3\"><b>退出</b></font>";
      }
  ?>
  </td>
  </tr>
</table>
<table border="1" width="800" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
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
    <td width="130"><div class="button"><li><a href="borrowingrecordmanage.php"><b>预借管理</b></a></li>
    </div></td>
  </tr>
</table>
</center>
<center>
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" align="center">
	<img src="pics/date.png" width="16" height="16" align="absmiddle">
  	<?php
	  	$day = date("Y/m/d");
		print("$day&nbsp;");
		switch(date("D")){
			case "Mon":echo "星期一";
			break;
			case "Tue":echo "星期二";
			break;
			case "Wed":echo "星期三";
			break;
			case "Thu":echo "星期四";
			break;
			case "Fri":echo "星期五";
			break;
			case "Sat":echo "星期六";
			break;
			case "Sun":echo "星期日";
			break;	
		}
	?>
	</td>
    <td><marquee behavior="scroll" scrollamount="10" scrolldelay="200"><strong><font>欢迎！</font></strong></marquee></td>
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
		<td align="center" height="23" style="font-size:10.5pt">版权所有(C)2013 大中华区甲骨文研究院 
		E-Mail:<a href="#">联系我们</a>
		<a href="library.php">返回首页</a> </td>
	</tr>
	</table>
</center>
</body>
</html>
