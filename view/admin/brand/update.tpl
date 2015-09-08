<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/brand.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/brand_update.js"></script>
</head>
<body>
<h2><a href="?a=brand">back brand  list</a>Goods  -- Edit brand </h2>
<form method="post" action="?a=brand&m=runUpdate&id={$oneBrand->id}" name="add" id="updateForm">
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		<dd> brand Name： {$oneBrand->name}</dd>
		<dd>
			<label for="type"> brand Type ：</label>
			<select id="type" name="type"><option value="0">--Please select a Type </option>
				{html_options options=$allMainNavs selected=$oneBrand->type}
			</select><span>（*cannot be empty!）</span>
		</dd>
		<dd>
		<label for="name">Site Address：</label>
			<input type="text" id="url" name="url" value="{$oneBrand->url}" class="text"/><span>（*cannot be empty! and smaller than 40）</span>
		</dd>
		<dd>
		<label for="info"> brand  information：</label>
			<textarea name="info" id="info">{$oneBrand->info}</textarea><span>（*smaller than 200）</span>
		</dd>
		<dd><input type="submit" name="send" value="Edit brand "/></dd>
	</dl>
</form>

</body>
</html>