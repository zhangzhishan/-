<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/login.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/login.js"></script>
<title>Myshop Admin</title>
</head>
<body>
<div id="login">
	<form method="post" action="?a=admin&m=runLogin" id="loginForm">
	<dl>
		<dd>
			<label for="user">User Name:</label>
				<input type="text" id="user" name="user" class="text"/>
			</dd>
		<dd>
			<label for="pwd">Password：</label>
				<input type="password" id="pwd" name="pwd" class="text"/>
			</dd>
		<dd><input type="submit" name="send" class="submit" value="loginSystem"/></dd>
	</dl>
	</form>
	
</div>
</body>
</html>