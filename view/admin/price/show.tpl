<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=price&m=runadd">Add price </a>Goods  --  price  list</h2>
<div id="list">
	<form method="post" action="?a=price&m=runAdd">
	<table class="public">
		<tr><th>Number<th>Min</th><th>Max</th><th>Operation</th></tr>
			{foreach from=$allPrice key=key item=value}			
				<tr><td>{$key+1}<td>{$value->price_left}</td><td>{$value->price_right}</td>
				<td>
				<a href="?a=price&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=price&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			{foreachelse}
				<tr><td colspan="4">No data!</td></tr>
			{/foreach}
	</table>
	</form>
	<div id="page">{$page}</div>	
</div>

</body>
</html>