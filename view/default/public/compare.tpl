<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<!-- <link rel="stylesheet" href="view/default/style/compare.css" type="text/css"/> -->
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="shop_main">
	<div id="main">
		<h2>Goods list</h2>
		<div class="pro_list">
			{foreach from=$GoodsCompare key=key item=value}
			<dl>
				<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
				<dd><strong>£ {$value->price_sale} Pounds</strong> <del>£ {$value->price_market} Pounds</del></dd>
				<dd class="title">{$value->name}</dd>
				<dd>Number：{$value->sn}</dd>
				<dd> brand ：{$value->brand}</dd>
				<dd>Attribute：{$value->attr}</dd>
				
				<dd>weight{$value->weight}/kg</dd>
				<dd>evaluate：<a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">{$value->count} persons Evaluate </a> <span class="green">(Sold {$value->sale_count}{$value->unit})</span></dd>
				<dd>Amount:<a href="?a=details&navid={$value->nav}&goodsid={$value->id}">Buy</a> | <a href="#">collect</a> | <a href="#">Compare</a></dd>
				<dd style="text-align:center"><a href="?a=compare&m=deleteCompare&id={$value->id}">delete this Goods </a></dd>			
			</dl>
			{/foreach}
			<div id="page" class="clear_all"><a style="padding:5px;" href="?a=compare&m=clearAll">Cleat All</a></div>
		</div>	
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>