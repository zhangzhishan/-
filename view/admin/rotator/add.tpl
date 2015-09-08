<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<!-- <link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/> -->
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>

<script type="text/javascript" src="view/admin/js/rotator.js"></script>
</head>
<body>
<h2><a href="?a=goods">back rotator list</a> rotator -- Add rotator</h2>
<form method="post" action="?a=rotator&m=runAdd" name="form" id="addForm">
	<dl class="form">
		
		<dd><label for="name">picture Name：</label><input type="text" id="name" name="name" class="text"/><span class="red"> (*)</span></dd>
		
		<dd><label for="link">links Address：</label><input type="text" id="link" name="link" class="text"/><span class="red"> (*)</span></dd>
		<dd><label>Home on show：</label><label><input type="radio" checked="checked" name="state" value="1"/>Yes </label><label><input type="radio" name="state" value="0"/>No</label></dd>

		<dd>Upload picture ：<input type="text" class="text" name="thumb" style="width:350px" readonly="readonly"/>　<input type="button" value="select" onclick="centerWindow(500,200)"/><img name="pic" alt=" rotatorpicture " style="display:none"/> (*size：300 * 300  jpg,gif,png，below 200k)</dd>
		
		<dd><input type="submit" name="send" value="Add rotator"/></dd>
	</dl>
</form>

</body>
</html>