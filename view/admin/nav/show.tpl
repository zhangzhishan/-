<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/admin.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>{if !$flag}<a href="?a=nav&m=runAdd">Add nav</a>{else}<a href="?a=nav&m=runadd&id={$oneNav[0]->id}">Add nav</a>{/if}System --  nav list</h2>
<div id="list">
	<form method="post" action="?a=nav&m=runSort">
	<table class="public">
		<tr><th>Number<th>Name</th><th>Introduction</th>{if !$flag}<th>Child category</th>{else}<th> brand </th>{/if}<th>Range</th><th>Operation</th></tr>
		{if $allNav}
			{foreach from=$allNav key=key item=value}			
				<tr><td>{$key+1}<td>{$value->name}</td><td>{$value->info}</td><td>
					{if !$flag}
					<a href="?a=nav&sid={$value->id}">view</a> | <a href="?a=nav&m=runAdd&id={$value->id}">Add</a></td>
					{else}
					{$value->brand}
					{/if}
					<td><input type="text" class="text sort" name="sort[{$value->id}]" value="{$value->sort}"/></td>
				<td>
				<a href="?a=nav&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=nav&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			{/foreach}
			<tr><td></td><td></td><td></td><td></td><td><input type="submit" name="send" value="Range"/></td><td></td></tr>
		{else}
			<tr><td colspan="6">No data!</td></tr>
		{/if}
	</table>
	</form>
	{if $flag}<p class="return">last nav：<strong>{$oneNav[0]->name}</strong>  [<a href="{$prev_url}">back last</a>]</p>{/if}
	<div id="page">{$page}</div>	
</div>

</body>
</html>