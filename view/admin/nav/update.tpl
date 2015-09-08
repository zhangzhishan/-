<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/nav.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/nav_update.js"></script>
</head>
<body>
<h2><a href="?a=nav">back nav list</a>Goods  -- Edit nav</h2>
<form method="post" action="?a=nav&m=runUpdate&id={$oneNav->id}" name="update" id="navForm">
	<input type="hidden" name="url" value="{$prev_url}"/>
	<dl class="form">
		<dd>
			<label for="name"> navName： {$oneNav->name}</label>
		</dd>
		<dd>
		<label for="info"> nav information：</label>
		<textarea name="info" id="info" >{$oneNav->info}</textarea><span>（*smaller than 200）</span>
		</dd>
		{if $oneNav->sid != 0}
		<dd>
			brand:
			{html_checkboxes name='brand' options=$allBrands selected=$updateBrands}
		</dd>
		{/if}
		<dd> price ：{html_checkboxes name='price' options=$allPrice selected=$oneNav->price}
		<dd><input type="submit" name="send" value="Save"/></dd>
	</dl>
</form>

</body>
</html>