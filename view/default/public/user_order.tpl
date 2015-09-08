<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 Now:<a href="./">Home</a> &gt; Myself
</div>
<div id="shop_main">
{include file='default/public/user_sidebar.tpl'}
<div id="main">	
	<h2><a href="?a=cart">[Go to pay]</a>Order list</h2>
	<table>
		<tr><th>Order number</th><th>Order time</th><th>Total</th><th>Order status</th><th>Operation</th></tr>
		{foreach from=$allOrder key=key item=value}
		<tr><td class="order_nums"><a href="?a=user&m=order_details&id={$value->id}">{$value->ordernum}</a></td>
		<td>{$value->date}</td>
		<td>{$value->price}</td>
		<td>
			{if  $value->order_state=='Cancelled'}
						<span style="color:red">Cancelled</span>
					{else}
						{if $value->order_delivery=='Delivered'}
							{if $value->refund==1}
								<span style="color:red">On refunding</span>
							{elseif $value->refund==2}
								<span style="color:green">Refunding success</span>
							{else}
								<span style="color:green">Delivered，wait to confirm</span>
							{/if}							
						{else}
							{if $value->order_delivery=='deserved'}
								{if $value->refund==1}
									<span style="color:red">On refunding</span>
								{elseif $value->refund==2}
									<span style="color:green">Refunding success</span>
								{else}
									<span style="color:green">deserved，wait to deliver</span>
								{/if}							
							{else}
								{if $value->order_pay=='paid'}	
									{if $value->refund==1}
										<span style="color:red">On refunding</span>
									{elseif $value->refund==2}
										<span style="color:green">Refunding success</span>
									{else}
										<span style="color:green">paid，wait to deserve</span>
									{/if}																	
														
								{else}
									{if $value->order_state=='confirmed'}
										<span style="color:green">confirmed，wait to pay</span>
									{else}
										<span style="color:#666">unconfirmed</span>
									{/if}
								{/if}
							{/if}					
						{/if}
					{/if}
		</td>
		<td>
			{if $value->order_delivery=='deserved' || $value->order_state=='Cancelled' || $value->order_pay=='paid'}	
				{if $value->order_state=='Cancelled' || $value->refund==2}
				<a style="color:red;" href="?a=user&m=deleteOrder&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false">delete</a>
				{elseif $value->refund=='0'}
				<a style="color:red;" href="?a=user&m=refund&id={$value->id}" onclick="return confirm('Information for applying for refunding：\n\n1. You can apply for refunding for paid、deserved or delivered goods；\n2.Paid or deserved goods should be applied in 72 hours;\n\nAre you sure to apply for refunding?') ? true : false">apply for refunding</a> 
				{else}
				----
				{/if}
			{else}
			<a style="color:green;" href="?a=user&m=runpaid&id={$value->id}">pay online</a> | 
			<a style="color:green;" href="?a=user&m=transfer&id={$value->id}">pay transfer</a> | 
				<a style="color:green;" href="?a=user&m=cash&id={$value->id}">pay cash</a> | 
				<a style="color:red;" href="?a=user&m=cancel&id={$value->id}" onclick="return confirm('Are you sure to Cancel?') ? true : false">Cancel </a> 
			{/if}
		
		</td></tr>
		{/foreach}
	</table>
	<div id="page">{$page}</div>
</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>