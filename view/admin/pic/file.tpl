<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/pic.css" />
</head>
<body>

<h2>System -- picture file  list</h2>

<div id="list">
	<table class="public">
		<tr><th>file Name</th><th>have before?</th><th>Operation</th></tr>
		{foreach from=$file key=key item=value}
		{if $value != '.' && $value != '..'}
		<tr><td>
		{if $value->id}
		<span class="green">./uploads/{$smarty.get.file}/{$value->pic}</span>
		{else}
		<span class="red">./uploads/{$smarty.get.file}/{$value}</span>
		{/if}
		</td><td>
		{if $value->id and $value->link eq 'index' }

		<a href="index.php" target="_blank">{$value->name}</a>
		{elseif $value->id  }
		<a href="?a=details&navid={$value->nav}&goodsid={$value->id}" target="_blank">{$value->name}</a>
		{else}
		Yes
		{/if}
		</td><td>
		{if $value->id}
		---
		{else}
		<a onclick="javascript:return confirm('Are you sure to delete{$value}?')" href="?a=pic&m=runDelete&dir={$smarty.get.file}&name={$value}">delete</a>
		{/if}
		</td></tr>
		{/if}
		{/foreach}
		<tr><td colspan="2"><a href="?a=pic">[backdirectory ]</a></td></tr>
	</table>
</div>


</body>
</html>