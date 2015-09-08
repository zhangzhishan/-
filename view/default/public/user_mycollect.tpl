<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyShop</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
<script type="text/javascript" src="view/default/js/jquery.js"></script>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	Now:<a href="?a=user">Myself</a> &gt; My collect 	
</div>
<div id="shop_main">
{include file='default/public/user_sidebar.tpl'}
<div id="main">
	<h2>My evaluate</h2>
	<div class="pro_list">		
		{foreach from=$allCollect key=key item=value}
		<dl>
			<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
			<dd class="price"><strong>£ {$value->price_sale} Pounds</strong> <del>£ {$value->price_market} Pounds</del></dd>
			<dd class="title"><a href="#">{$value->name}</a></dd>
			<dd class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">{$value->count} persons Evaluate </a> <span class="green">(Sold {$value->sale_count}{$value->unit})</span></dd>
			<dd class="buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">Buy</a> | <a href="?a=user&m=deleteCollect&id={$value->id}">Cancel collect</a> | <a href="?a=compare&m=setCompare&navid={$value->nav}&goodsid={$value->id}" onclick="javascript:return checkCompare('{$value->nav}')" target="blank">Compare</a></dd>			
		</dl>
		{/foreach}
		<div id="page">{$page}</div>			
	</div>
</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>