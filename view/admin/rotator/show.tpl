<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=rotator&m=runAdd">Add  rotator</a> rotator --  rotator list</h2>
<div id="list">
<form method="post" action="?a=rotator&m=runSort">
	<table class="public">
		<tr><th>Number</th><th>picture Name</th><th>links address</th><th>picture Address</th><th>Time</th><th>Home on show</th><th>Range</th><th>Operation</th></tr>
		{if $allRotator}
			{foreach from=$allRotator key=key item=value}
			<tr><td>{$key+1}</td><td>{$value->name}</td><td>{$value->link}</td><td>{$value->thumb}</td><td>{$value->date}</td>

			<td>
			{if $value->state==0}
				<span class="red">No</span> <a class="green"href="?a=rotator&m=isShow&act=yes&id={$value->id}">[ on show]</a>
			{else}
				<span class="green">Yes</span> <a class="red" href="?a=rotator&m=isShow&act=no&id={$value->id}">[Cancel ]</a>
			{/if}
			</td>
			<td><input type="text" class="text sort" name="sort[{$value->id}]" value="{$value->sort}"/></td>
			<td>
				<a href="?a=rotator&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=rotator&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
			</td></tr>
			{/foreach}
			<tr><td></td><td></td><td><td></td></td><td></td><td></td><td><input type="submit" name="send" value="Range"/></td><td></td></tr>
		{else}
			<tr><td colspan="6">No data!</td></tr>
		{/if}
	</table>
	</form>
	<div id="page">{$page}</div>	
</div>

</body>
</html>