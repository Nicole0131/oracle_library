<script>
<!--
function showexception()
	{
		window.alert ("��ͼ���ѱ����������ɾ������ɾ����Ӧ���ļ�¼!");
		window.location.href='recordmanage.php';
		return false;
	}
	function showsuccess()
	{
		window.alert ("ɾ���ɹ�!");
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