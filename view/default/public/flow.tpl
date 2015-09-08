<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/cart.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/flow.js"></script>
<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 Now:<a href="./">Home</a> &gt; Cart
</div>
<div id="cart">
	<h2>Goods Order</h2>
	<form method="post" name="flow" action="?a=cart&m=order"> 
	
	<table cellspacing="1">
		<caption>Goods list</caption>
		<tr><th>Number</th><th>Name</th><th>Attribute</th><th>Price</th><th>Amount</th><th>Total weight</th><th>Subtotal</th><th>Operation</th></tr>
		{assign var=total_sale value=0}
		{assign var=total_weight value=0}
		{foreach from=$frontProduct key=key item=value}
		<tr><td>{$value.sn}</td>
			<td>{$value.name}</td>
		<td>
			{foreach from=$value.attr key=k item=v1}
			{$k}:
				{foreach from=$v1 item=v2}
				{$v2};
				{/foreach}
			{/foreach}
		</td>
		{assign var=total_sale value=$total_sale+$value.price_sale*$value.num}
		{assign var=total_weight value=$total_weight+$value.weight*$value.num}
		<td><strong class="red">£ {$value.price_sale} Pounds</strong></td>
		<td>{$value.num} </td>
		<td>{$value.weight*$value.num}/kg </td>
		<td><strong class="red">£ {$value.price_sale*$value.num} Pounds</strong></td>
		<td><a class="red" href="?a=cart&m=deleteProduct&id={$value.id}">delete</a></td></tr>
		{/foreach}
	</table>
	<p><span><a class="green" href="?a=cart">backEdit</a> | Goods total price： <strong class="red">£ {$total_sale} Pounds</strong></span></p>
	<table>
		<caption>Receiver information</caption>
		<tr><td width="25%">Receiver information：</td><td width="25%">{$frontUser[0]->name}</td><td width="25%">Email:</td><td width="25%">{$frontUser[0]->email}</td></tr>
		<tr><td>Address:</td><td>{$frontUser[0]->address}</td><td>Post code</td><td>{$frontUser[0]->code}</td></tr>
		<tr><td>Telephone</td><td>{$frontUser[0]->tel}</td><td>Famous places around</td><td>{$frontUser[0]->buildings}</td></tr>
		<tr><td>Town?</td><td>{if $frontUser[0]->flag}Yes{else}No{/if}</td><td>Best delivery time</td><td>{$frontUser[0]->time}</td></tr>
	</table>
	<p><a class="green" href="?a=user&m=address&id={$frontUser[0]->id}">Edit receivers information</a></p>
	
	
	<table>
		<caption>Delivery information</caption>
		<tr><th width="10%"></th><th>Name</th><th  width="50%">Description</th><th>Delivery fee</th></tr>
		{foreach from=$frontDelivery key=key item=value}
		<tr>
			<td><input type="radio" class="delivery" checked="checked" value="{$value->price_in}" add="{$value->price_add}" weight="{$total_weight}" name="delivery"/></td>
			<td>{$value->name}</td><td>{$value->info}</td>
			<td>{$value->price_in} Pounds</td>
		</tr>
		{/foreach}
		<tr><td colspan="4">Total delivery fee<strong class="show_delivery"></strong>/ Pounds</td></tr>
	</table>
	<p>You need to pay delivery fees:<strong class="red price_delivery">12/ Pounds</strong></p>
	<table>
		<caption>Pay method</caption>
		<tr><th width="10%"></th><th>Name</th><th  width="50%">Description</th><th>Commission charge</th></tr>
		<tr><th><input type="radio" checked="checked" value="0"  class="pay_way" name="pay_way" title="Paypal"/><td>Paypal</td><td>Paypal online</td><td>0 Pounds</td></tr>
		<tr><th><input type="radio"  value="2" class="pay_way"  name="pay_way"  title="remit" /><td>remit</td><td>Remit through bank, you need to write the order number</td><td>2 Pounds</td></tr>
		<tr><th><input type="radio"  value="0" class="pay_way"  name="pay_way" title="cash" /><td>cash</td><td>pay by cash</td><td>0 Pounds</td></tr>	
	</table>
	<p>Commission charge：<strong class="price_pay">12/ Pounds</strong></p>
	<table cellspacing="1">
		<caption>Other information</caption>
		<tr><td width="30%"><strong>Order other information：</strong></td><td><textarea name="text"></textarea></td></tr>
		<tr><td><strong>Method for OOS：</strong></td>
		<td>
			<label><input name="ps" checked="checked" value="Deliver together" type="radio" name=""/>Deliver together</label>
			<label><input name="ps" value="Deliver sepated" type="radio" name="ps"/>Deliver sepated</label>
			<label><input name="ps" value="Cancel Order" type="radio" name="ps"/>Cancel Order</label>
		</td></tr>
	</table>
	<p id="total">Goods total:<strong>{$total_sale}</strong>/ Pounds + Delivery fees<strong></strong>/ Pounds + Commission charge：<strong></strong>/ Pounds</p>
	<p>You need to pay<strong class="red price"></strong>  Pounds</p>
	
	<input type="hidden" value="{$smarty.cookies.user}" name="user"/>
	<input type="hidden" value="{$frontUser[0]->name}" name="name"/>
	<input type="hidden" value="{$frontUser[0]->email}" name="email"/>
	<input type="hidden" value="{$frontUser[0]->code}" name="code"/>
	<input type="hidden" value="{$frontUser[0]->address}" name="address"/>
	<input type="hidden" value="{$frontUser[0]->tel}" name="tel"/>
	<input type="hidden" value="{$frontUser[0]->buildings}" name="buildings"/>
	<input type="hidden" value="" class="pay" name="pay"/>
	<input type="hidden" value="" class="form_price" name="price"/>	
	<p style="text-align:center;"><input type="submit" class="submit" name="send" value="Submit Order" /></p>
	</form>	
</div>
{include file='default/public/footer.tpl'}
</body>
</html>