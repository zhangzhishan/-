<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=delivery&m=runAdd">Add  delivery</a>Goods  --  delivery list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Delivery company</th><th>In town</th><th>Out of town</th><th>Additional</th><th> information</th><th>address</th><th>RegisterTime</th><th>Operation</th></tr>
		{if $allDelivery}
			{foreach from=$allDelivery key=key item=value}
			<tr><td>{$key+1}</td>
			<td>{$value->name}</td>
			<td>{$value->price_in} Pounds</td>
			<td>{$value->price_out} Pounds</td>
			<td>{$value->price_add} Pounds</td>
			<td>{$value->info|truncate:20}</td>
			<td>{$value->url}</td>
			<td>{$value->date}</td><td>
				<a href="?a=delivery&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=delivery&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
			</td></tr>
			{/foreach}
		{else}
			<tr><td colspan="6">No data!</td></tr>
		{/if}
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>