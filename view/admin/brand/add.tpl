<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/brand.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/brand_add.js"></script>
</head>
<body>
<h2><a href="?a=nav">back brand  list</a>Goods  -- Add brand </h2>

<form method="post" action="?a=brand&m=runAdd" name="add" id="addForm">
</form>
<form method="post" action="?a=brand&m=runAdd" name="add" id="addForm">
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		
		<dd>
		<label for="name"> brand Name：</label>
			<input type="text" id="name" name="name" class="text"/><span>（*cannot be empty! and smaller than 20）</span>
		</dd>
		<dd>
			<label for="type"> brand Type ：</label>
			<select id="type" name="type"><option value="0">--Please select a Type </option>
				{html_options options=$allMainNavs}
			</select><span>（*cannot be empty!）</span>
		</dd>
		<dd>
		<label for="name">Site Address：</label>
			<input type="text" id="url" name="url" class="text"/><span>（*cannot be empty! and smaller than 40）</span>
		</dd>
		<dd>
		<label for="info"> brand  information：</label>
			<textarea name="info" id="info"></textarea><span>（*smaller than 200）</span>
		</dd>
		<dd><input type="submit" name="send" value="Add brand "/></dd>
	</dl>
</form>

</body>
</html>