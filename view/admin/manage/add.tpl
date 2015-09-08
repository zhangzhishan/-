<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/manage.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.form.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
<script type="text/javascript" src="view/admin/js/manage_add.js"></script>
</head>
<body>
<h2><a href="?a=manage">backAdmin  list</a>System -- AddAdmin </h2>
<form method="post" action="?a=manage&m=runAdd" name="add" id="addForm">
	<dl class="form">
		<dd>
		<label for="user">User Name:</label>
		<input type="text" id="user" name="user" class="text"/><span>（*2-20）</span>
		</dd>
		<dd>
		<label for="pwd">Password：</label>
		<input type="text" id="pwd" name="pwd" class="text"/><span>（*larger than 6）</span>
		</dd>
		<dd>
		<label for="notpwd">Confirm password:</label>
		<input type="text" id="notpwd" name="notpwd" class="text"/><span>（*Password should be the same）</span>
		</dd>
		<dd>
		<label for="level">Level:</label>
		<select name="level" id="level">
						<option value="0">--Please select a level--</option>
						{html_options options=$allLevel}
					</select><span>（*must choose a level）</span>
		</dd>
		<dd><input type="submit" name="send" value="AddAdmin "/></dd>
	</dl>
</form>

</body>
</html>