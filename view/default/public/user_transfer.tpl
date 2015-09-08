<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyShop</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	Now:<a href="./">Home</a> Remit	
</div>
<div id="shop_main">
	<div id="main">
		<h2>Remit</h2>
		<div class="pay">
			{if $oneOrder[0]->order_state == 'Cancelled' || $oneOrder[0]->order_pay == 'paied' || $oneOrder[0]->order_delivery == 'deserved' || $oneOrder[0]->order_delivery == 'delivered'}
			<dl><dd>This order is locked<input type="button" value="back" onclick="javascript:history.go(-1);" /></dd></dl>
			{else}
			<dl>
				<dd>Order number：{$oneOrder[0]->ordernum}</dd>
				<dd>Order money：{$oneOrder[0]->price}/ Pounds</dd>
				<dd>Order details：{$oneOrder[0]->text}</dd>
				<dd>You chosn remit through bank, please remit to the bank account below：</dd>
				<dd><img src="view/default/images/image_pay.jpg" alt="bank account" /></dd>
				<dd>We will deliver the goods as soon as we received the money.</dd>
			</dl>
			{/if}
		</div>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>