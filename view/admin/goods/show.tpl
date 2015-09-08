<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/>
</head>
<body>
<h2><a href="?a=goods&m=runAdd">Add Goods </a>Goods  list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Goods Name</th><th>Goods Number</th><th>Goods Price（ Pounds）</th><th>Goods Type </th><th>IsSelling</th><th>Whether On sale</th><th>Whether Recommend</th><th>Stock</th><th>Operation</th></tr>
			{foreach from=$allGoods key=key item=value}
				<tr><td>{$key+1}</td><td>{$value->name|truncate:15}</td><td>{$value->sn}</td><td>{$value->price_sale}</td><td>{$value->nav}</td>
				<td>
					{if $value->is_up==0}
						<span class="red">No</span> <a class="green"href="?a=goods&m=isUp&act=up&id={$value->id}">[Up]</a>
					{else}
						<span class="green">Yes</span> <a class="red" href="?a=goods&m=isUp&act=down&id={$value->id}">[Down]</a>
					{/if}
				</td>
				<td>
					{if $value->is_promote==0}
						<span class="red">No</span> <a class="green"href="?a=goods&m=isPromote&act=yes&id={$value->id}">[On sale]</a>
					{else}
						<span class="green">Yes</span> <a class="red" href="?a=goods&m=isPromote&act=no&id={$value->id}">[Cancel ]</a>
					{/if}
				</td>
				<td>
					{if $value->is_recommend==0}
						<span class="red">No</span> <a class="green"href="?a=goods&m=isRecommend&act=yes&id={$value->id}">[Recommend]</a>
					{else}
						<span class="green">Yes</span> <a class="red" href="?a=goods&m=isRecommend&act=no&id={$value->id}">[Cancel ]</a>
					{/if}
				</td>
			<td>{$value->inventory}</td><td>
					<a href="?a=goods&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
					<a href="?a=goods&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			{foreachelse}
				<tr><td colspan="9">No data!</td></tr>
			{/foreach}
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>