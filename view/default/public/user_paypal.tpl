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
	Now:<a href="./">Home</a> &gt; Paypal	
</div>
<div id="shop_main">
	<div id="main">
		<h2>pay online</h2>
		<div class="pay">
			{if $OneOrder[0]->order_state == 'Cancelled' || $OneOrder[0]->order_pay == 'paid' || $OneOrder[0]->order_delivery == 'deserved' || $OneOrder[0]->order_delivery == 'Delivered'}
			<dl><dd>This order is locked!！<input type="button" value="back" onclick="javascript:history.go(-1);" /></dd></dl>
			{else}
			<dl>
				<dd>Order number：{$oneOrder[0]->ordernum}</dd>
				<dd>Order money：{$oneOrder[0]->price}/ Pounds</dd>
				<dd>Order details：{$oneOrder[0]->text}</dd>
				
				<dd><input type="button" onclick="javascript:alert('pay sucessuflly')" name="send" value="Paypal" /></dd>
				{$oneOrder[0]->order_pay == 'paid'}
				{$oneOrder[0]->order_state == 'confirmed'}
			</dl>
			</form>
			{/if}
		</div>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>