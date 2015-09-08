<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>Goods  -- evaluate list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Goods Name</th><th>evaluate content</th><th>reply content</th><th>Evaluate star</th><th>Evaluate</th><th>Date</th><th>Operation</th></tr>
		{if $allCommend}
			{foreach from=$allCommend key=key item=value}
			<tr><td>{$key+1}</td><td>{$value->name}</td>
			<td title="{$value->content}">{$value->content|truncate:20}</td>
			<td>{if $value->re_content}{$value->re_content|truncate:20}{else}<span>unreply</span>{/if}</td>
			<td style="color:pink">
				{if $value->star == 5}<span class="star">★★★★★</span>{/if}
				{if $value->star == 4}<span class="star">★★★★</span>{/if}
				{if $value->star == 3}<span class="star">★★★</span>{/if}
				{if $value->star == 2}<span class="star">★★</span>{/if}
				{if $value->star == 1}<span class="star">★</span>{/if}					
			</td><td>{$value->user}</td><td>{$value->date}</td><td>
				<a href="?a=commend&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=commend&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete it?>') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
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