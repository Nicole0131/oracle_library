<script>
<!--
	function validateform()
	{
		if(document.userregist.userid.value == "")
		{
			window.alert ("�����������ʺ�!")
			return false;
		}
		if(document.userregist.username.value == "")
		{
			window.alert ("��������������!")
			return false;
		}
		if(document.userregist.userpasswordone.value == "")
		{
			window.alert ("���벻��Ϊ��!")
			return false;
		}
		if(document.userregist.userpasswordtwo.value == "")
		{
			window.alert ("���벻��Ϊ��!")
			return false;
		}
		if(document.userregist.usermanager.value == "")
		{
			window.alert ("���������ľ���!")
			return false;
		}
		if(document.userregist.useradmin.value == "")
		{
			window.alert ("���������Ĺ���Ա!")
			return false;
		}
		if(document.userregist.useremail.value == "")
		{
			window.alert ("��������������!")
			return false;
		}
		if(document.userregist.usertelephone.value == "")
		{
			window.alert ("��������ĵ绰!")
			return false;
		}
	}
//-->
</script>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign in</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
     <link href="assets/css/styles.css" rel="stylesheet">
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/material.css"/>
    <script src="assets/js/material.js"></script>
    <style>
	body{color:#FFFFFF}
	.form-signin {
	    max-width: 330px;
	    padding: 15px;
	    margin: 0 auto;
	}
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
                <li><a href="library_v2.php">Oracle BDC Book Library</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="margin-top:100px" align="center">	
  <form class="form-horizontal" ACTION="userregister.php" METHOD="POST" name="userregist" onSubmit="return validateform( this.form )">
    <h2 class="form-signin-heading" >Sign in</h2>
    <div class="form-group" >
	<label for="username" class="col-sm-offset-2 col-sm-2 control-label">Username *</label>
	<div class="col-sm-4">
    		<input type="text" name="username" class="form-control" placeholder="Username" id="username">
		
	</div>
	<div class="col-sm-2">
		<span class="help-inline">less then 20 characters</span>
	</div>
    </div>
    <div class="form-group">
	<label for="name" class="col-sm-offset-2 col-sm-2 control-label">Name *</label>
	<div class="col-sm-4">
    		<input type="text" name="name" class="form-control" placeholder="Name" id="name">
	</div>
	<div class="col-sm-2">
		<span class="help-inline">less then 20 characters</span>
	</div>
    </div>
    <div class="form-group">
	<label for="password" class="col-sm-offset-2 col-sm-2 control-label">Password *</label>
	<div class="col-sm-4">
    		<input type="text" name="userpasswordone" class="form-control" placeholder="Password" id="password">
	</div>
	<div class="col-sm-2">
		<span class="help-inline">less then 20 characters</span>
	</div>
    </div>
    <div class="form-group">
	<label for="password2" class="col-sm-offset-2 col-sm-2 control-label">Password again *</label>
	<div class="col-sm-4">
    		<input type="text" name="userpasswordtwo" class="form-control" placeholder="Password" id="password2">
	</div>
    </div>
    <div class="form-group">
	<label for="manager" class="col-sm-offset-2 col-sm-2 control-label">Manager</label>
	<div class="col-sm-4">
    		<input type="text" name="usermamager" class="form-control" placeholder="Manager" id="manager">
	</div>
    </div>
    <div class="form-group">
	<label for="admin" class="col-sm-offset-2 col-sm-2 control-label">Administrator</label>
	<div class="col-sm-4">
    		<input type="text" name="useradmin" class="form-control" placeholder="Administrator" id="admin">
	</div>
    </div>
    <div class="form-group">
	<label for="email" class="col-sm-offset-2 col-sm-2 control-label">Email *</label>
	<div class="col-sm-4">
    		<input type="text" name="useremail" class="form-control" placeholder="Email" id="email">
	</div>
    </div>
    <div class="form-group">
	<label for="tel" class="col-sm-offset-2 col-sm-2 control-label">Telephone</label>
	<div class="col-sm-4">
    		<input type="text" name="usertelephone" class="form-control" placeholder="Telephone" id="tel">
	</div>
    </div>

    <div class="form-group">
	<div class="col-sm-offset-4 col-sm-2">
    		<button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
	</div>
    </div>

 </form>
</div>
</body>
</html>

<!--

<button class="btn btn-danger btn-lg btn-primary btn-block">Cancel</button>

<center>
<form ACTION="userregister.php" METHOD="POST" name="userregist" onSubmit="return validateform( this.form )">
<table border="1" width="800" height="30" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
  	<td width="234" rowspan="10" align="center"><img src="pics/default.png" alt="�û���Ƭ" width="128" height="128"></td>
        <td >�ʺţ�</td>
	<td>
	<input type="text" name="userid" size="20"/>
	<font color="#8080C0">*</font><font size="2" color="#8080C0">   �������20�ַ�</font>
	</td>
	</tr>
	<tr>
  	<td>������</td>
	<td>
	<input type="text" name="username" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>���룺</td>
	<td>
	<input type="password" name="userpasswordone" size="20"/>
	<font color="#8080C0">*</font><font size="2" color="#8080C0">   �������20λ</font>
	</td>
	</tr>
	<tr>
  	<td>�ظ����룺</td>
	<td>
	<input type="password" name="userpasswordtwo" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>����</td>
	<td>
	<input type="text" name="usermanager" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>���Ź���Ա��</td>
	<td>
	<input type="text" name="useradmin" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>���䣺</td>
	<td>
	<input type="text" name="useremail" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
  	<td>�绰��</td>
	<td>
	<input type="text" name="usertelephone" size="20"/>
	<font color="#8080C0">*</font>
	</td>
	</tr>
	<tr>
	<td colspan="2" align="left">	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" width="200" value="ע��" />
	</td>
</tr>
</table>
</form>
</center>
<center>
	<table border="0" width="800" cellspacing="0" cellpadding="0">
	<tr>
		<td><hr size="1"></td>
	</tr>
	</table>
	<table border="1" width="800" height="50" cellspacing="0" cellpadding="0" bgcolor="#E4E4E4" bordercolorlight="#C2C2C2" bordercolordark="#FFFFFF">
	<tr>
		<td align="center" height="23" style="font-size:10.5pt">��Ȩ����(C)2013 �����к�����-�׹��Ĺ�˾ϵͳƽ̨��
		E-Mail:<a href="#">��ϵ����</a>
		<a href="library.php">������ҳ</a> </td>
	</tr>
	</table>
</center>
</body>
</html>

--!>
