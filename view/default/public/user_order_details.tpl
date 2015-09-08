<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 Now:<a href="./">Home</a> &gt; MY
</div>
<div id="shop_main">
	{include file='default/public/user_sidebar.tpl'}
	<div id="main">
		<h2><a href="?a=user&m=order">[Back to the order lists]</a>Order details</h2>
		<table cellspacing="1">
			<caption>Order status</caption>
			<tr><th>Order number</th><th>Order status</th><th>Pay status</th><th>Delivery status</th></tr>	
			<tr><td>{$oneOrder[0]->ordernum}</td><td>{$oneOrder[0]->order_state}</td><td>{$oneOrder[0]->order_pay}</td><td>{$oneOrder[0]->order_delivery}</td></tr>		
		</table>
		<table cellspacing="1">
			<caption>Goods list</caption>
			<tr><th>Number</th><th>Name</th><th>Attribute</th><th>Price</th><th>Amount</th><th>Subtotal</th><th>Evaluate</th></tr>
			{foreach from=$oneOrder[0]->goods key=key item=value}
				<tr><td>{$value.sn}</td>
				<td><a href="?a=details&navid={$value.navid}&goodsid={$value.id}" target="_blank">{$value.name}</a></td>
				<td>
				{foreach from=$value.attr key=k item=v}
					{$k}:{foreach from=$v key=kk item=vv}{$vv};{/foreach}
				{/foreach}
				</td>
				<td><strong class="red">{$value.price_sale} Pounds</strong></td><td>{$value.num}</td>
				<td><strong class="red">{$value.price_sale*$value.num} Pounds</strong></td>
				<td>
					{if $oneOrder[0]->order_delivery=='Delivered'}
					<a href="?a=user&m=commend&goods_id={$value.id}&order_id={$oneOrder[0]->id}">Evaluate</a>
					{else}
					---
					{/if}
					
					
				</td>
				</tr>
			{/foreach}
		</table>
		<table>
			<caption>Receiver information</caption>
			<tr><td width="25%">Name</td><td width="25%">{$oneOrder[0]->name}</td><td width="25%">Email:</td><td width="25%">{$oneOrder[0]->email}</td></tr>
			<tr><td>Address:</td><td>{$oneOrder[0]->address}</td><td>Post code</td><td>{$oneOrder[0]->code}</td></tr>
			<tr><td>Telephone</td><td>{$oneOrder[0]->tel}</td><td>Famous places around</td><td>{$oneOrder[0]->buildings}</td></tr>
			<tr><td>Town?</td><td>{if $oneOrder[0]->flag}Yes{else}No{/if}</td><td>Best delivery time</td><td>{$oneOrder[0]->date}</td></tr>
		</table>
		
		
		<table>
			<caption>Delivery information</caption>
			<tr><th>Delivery status</th><th  width="50%">Delivery company</th><th>Delivery number</th></tr>
			<tr>
				<td>{if $oneOrder[0]->order_delivery}{$oneOrder[0]->order_delivery}{else}---{/if}</td>
				<td>{if $oneOrder[0]->delivery_name}{$oneOrder[0]->delivery_name}{else}---{/if}</td>
				<td>{if $oneOrder[0]->delivery_num}<a href="{$oneOrder[0]->delivery_url}">{$oneOrder[0]->delivery_num}</a>{else}---{/if}</td>
			</tr>
		</table>
		<table>
			<caption>Pay information</caption>
			<tr><th>Pay status</th><th  width="50%">Pay method</th><th>Total</th></tr>
			<tr><td>Paypal</td><td>{$oneOrder[0]->order_state}</td><td><strong class="red">{$oneOrder[0]->price}</strong></strong></td></tr>		
		</table>
		<table cellspacing="1">
			<caption>Other information</caption>
			<tr><td>Other information</td><td>Method for OOS</td></tr>
			<tr><td>{$oneOrder[0]->text}</td><td>{$oneOrder[0]->ps}</td></tr>
		</table>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>