<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/admin.css'/>
<script type="text/javascript" src="view/admin/js/iframe.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
</head>
<body>
<div id="header">
	<p>Hello,{$oneManage['name']} [{$oneManage['level']}] [<a href="?a=admin">Home</a>] [<a href="?a=admin&m=loginOut">Login out</a>]</p>
	<ul>
		<li class="first" onclick="javascript:channel(0)"><a href="#">First</a></li>
		<li><a href="#" onclick="javascript:channel(1)">Goods </a></li>
		<li><a href="#" onclick="javascript:channel(2)">Order</a></li>
		<li><a href="#" onclick="javascript:channel(3)">System</a></li>
	</ul>
</div>
<div id="sidebar">
	<dl style="display:block">
		<dt>First</dt>
		<dd><a href="?a=admin&m=main" target="in">System information</a></dd>
		<dd><a href="?a=rotator" target="in">Home rotator</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>Goods </dt>
		<dd><a href="?a=nav" target="in">Nav list</a></dd>
		<dd><a href="?a=goods" target="in">Goods list</a></dd>
		<dd><a href="?a=brand" target="in"> brand  list</a></dd>
		<dd><a href="?a=attr" target="in">customer Attribute list</a></dd>
		<dd><a href="?a=price" target="in"> price  list</a></dd>
		<dd><a href="?a=commend" target="in">evaluate list</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>Order</dt>
		<dd><a href="?a=order" target="in">Order list</a></dd>
		<dd><a href="?a=delivery" target="in"> delivery list</a></dd>
	</dl>

	<dl style="display:none">
		<dt>System</dt>
		<dd><a href="?a=manage" target="in">Admin  list</a></dd>
		<dd><a href="?a=pic" target="in">picture manager</a></dd>		
	</dl>
</div>
<div id="main">
	<iframe frameborder='0' src="?a=admin&m=main" name="in"></iframe>
</div>
</body>
</html>