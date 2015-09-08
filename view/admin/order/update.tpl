<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/order.js"></script>
</head>
<body>
<h2><a href="?a=order">Back to the order lists</a>Order -- Order list</h2>
<div id="list">
	<!--Order information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">Order information</caption>
		<tr><th>OrderNumber</th><th>Order time</th></tr>
		<tr><td>{$oneOrder[0]->ordernum}</td><td>{$oneOrder[0]->date}</td></tr>
	</table>
	
	<!--Goods  information-->
	<table class="public">
		<caption style="padding:10px">Goods list</caption>
		<tr><th>Number</th><th>Name</th><th>Attribute</th><th>Price</th><th>Amount</th><th>Subtotal</th></tr>
		{if $oneOrder}
			{foreach from=$oneOrder[0]->goods key=key item=value}
			<tr><td>{$value.sn}</td><td>{$value.name}</td>
			<td>
			{foreach from=$value.attr key=k item=v}
				{$k}:{foreach from=$v key=kk item=vv}{$vv};{/foreach}
			{/foreach}
			</td>
			<td><strong class="red">{$value.price_sale} Pounds</strong></td><td>{$value.num}</td>
			<td><strong class="red">{$value.price_sale*$value.num} Pounds</strong></td>
			<td>
			</tr>
			{/foreach}
		{else}
			<tr><td colspan="6">No data!</td></tr>
		{/if}
	</table>
	<!--My information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">User  information</caption>
		<tr><th>Username </th><th>Receiver  persons </th><th>Email</th></tr>
		<tr><td>{$oneOrder[0]->user}</td><td>{$oneOrder[0]->name}</td><td>{$oneOrder[0]->email}</td></tr>
	</table>
	<!--Delivery  information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">Delivery  information</caption>
		<tr><th>Postcode</th><th>Telephone</th><th>Famous palaces around</th><th>Address</th></tr>
		<tr><td>{$oneOrder[0]->code}</td><td>{$oneOrder[0]->tel}</td><td>{$oneOrder[0]->buildings}</td><td>{$oneOrder[0]->address}</td></tr>
	</table>
	<!--Pay information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">Pay information</caption>
		<tr><th>Delivery method</th><th>Pay method</th><th>Fee</th></tr>
		<tr><td>{$oneOrder[0]->delivery}</td><td>{$oneOrder[0]->tel}</td><td><span class="red">{$oneOrder[0]->price}/ Pounds</span></td></tr>
	</table>
	<!--Other information-->
	<table class="public">
		<caption style="padding:10px">Other information</caption>
		<tr><th>Other information</th><th>Method for OOS</th></tr>
		<tr><td>{$oneOrder[0]->text}</td><td>{$oneOrder[0]->ps}</td></tr>
	</table>
	<form method="post" action="?a=order&m=runUpdate&id={$oneOrder[0]->id}" name="update" id="updateForm">
		<input type="hidden" name="prev_url" value="{$prev_url}"/>
		<input type="hidden" name="is_record" value="{$oneOrder[0]->is_record}"/>
		<input type="hidden" name="user" value="{$oneOrder[0]->user}"/>
		{foreach from=$oneOrder[0]->goods key=key item=value}
			<input type="hidden" name="goods_id[{$key}]" value="{$key}"/>
			<input type="hidden" name="goods_num[{$key}]" value="{$value.num}"/>
			<input type="hidden" name="goods_name[{$key}]" value="{$value.name}"/>
			<input type="hidden" name="goods_price_sale[{$key}]" value="{$value.price_sale}"/>
			<input type="hidden" name="goods_attr[{$key}]" value="{foreach from=$value.attr key=k item=v}{$k}:{foreach from=$v key=kk item=vv}{$vv};{/foreach}{/foreach}"/>{/foreach}		
		<dl class="form">
			{if $oneOrder[0]->order_state=='Cancelled'}
				<dd class="red">OrderCancelled，it can be delete</dd>
			{else}
			<dd>Order status：
				<label><input type="radio" {if $oneOrder[0]->order_state=='unconfirmed'}checked="checked"{/if} name="order_state" value="unconfirmed"/> unconfirmed</label>
				<label><input type="radio" {if $oneOrder[0]->order_state=='confirmed'}checked="checked"{/if} name="order_state" value="confirmed"/> confirmed</label>
				<label><input type="radio" {if $oneOrder[0]->order_state=='Cancelled'}checked="checked"{/if} name="order_state" value="Cancelled"/> Cancelled</label>
			</dd>
			<dd>Pay status：
				<label><input type="radio" {if $oneOrder[0]->order_pay=='unpaid'}checked="checked"{/if} name="order_pay" value="unpaid"/> unpaid</label>
				<label><input type="radio" {if $oneOrder[0]->order_pay=='paid'}checked="checked"{/if} name="order_pay" value="paid"/> paid</label>
			</dd>
			<dd>Delivery status：
				<label><input type="radio" {if $oneOrder[0]->order_delivery=='undelivery'}checked="checked"{/if} name="order_delivery" value="undelivery"/> undelivery</label>
				<label><input type="radio" {if $oneOrder[0]->order_delivery=='deserved'}checked="checked"{/if} name="order_delivery" value="deserved"/> deserved</label>
				<label><input type="radio" {if $oneOrder[0]->order_delivery=='Delivered'}checked="checked"{/if} name="order_delivery" value="Delivered"/> Delivered</label>
			</dd>
			<dd>Delivery method:<select id="delivery" name="delivery">
					<option>--Please select a Delivery company</option>
					{foreach from=$allDelivery key=key item=value}
						{if $oneOrder[0]->delivery==$value->name}
						<option url="{$value->url}" selected="selected" value="{$value->name}">{$value->name}</option>
						{else}
						<option url="{$value->url}" value="{$value->name}">{$value->name}</option>
						{/if}
						
					{/foreach}
				</select><input id="url" name="delivery_url" type="hidden"/>
				
			</dd>
			<dd>Delivery number:<input type="text" name="delivery_num" value="{$oneOrder[0]->delivery_num}" class="text"/></dd>
			{if $oneOrder[0]->refund==1}
				<dd>
					<label><span class="red">Order is On refunding，please check if you are sure：</span><input type="checkbox" name="refund" value="2"/></label>
				</dd>
			{elseif $oneOrder[0]->refund==2}
				<dd>
					<span class="green">Order is refunded success</span>
				</dd>
			{/if}
			<dd><input type="submit" name="send" value="EditOrder"/></dd>
			{/if}
			
			
		</dl>
		
	</form>
</div>

</body>
</html>