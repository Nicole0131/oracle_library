<?php
require_once "dbaccess.php";
$Query="select * from books join record on books.ID=record.book_ID join user on user.user_ID = record.user_ID";
$result = mysql_query($Query) or die(mysql_error());
$numbers = @mysql_num_rows($result);
$timenow=time();
for($i=0;$i<$numbers;$i++)
{
	mysql_data_seek($result,$i);
	$data = @mysql_fetch_array($result);
	$useremail=$data['user_Email'];
	$returnday=$data['ReturnDay'];
	$bookname=$data['BookName'];
	$username=$data['user_Name'];
	$returntime=strtotime($returnday);
	if($returntime<$timenow)
	{
		$subject=stripslashes("来自图书馆的一封信");
		$subject="=?GB2312?B?".base64_encode($subject)."?=";
		$headers="MIME-Version:1.0\r\n";
		$headers .="Content-type:text/html;charset=gb2312\r\n";
		$headers .="Content-Transfer-Encoding:8bit\r\n";		
		$content="尊敬的".$username.",您所借的图书《".$bookname."》已经到期，请您及时归还，感谢您对图书馆管理人员工作的支持与配合!";
		$content=stripslashes($content);
		mail($useremail,$subject,$content,$headers);
	}
}
?>