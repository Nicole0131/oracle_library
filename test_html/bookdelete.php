<script>
<!--
function showexception()
	{
		window.alert ("该图书已被借出，如需删除请先删除相应借阅记录!");
		window.location.href='recordmanage.php';
		return false;
	}
	function showsuccess()
	{
		window.alert ("删除成功!");
		window.location.href='bookmanage.php';
		return true;
	}
/-->
</script>
<?php 
	$bookid = $_GET['bookid'];
	require_once "dbaccess.php";
	
	$query = "select * from record where book_ID='".$bookid."'";
	$result = mysql_query($query);
	$found=mysql_num_rows($result);
	if($found)
	{
		require_once "dbclose.php";
		echo "<script language='javascript'>showexception()</script>";
		exit;
	}
	$query = "delete from books where ID ='".$bookid."'";
	$result = mysql_query($query);
	if (!$result) {
    	die('Invalid query: ' . mysql_error());
	}else
	{
		echo "<script language='javascript'>showsuccess()</script>";
	}
	//require_once "freeresult.php";
	require_once "dbclose.php";
?>