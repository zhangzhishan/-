<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/pic.css" />
</head>
<body>

<h2>System -- picture directory  list</h2>

<div id="list">
	<table class="public">
		<tr><th>Timedirectory </th><th>picture numbers</th><th>Operation</th></tr>
		{foreach from=$dir key=key item=value}
		<tr><td>{$value}</td><td>{$key}</td>
		{if $key|mb_substr:10:-1:utf8 eq 0}
			<td><a href="?a=pic&m=delDir&file={$value}">deletedirectory </a></td>
		{else}
			<td><a href="?a=pic&m=file&file={$value}">Jump into directory </a></td>
		{/if}
		

		</tr>
		{/foreach}
	</table>
</div>


</body>
</html>