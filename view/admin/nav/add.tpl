<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/nav.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/nav_add.js"></script>
</head>
<body>
<h2><a href="?a=nav">back nav list</a>Goods  -- AddNav</h2>
<form method="post" action="?a=nav&m=runAdd" name="add" id="navForm">
</form>
<form method="post" action="?a=nav&m=runAdd" name="add" id="navForm">
	{if $oneNav}<input type="hidden" name="sid" value="{$oneNav[0]->id}"/>{/if}
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		{if $oneNav}<dd>Parent Name：{$oneNav[0]->name}</dd>{/if}
		<dd>
		<label for="name"> Nav Name：</label>
		<input type="text" id="name" name="name" class="text"/><span>（*2-40）</span>
		</dd>
		<dd>
		<label for="info"> Nav information：</label>
		<textarea name="info" id="info"></textarea><span>（*smaller than 200）</span>
		</dd>
		{if $oneNav}
		<dd>
			brand:
			{html_checkboxes name='brand' options=$allBrands selected='1'}
		</dd>
		{/if}
		<dd> price ：{html_checkboxes name='price' options=$allPrice}
		</dd>
		<dd><input type="submit" name="send" value="Add" /></dd>
	</dl>
</form>

</body>
</html>