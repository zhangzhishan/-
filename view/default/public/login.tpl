<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/login.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/login.js"></script>
<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 Now:<a href="./">Home</a> &gt; Login
</div>
	<form action="?a=user&m=login" method="post" id="loginForm" name="form">

	</form>


<div id="login">	
	<form action="?a=user&m=login" method="post" id="loginForm" name="form">
		<dl>
			<dt><h2>Login</h2><p class="short_line"></p></dt>
			<dd><label> User name：</label><input type="text" name="user" class="text"/><span class="red">*</span></dd>
			<dd><label>Password：</label><input type="password" id="pwd" name="pwd" class="text"/><span class="red"> *</span></dd>
			<dd><input type="submit" name="send" class="sub" value="Login"/></dd>
		</dl>
	</form>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>