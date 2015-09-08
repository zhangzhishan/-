<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/list.js"></script>

<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	Now:<a href="./">Home</a> 
	&gt; Search list
</div>
<div id="shop_main">
	<div id="main">
		<h2>Search list</h2>
		<div class="pro_list">
			{foreach from=$listGoods key=key item=value}
			<dl>
				<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
				<dd class="price"><strong>£ {$value->price_sale} Pounds</strong> <del>£ {$value->price_market} Pounds</del></dd>
				<dd class="title"><a href="#">{$value->name}</a></dd>
				<dd class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">{$value->count} persons Evaluate </a> <span class="green">(Sold {$value->sale_count}{$value->unit})</span></dd>
				<dd class="buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">Buy</a> | <a href="?a=user&m=addCollect&id={$value->id}" target="blank">collect</a> | <a href="?a=compare&m=setCompare&navid={$value->nav}&goodsid={$value->id}" onclick="javascript:return checkCompare('{$value->nav}')" target="blank">Compare</a></dd>			
			</dl>
			{/foreach}
			<div id="page">{$page}</div>
		</div>	
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>