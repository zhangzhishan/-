<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=attr&m=runAdd">Add Attribute</a>Goods  -- Attribute list</h2>
<div id="list">
	<table class="public">
		<tr><th>NUmber</th><th>AttributeName</th><th>Attribute item</th><th>Related </th><th>Operation</th></tr>
		
			{foreach from=$allAttr key=key item=value}
			<tr><td>{$key+1}</td><td>{$value->name}</td><td>{$value->item|truncate:40}</td><td>{$value->nav|truncate:40}</td>
			<td>
				<a href="?a=attr&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=attr&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
			</td></tr>
			{foreachelse}
			<tr><td colspan="5">No data</td></tr>
			{/foreach}
		
			
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>