<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/cart.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/cart.js"></script>
<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 Now:<a href="./">Home</a> &gt; Cart
</div>
<div id="cart">
	<h2>Goods list</h2>	
	<table cellspacing="1">
		<tr><th>Goods Name</th><th>Attribute</th><th>Price</th><th>Market price</th><th>BuyAmount</th><th>Subtotal</th><th>Operation</th></tr>
		{assign var=total_sale value=0}
		{assign var=total_market value=0}
		{foreach from=$frontProduct key=key item=value}
		<tr><td>{$value.name}</td>
		<td>
			{foreach from=$value.attr key=k item=v1}
			{$k}:
				{foreach from=$v1 item=v2}
				{$v2};
				{/foreach}
			{/foreach}
		</td>
		{assign var=total_sale value=$total_sale+$value.price_sale*$value.num}
		{assign var=total_market value=$total_market+$value.price_market*$value.num}
		<td><strong class="red">£ {$value.price_sale} Pounds</strong></td>
		<td>£ {$value.price_market} Pounds</td>
		<td><input goodsid="{$value.id}"type="text" value="{$value.num}" class="num"/></td>
		<td><strong class="red">£ {$value.price_sale*$value.num} Pounds</strong></td>
		<td><a href="?a=cart&m=deleteProduct&id={$value.id}">delete</a></td></tr>
		{/foreach}
	</table>
	<p class="buy_total">Shopping Subtotal <strong class="red">£ {$total_sale} Pounds</strong>, cheaper <strong class="red">£ {$total_market} Pounds</strong> save <strong class="red">£ {$total_market-$total_sale} Pounds</strong> <span><a style="color:red;" href="?a=cart&m=clearProduct">clear Cart</a> | <a style="color:green;" href="./">go on shopping</a></span></p>
	<div class="now_pay"><a href="?a=cart&m=flow">pay now</a></div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>